import { gsap } from '../lib/gsap';
import { allowsMotion, markAnimated } from './utils';

export function heroAnimation() {
  if (!allowsMotion()) return;

  document.querySelectorAll('.hero-title').forEach((title) => {
    if (!markAnimated(title)) return;

    const root = title.closest('section') ?? document;
    const subtitle = root.querySelector('.hero-subtitle');
    const actions = root.querySelector('.hero-cta');
    const timeline = gsap.timeline({ defaults: { ease: 'power3.out' } });

    timeline.from(title, { y: 28, opacity: 0, duration: 0.7 });

    if (subtitle) {
      timeline.from(subtitle, { y: 16, opacity: 0, duration: 0.5 }, '-=0.35');
    }

    if (actions) {
      timeline.from(actions, { y: 14, opacity: 0, duration: 0.45 }, '-=0.3');
    }
  });
}
