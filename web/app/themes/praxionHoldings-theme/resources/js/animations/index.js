import { heroAnimation } from './hero';
import { scrollTriggerAnimation } from './scrolltrigger';
import { faqAnimation } from './faq';
import { dashboardAnimation } from './dashboard';

export {
  heroAnimation,
  scrollTriggerAnimation,
  faqAnimation,
  dashboardAnimation,
};

export function initAnimations() {
  heroAnimation();
  scrollTriggerAnimation();
  faqAnimation();
  dashboardAnimation();
}
