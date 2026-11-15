import gsap from 'gsap';

const REDUCED_MOTION_QUERY = '(prefers-reduced-motion: reduce)';
const FINE_POINTER_QUERY = '(hover: hover) and (pointer: fine)';

function parseRobotStates(rawValue, fallbackText) {
  try {
    const parsed = JSON.parse(rawValue || '[]');

    if (!Array.isArray(parsed)) return [];

    return parsed
      .map((item) => {
        if (typeof item === 'string') {
          return {
            text: item,
            dotClass: 'bg-emerald-500',
            pingClass: 'bg-emerald-400',
          };
        }

        if (item && typeof item === 'object' && typeof item.text === 'string') {
          return item;
        }

        return null;
      })
      .filter(Boolean);
  } catch {
    return fallbackText ? [{ text: fallbackText }] : [];
  }
}

function classTokens(value) {
  return typeof value === 'string'
    ? value.trim().split(/\s+/).filter(Boolean)
    : [];
}

export function initHeroScene() {
  const heroSection = document.querySelector('[data-hero-scene]');
  if (!heroSection) return;

  // Prevent duplicate listeners/timelines if the initializer is called twice.
  if (heroSection.dataset.heroSceneInitialized === 'true') return;
  heroSection.dataset.heroSceneInitialized = 'true';

  const prefersReducedMotion = window.matchMedia(REDUCED_MOTION_QUERY).matches;
  const hasFinePointer = window.matchMedia(FINE_POINTER_QUERY).matches;

  const revealItems = heroSection.querySelectorAll('[data-hero-reveal]');
  const stage = heroSection.querySelector('[data-hero-stage]');
  const card = heroSection.querySelector('[data-hero-card]');
  const robotInteractive = heroSection.querySelector(
    '[data-robot-interactive]',
  );
  const robotBody = heroSection.querySelector('[data-robot-body]');
  const robotShadow = heroSection.querySelector('[data-robot-shadow]');
  const robotBadge = heroSection.querySelector('[data-robot-badge]');
  const robotStatusText = heroSection.querySelector('[data-robot-status-text]');
  const robotDot = heroSection.querySelector('[data-robot-dot]');
  const robotDotPing = heroSection.querySelector('[data-robot-dot-ping]');

  const disposers = [];
  const clickTweens = [];
  let pointerFrame = 0;
  let latestPointerX = 0;
  let latestPointerY = 0;
  let introComplete = prefersReducedMotion;

  const listen = (target, eventName, handler, options) => {
    target.addEventListener(eventName, handler, options);
    disposers.push(() =>
      target.removeEventListener(eventName, handler, options),
    );
  };

  const ctx = gsap.context(() => {
    if (!prefersReducedMotion) {
      // 1. Entrance animation. Do not animate empty target collections.
      const hasEntranceTargets =
        revealItems.length > 0 || Boolean(card) || Boolean(robotInteractive);

      if (hasEntranceTargets) {
        const entrance = gsap.timeline({
          defaults: { ease: 'power3.out' },
          onComplete: () => {
            introComplete = true;
          },
        });

        let hasPreviousStep = false;

        if (revealItems.length) {
          entrance.from(revealItems, {
            y: 26,
            opacity: 0,
            duration: 0.75,
            stagger: 0.1,
            clearProps: 'transform,opacity',
          });
          hasPreviousStep = true;
        }

        if (card) {
          entrance.from(
            card,
            {
              y: 32,
              opacity: 0,
              scale: 0.97,
              duration: 0.85,
              clearProps: 'opacity',
            },
            hasPreviousStep ? '-=0.55' : 0,
          );
          hasPreviousStep = true;
        }

        if (robotInteractive) {
          entrance.from(
            robotInteractive,
            {
              y: -24,
              scale: 0.85,
              opacity: 0,
              duration: 0.8,
              ease: 'back.out(1.7)',
              clearProps: 'transform,opacity',
            },
            hasPreviousStep ? '-=0.5' : 0,
          );
        }
      } else {
        introComplete = true;
      }

      // 2. Gentle ambient movement. Each property has one owner:
      // robotBody owns float y/rotation; pointer parallax owns robotBody x.
      if (robotBody) {
        gsap.to(robotBody, {
          y: -11,
          rotation: 1.5,
          duration: 2.6,
          repeat: -1,
          yoyo: true,
          ease: 'sine.inOut',
        });
      }

      if (robotShadow) {
        gsap.to(robotShadow, {
          scaleX: 0.78,
          opacity: 0.08,
          duration: 2.6,
          repeat: -1,
          yoyo: true,
          ease: 'sine.inOut',
        });
      }

      // 3. Pointer parallax. Coalesce events to one layout read/update per frame.
      if (hasFinePointer && stage && (robotBody || card)) {
        const clamp = gsap.utils.clamp(-0.5, 0.5);
        const moveRobotX = robotBody
          ? gsap.quickTo(robotBody, 'x', { duration: 0.5, ease: 'power2.out' })
          : null;
        const moveCardX = card
          ? gsap.quickTo(card, 'x', { duration: 0.7, ease: 'power2.out' })
          : null;
        const moveCardY = card
          ? gsap.quickTo(card, 'y', { duration: 0.7, ease: 'power2.out' })
          : null;

        const updateParallax = () => {
          pointerFrame = 0;

          // Wait until the entrance timeline has finished so its y transform
          // cannot compete with pointer-driven transforms on the same card.
          if (!introComplete) return;

          const rect = stage.getBoundingClientRect();
          if (!rect.width || !rect.height) return;

          const normX = clamp((latestPointerX - rect.left) / rect.width - 0.5);
          const normY = clamp((latestPointerY - rect.top) / rect.height - 0.5);

          if (moveRobotX) moveRobotX(normX * 18);
          if (moveCardX) moveCardX(normX * -10);
          if (moveCardY) moveCardY(normY * -8);
        };

        const onPointerMove = (event) => {
          if (event.pointerType === 'touch' || !introComplete) return;

          latestPointerX = event.clientX;
          latestPointerY = event.clientY;

          if (!pointerFrame) {
            pointerFrame = window.requestAnimationFrame(updateParallax);
          }
        };

        const resetParallax = () => {
          if (pointerFrame) {
            window.cancelAnimationFrame(pointerFrame);
            pointerFrame = 0;
          }

          if (!introComplete) return;

          if (moveRobotX) moveRobotX(0);
          if (moveCardX) moveCardX(0);
          if (moveCardY) moveCardY(0);
        };

        listen(heroSection, 'pointermove', onPointerMove, { passive: true });
        listen(heroSection, 'pointerleave', resetParallax, { passive: true });
      }
    }

    // 4. Robot interaction remains available even when reduced motion is enabled.
    if (robotInteractive && robotBody && robotStatusText) {
      const states = parseRobotStates(
        robotInteractive.dataset.robotStates,
        robotStatusText.textContent.trim(),
      );

      if (states.length > 1) {
        let stateIndex = 0;

        const onRobotClick = () => {
          const previousState = states[stateIndex];
          stateIndex = (stateIndex + 1) % states.length;
          const nextState = states[stateIndex];

          robotStatusText.textContent = nextState.text;

          if (robotDot && previousState.dotClass && nextState.dotClass) {
            robotDot.classList.remove(...classTokens(previousState.dotClass));
            robotDot.classList.add(...classTokens(nextState.dotClass));
          }

          if (robotDotPing && previousState.pingClass && nextState.pingClass) {
            robotDotPing.classList.remove(
              ...classTokens(previousState.pingClass),
            );
            robotDotPing.classList.add(...classTokens(nextState.pingClass));
          }

          if (prefersReducedMotion) return;

          // Avoid stacking click tweens during rapid interaction.
          clickTweens.forEach((tween) => tween.kill());
          clickTweens.length = 0;

          clickTweens.push(
            gsap.fromTo(
              robotBody,
              { scale: 1 },
              {
                scale: 1.06,
                duration: 0.22,
                yoyo: true,
                repeat: 1,
                ease: 'back.out(2.5)',
                overwrite: 'auto',
              },
            ),
          );

          if (robotBadge) {
            clickTweens.push(
              gsap.fromTo(
                robotBadge,
                { scale: 0.95 },
                {
                  scale: 1,
                  duration: 0.3,
                  ease: 'back.out(2)',
                  overwrite: 'auto',
                },
              ),
            );
          }
        };

        listen(robotInteractive, 'click', onRobotClick);
      }
    }
  }, heroSection);

  // Return a complete disposer: DOM listeners, pending RAF and GSAP work.
  return () => {
    if (pointerFrame) {
      window.cancelAnimationFrame(pointerFrame);
      pointerFrame = 0;
    }

    disposers.forEach((dispose) => dispose());
    clickTweens.forEach((tween) => tween.kill());
    ctx.revert();
    delete heroSection.dataset.heroSceneInitialized;
  };
}
