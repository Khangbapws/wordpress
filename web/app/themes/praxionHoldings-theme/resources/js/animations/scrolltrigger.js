import { gsap } from '../lib/gsap';
import { allowsMotion, markAnimated } from './utils';

export function scrollTriggerAnimation() {
  if (!allowsMotion()) return;

  document.querySelectorAll('.feature-section').forEach((section) => {
    if (!markAnimated(section)) return;

    gsap.from(section, {
      scrollTrigger: {
        trigger: section,
        start: 'top 82%',
        once: true,
      },
      opacity: 0,
      y: 36,
      duration: 0.7,
      ease: 'power3.out',
    });
  });
}
