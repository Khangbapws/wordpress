import { gsap } from '../lib/gsap';

export function heroAnimation() {
  const hero = document.querySelector('#hero');

  if (!hero) return;

  // Animate to a new state
  gsap.to('.hero-title', {
    opacity: 1,
    y: 0,
    duration: 1,
    ease: 'power2.out',
  });

  // Animate from a state (element starts at these values)
  gsap.from('.hero-title', {
    opacity: 0,
    y: 50,
    duration: 1,
    ease: 'power2.out',
  });

  // Animate from → to explicitly
  gsap.fromTo(
    '.hero-title',
    { opacity: 0, y: 50 },
    { opacity: 1, y: 0, duration: 1 },
  );

  const tl = gsap.timeline();

  tl.from('.hero-title', { opacity: 0, y: 30, duration: 0.8 })
    .from('.hero-subtitle', { opacity: 0, y: 20, duration: 0.6 }, '-=0.4')
    .from('.hero-cta', { opacity: 0, y: 20, duration: 0.5 }, '-=0.3');

  gsap.from('.card', {
    opacity: 0,
    y: 40,
    duration: 0.6,
    stagger: 0.15, // 150ms between each card
    ease: 'power2.out',
  });
}
