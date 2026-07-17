import { heroAnimation } from './hero';
import { scrollTriggerAnimation } from './scrolltrigger';
import { faqAnimation } from './faq';

export { heroAnimation, scrollTriggerAnimation, faqAnimation };

export function initAnimations() {
  heroAnimation();
  scrollTriggerAnimation();
  faqAnimation();
}
