import { initIcons } from './lib/icons';
import { initAlpine } from './lib/alpine';
import './lib/lenis';

import { initSmoothAnchor } from './utils/smoothAnchor';
import { initAnimations } from './animations';

import { initHeroScene } from './modules/hero-scene';
function bootstrap() {
  initIcons();

  initAlpine();

  initSmoothAnchor();

  initAnimations();

  initHeroScene();
}

document.addEventListener('DOMContentLoaded', bootstrap);
