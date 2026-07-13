import { initIcons } from './lib/icons';
import { initAlpine } from './lib/alpine';

import './lib/lenis';

import { initSmoothAnchor } from './utils/smoothAnchor';

import { heroAnimation, scrollTriggerAnimation } from './animations';

function bootstrap() {
  initIcons();
  initAlpine();

  initSmoothAnchor();

  heroAnimation();
  scrollTriggerAnimation();
}

document.addEventListener('DOMContentLoaded', bootstrap);
