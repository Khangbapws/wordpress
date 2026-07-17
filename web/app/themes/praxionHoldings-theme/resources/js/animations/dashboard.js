import { gsap } from '../lib/gsap';

export function dashboardAnimation() {
  const dashboard = document.querySelector('.dashboard-preview');

  if (!dashboard) return;

  const tl = gsap.timeline({
    defaults: {
      ease: 'power3.out',
    },
    delay: 0.5,
  });

  // Dashboard container
  tl.from(dashboard, {
    opacity: 0,
    y: 40,
    scale: 0.96,
    duration: 0.9,
  });

  // // Sidebar menu
  // tl.from(
  //   '.dashboard-preview aside nav > div',
  //   {
  //     opacity: 0,
  //     x: -20,
  //     stagger: 0.05,
  //     duration: 0.35,
  //   },
  //   '-=0.5',
  // );

  // KPI cards
  tl.from(
    '.dashboard-preview main > div:first-child > div',
    {
      opacity: 0,
      y: 20,
      stagger: 0.08,
      duration: 0.4,
    },
    '-=0.35',
  );

  // Revenue Chart
  tl.from(
    '.dashboard-preview .chart-bar',
    {
      scaleY: 0,
      transformOrigin: 'bottom',
      stagger: 0.04,
      duration: 0.4,
    },
    '-=0.2',
  );

  // Bottom cards
  tl.from(
    '.dashboard-preview .dashboard-section',
    {
      opacity: 0,
      y: 25,
      stagger: 0.12,
      duration: 0.45,
    },
    '-=0.2',
  );

  // Floating cards
  gsap.to('.floating-card', {
    y: -10,
    duration: 2.5,
    repeat: -1,
    yoyo: true,
    ease: 'sine.inOut',
    stagger: 0.25,
  });
}
