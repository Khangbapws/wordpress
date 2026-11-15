import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

const REDUCED_MOTION_QUERY = '(prefers-reduced-motion: reduce)';
const FINE_POINTER_QUERY = '(hover: hover) and (pointer: fine)';
const HIDDEN_SPOTLIGHT_POSITION = '-9999px';

export function initCapabilitiesSection() {
  const section = document.querySelector('[data-capabilities-section]');
  if (!section) return;

  // Prevent duplicate ScrollTriggers and pointer listeners.
  if (section.dataset.capabilitiesInitialized === 'true') return;
  section.dataset.capabilitiesInitialized = 'true';

  const grid = section.querySelector('[data-bento-grid]');
  const cards = Array.from(section.querySelectorAll('[data-bento-card]'));
  const prefersReducedMotion = window.matchMedia(REDUCED_MOTION_QUERY).matches;
  const hasFinePointer = window.matchMedia(FINE_POINTER_QUERY).matches;

  const disposers = [];
  let pointerFrame = 0;
  let pendingCard = null;
  let activeCard = null;
  let pointerX = 0;
  let pointerY = 0;

  const listen = (target, eventName, handler, options) => {
    target.addEventListener(eventName, handler, options);
    disposers.push(() =>
      target.removeEventListener(eventName, handler, options),
    );
  };

  const resetCardSpotlight = (card) => {
    if (!card) return;
    card.style.setProperty('--mouse-x', HIDDEN_SPOTLIGHT_POSITION);
    card.style.setProperty('--mouse-y', HIDDEN_SPOTLIGHT_POSITION);
  };

  // 1. Pointer spotlight: update only the card currently under the pointer.
  // The previous version measured and wrote styles to every card on every move.
  if (grid && cards.length && hasFinePointer && !prefersReducedMotion) {
    cards.forEach(resetCardSpotlight);

    const updateSpotlight = () => {
      pointerFrame = 0;

      const card = pendingCard;
      if (!card || !grid.contains(card)) return;

      // If the pointer crossed into another card, hide the previous card's glow.
      if (activeCard && activeCard !== card) {
        resetCardSpotlight(activeCard);
      }

      // One geometry read for the active card per animation frame.
      const rect = card.getBoundingClientRect();
      if (!rect.width || !rect.height) return;

      card.style.setProperty('--mouse-x', `${pointerX - rect.left}px`);
      card.style.setProperty('--mouse-y', `${pointerY - rect.top}px`);
      activeCard = card;
    };

    const onPointerMove = (event) => {
      if (event.pointerType === 'touch') return;

      const target =
        event.target instanceof Element
          ? event.target.closest('[data-bento-card]')
          : null;

      const card = target && grid.contains(target) ? target : null;

      if (!card) {
        pendingCard = null;
        if (activeCard) resetCardSpotlight(activeCard);
        activeCard = null;
        return;
      }

      pendingCard = card;
      pointerX = event.clientX;
      pointerY = event.clientY;

      if (!pointerFrame) {
        pointerFrame = window.requestAnimationFrame(updateSpotlight);
      }
    };

    const onPointerLeave = () => {
      pendingCard = null;

      if (pointerFrame) {
        window.cancelAnimationFrame(pointerFrame);
        pointerFrame = 0;
      }

      if (activeCard) resetCardSpotlight(activeCard);
      activeCard = null;
    };

    listen(grid, 'pointermove', onPointerMove, { passive: true });
    listen(grid, 'pointerleave', onPointerLeave, { passive: true });
  }

  // 2. Scroll reveals. Keep pointer interaction independent from reduced motion.
  let ctx = null;

  if (!prefersReducedMotion) {
    const revealHeaders = section.querySelectorAll('[data-cap-reveal]');

    if (revealHeaders.length || cards.length) {
      ctx = gsap.context(() => {
        if (revealHeaders.length) {
          gsap.from(revealHeaders, {
            y: 24,
            opacity: 0,
            duration: 0.7,
            stagger: 0.1,
            ease: 'power3.out',
            clearProps: 'transform,opacity',
            scrollTrigger: {
              trigger: section,
              start: 'top 82%',
              once: true,
            },
          });
        }

        if (cards.length && grid) {
          gsap.from(cards, {
            y: 30,
            opacity: 0,
            scale: 0.985,
            duration: 0.75,
            stagger: 0.08,
            ease: 'power3.out',
            clearProps: 'transform,opacity',
            scrollTrigger: {
              trigger: grid,
              start: 'top 84%',
              once: true,
            },
          });
        }
      }, section);
    }
  }

  return () => {
    if (pointerFrame) {
      window.cancelAnimationFrame(pointerFrame);
      pointerFrame = 0;
    }

    cards.forEach((card) => {
      card.style.removeProperty('--mouse-x');
      card.style.removeProperty('--mouse-y');
    });

    activeCard = null;
    pendingCard = null;
    disposers.forEach((dispose) => dispose());
    ctx?.revert();
    delete section.dataset.capabilitiesInitialized;
  };
}
