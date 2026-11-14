import gsap from 'gsap';

export function initHeroScene() {
  const heroSection = document.querySelector('[data-hero-scene]');
  if (!heroSection) return;

  const prefersReducedMotion = window.matchMedia(
    '(prefers-reduced-motion: reduce)',
  ).matches;
  if (prefersReducedMotion) return;

  const ctx = gsap.context(() => {
    const revealItems = heroSection.querySelectorAll('[data-hero-reveal]');
    const stage = heroSection.querySelector('[data-hero-stage]');
    const card = heroSection.querySelector('[data-hero-card]');
    const robotInteractive = heroSection.querySelector(
      '[data-robot-interactive]',
    );
    const robotBody = heroSection.querySelector('[data-robot-body]');
    const robotShadow = heroSection.querySelector('[data-robot-shadow]');
    const robotBadge = heroSection.querySelector('[data-robot-badge]');
    const robotStatusText = heroSection.querySelector(
      '[data-robot-status-text]',
    );

    // 1. Nhịp xuất hiện ban đầu (Entrance Timeline)
    const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });

    tl.from(revealItems, {
      y: 26,
      opacity: 0,
      duration: 0.75,
      stagger: 0.1,
      clearProps: 'transform,opacity',
    })
      .from(
        card,
        {
          y: 32,
          opacity: 0,
          scale: 0.97,
          duration: 0.85,
          clearProps: 'transform,opacity',
        },
        '-=0.55',
      )
      .from(
        robotInteractive,
        {
          y: -24,
          scale: 0.85,
          opacity: 0,
          duration: 0.8,
          ease: 'back.out(1.7)',
          clearProps: 'transform,opacity',
        },
        '-=0.5',
      );

    // 2. Chuyển động bay lơ lửng vô tận của Robot + Bóng đổ đồng bộ
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

    // 3. Hiệu ứng Parallax 3D theo chuyển động chuột (Desktop)
    const isFinePointer = window.matchMedia('(pointer: fine)').matches;
    if (isFinePointer && stage) {
      const moveRobotX = robotBody
        ? gsap.quickTo(robotBody, 'x', { duration: 0.5, ease: 'power2.out' })
        : null;
      const rotateRobot = robotBody
        ? gsap.quickTo(robotBody, 'rotation', {
            duration: 0.5,
            ease: 'power2.out',
          })
        : null;
      const moveCardX = card
        ? gsap.quickTo(card, 'x', { duration: 0.7, ease: 'power2.out' })
        : null;
      const moveCardY = card
        ? gsap.quickTo(card, 'y', { duration: 0.7, ease: 'power2.out' })
        : null;

      heroSection.addEventListener('mousemove', (e) => {
        const rect = heroSection.getBoundingClientRect();
        const normX = (e.clientX - rect.left) / rect.width - 0.5;
        const normY = (e.clientY - rect.top) / rect.height - 0.5;

        if (moveRobotX) moveRobotX(normX * 18);
        if (rotateRobot) rotateRobot(normX * 8);
        if (moveCardX) moveCardX(normX * -10);
        if (moveCardY) moveCardY(normY * -8);
      });

      heroSection.addEventListener('mouseleave', () => {
        if (moveRobotX) moveRobotX(0);
        if (rotateRobot) rotateRobot(0);
        if (moveCardX) moveCardX(0);
        if (moveCardY) moveCardY(0);
      });
    }

    // 4. Tương tác khi người dùng click vào Robot (đọc đa ngôn ngữ từ data-robot-states)
    if (robotInteractive && robotBody && robotStatusText) {
      const robotDot = heroSection.querySelector('[data-robot-dot]');
      const robotDotPing = heroSection.querySelector('[data-robot-dot-ping]');

      let states = [];
      try {
        const rawStates = JSON.parse(
          robotInteractive.dataset.robotStates || '[]',
        );
        states = rawStates.map((item) =>
          typeof item === 'string'
            ? {
                text: item,
                dotClass: 'bg-emerald-500',
                pingClass: 'bg-emerald-400',
              }
            : item,
        );
      } catch (e) {
        states = [{ text: robotStatusText.textContent.trim() }];
      }

      if (states.length > 1) {
        let stateIndex = 0;

        robotInteractive.addEventListener('click', () => {
          const prev = states[stateIndex];
          stateIndex = (stateIndex + 1) % states.length;
          const next = states[stateIndex];

          robotStatusText.textContent = next.text;

          if (robotDot && robotDotPing && prev.dotClass && next.dotClass) {
            robotDot.classList.remove(prev.dotClass);
            robotDot.classList.add(next.dotClass);
            robotDotPing.classList.remove(prev.pingClass);
            robotDotPing.classList.add(next.pingClass);
          }

          gsap.fromTo(
            robotBody,
            { scale: 0.92 },
            {
              scale: 1.06,
              duration: 0.22,
              yoyo: true,
              repeat: 1,
              ease: 'back.out(2.5)',
            },
          );

          if (robotBadge) {
            gsap.fromTo(
              robotBadge,
              { scale: 0.95 },
              { scale: 1, duration: 0.3, ease: 'back.out(2)' },
            );
          }
        });
      }
    }
  }, heroSection);

  return () => ctx.revert();
}
