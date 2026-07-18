import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';
import { registerDashboard } from '../components/dashboard';

Alpine.plugin(collapse);

window.Alpine = Alpine;

let initialized = false;

export function initAlpine() {
  if (initialized) return;

  registerDashboard(Alpine);
  Alpine.start();
  initialized = true;
}
