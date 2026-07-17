import { gsap } from '../lib/gsap';
import { ScrollTrigger } from '../lib/gsap';

export function faqAnimation() {
  gsap.from('.faq-item', {
    opacity: 0,
    y: 30,

    duration: 0.6,

    stagger: 0.08,

    ease: 'power3.out',

    scrollTrigger: {
      trigger: '.faq-list',

      start: 'top 75%',
    },
  });
}
