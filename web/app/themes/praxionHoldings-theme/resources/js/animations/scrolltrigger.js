import { gsap, ScrollTrigger } from '../lib/gsap';

export function scrollTriggerAnimation() {
  // Your scroll trigger animations here
  gsap.from('.feature-section', {
    scrollTrigger: {
      trigger: '.feature-section',
      start: 'top 80%', // Animation starts when top of element hits 80% of viewport
      end: 'top 20%', // Animation ends when top hits 20%
      toggleActions: 'play none none reverse',
    },
    opacity: 0,
    y: 60,
    duration: 1,
  });
}
