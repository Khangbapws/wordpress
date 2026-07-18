import { gsap } from '../lib/gsap';
import { allowsMotion, markAnimated } from './utils';

export function dashboardAnimation() {
  if (!allowsMotion()) return;

  document.querySelectorAll('[data-prx-dashboard-animation]').forEach((dashboard) => {
    if (!markAnimated(dashboard)) return;

    gsap.from(dashboard, {
      opacity: 0,
      y: 28,
      duration: 0.75,
      ease: 'power3.out',
      scrollTrigger: {
        trigger: dashboard,
        start: 'top 86%',
        once: true,
      },
    });
  });
}
