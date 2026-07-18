import { gsap } from '../lib/gsap';
import { allowsMotion, markAnimated } from './utils';

export function faqAnimation() {
  if (!allowsMotion()) return;

  document.querySelectorAll('.faq-list').forEach((list) => {
    if (!markAnimated(list)) return;

    const items = list.querySelectorAll('.faq-item');
    if (!items.length) return;

    gsap.from(items, {
      opacity: 0,
      y: 20,
      duration: 0.5,
      stagger: 0.06,
      ease: 'power3.out',
      scrollTrigger: {
        trigger: list,
        start: 'top 82%',
        once: true,
      },
    });
  });
}
