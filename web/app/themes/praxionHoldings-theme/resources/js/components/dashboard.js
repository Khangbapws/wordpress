export function registerDashboard(Alpine) {
  Alpine.data('prxDashboard', () => ({
    tab: 'overview',
    tabs: ['overview', 'team', 'inventory', 'retention'],
    branch: 'all',

    get branchLabel() {
      const labels = {
        all: 'All branches',
        'branch-a': 'Sample Branch A',
        'branch-b': 'Sample Branch B',
      };

      return labels[this.branch] ?? labels.all;
    },

    selectTab(nextTab, shouldFocus = false) {
      if (!this.tabs.includes(nextTab)) return;

      this.tab = nextTab;

      if (shouldFocus) {
        this.$nextTick(() => {
          document.getElementById(`dashboard-tab-${nextTab}`)?.focus();
        });
      }
    },

    moveTab(direction) {
      const currentIndex = this.tabs.indexOf(this.tab);
      const nextIndex =
        (currentIndex + direction + this.tabs.length) % this.tabs.length;

      this.selectTab(this.tabs[nextIndex], true);
    },
  }));
}
