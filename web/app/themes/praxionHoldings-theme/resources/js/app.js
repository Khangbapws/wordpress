import { initIcons } from './lib/icons';
import { initAlpine } from './lib/alpine';
import './lib/lenis';

import { initSmoothAnchor } from './utils/smoothAnchor';
import { initAnimations } from './animations';

import { initHeroScene } from './modules/hero-scene';
import { initCapabilitiesSection } from './modules/capabilities-section';
function bootstrap() {
  initIcons();

  initAlpine();

  initSmoothAnchor();

  initAnimations();

  initHeroScene();
  initCapabilitiesSection();
}

document.addEventListener('DOMContentLoaded', bootstrap);
