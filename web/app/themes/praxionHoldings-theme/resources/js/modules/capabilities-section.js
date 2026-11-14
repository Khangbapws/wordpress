import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

export function initCapabilitiesSection() {
  const section = document.querySelector('[data-capabilities-section]');
  if (!section) return;

  const grid = section.querySelector('[data-bento-grid]');
  const cards = section.querySelectorAll('[data-bento-card]');

  // 1. Hiệu ứng ánh sáng Spotlight theo chuột (chỉ chạy trên thiết bị có chuột)
  const isFinePointer = window.matchMedia('(pointer: fine)').matches;
  if (isFinePointer && grid && cards.length) {
    let rafId = null;

    grid.addEventListener('pointermove', (e) => {
      if (rafId) cancelAnimationFrame(rafId);

      rafId = requestAnimationFrame(() => {
        cards.forEach((card) => {
          const rect = card.getBoundingClientRect();
          card.style.setProperty('--mouse-x', `${e.clientX - rect.left}px`);
          card.style.setProperty('--mouse-y', `${e.clientY - rect.top}px`);
        });
      });
    });
  }

  // 2. Nhịp xuất hiện khi cuộn trang (tôn trọng cài đặt giảm chuyển động)
  const prefersReducedMotion = window.matchMedia(
    '(prefers-reduced-motion: reduce)',
  ).matches;
  if (prefersReducedMotion) return;

  const ctx = gsap.context(() => {
    const revealHeaders = section.querySelectorAll('[data-cap-reveal]');

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

    if (cards.length) {
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

  return () => ctx.revert();
}
