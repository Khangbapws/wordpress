import { initIcons } from './lib/icons';
import { initAlpine } from './lib/alpine';
import './lib/lenis';
import { initSmoothAnchor } from './utils/smoothAnchor';
import { initAnimations } from './animations'; // Gom lên đầu và chỉ giữ lại cái cần dùng

function bootstrap() {
  initIcons();
  initAlpine();
  initSmoothAnchor();
  initAnimations();
}

document.addEventListener('DOMContentLoaded', bootstrap);
