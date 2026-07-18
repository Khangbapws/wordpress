import Lenis from 'lenis';
import { gsap, ScrollTrigger } from './gsap';

const reducedMotion = window.matchMedia(
  '(prefers-reduced-motion: reduce)',
).matches;

const lenis = reducedMotion
  ? null
  : new Lenis({
      duration: 1.2,
      easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
      touchMultiplier: 2,
    });

if (lenis) {
  lenis.on('scroll', ScrollTrigger.update);

  gsap.ticker.add((time) => {
    lenis.raf(time * 1000);
  });

  gsap.ticker.lagSmoothing(0);
}

export default lenis;
