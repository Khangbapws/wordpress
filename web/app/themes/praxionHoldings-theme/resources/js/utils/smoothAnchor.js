import lenis from '../lib/lenis';

export function initSmoothAnchor() {
  if (!lenis) return;

  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', (e) => {
      const target = document.querySelector(anchor.getAttribute('href'));

      if (!target) return;

      e.preventDefault();

      lenis.scrollTo(target, {
        offset: -80,
      });
    });
  });
}
