export function allowsMotion() {
  return !window.matchMedia('(prefers-reduced-motion: reduce)').matches;
}

export function markAnimated(element) {
  if (!element || element.dataset.prxAnimated === 'true') return false;

  element.dataset.prxAnimated = 'true';
  return true;
}
