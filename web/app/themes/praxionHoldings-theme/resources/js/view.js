// view.js
import { store, getContext } from '@wordpress/interactivity';

store('my-plugin/donation-calc', {
  state: {
    get treesPlanted() {
      const ctx = getContext();
      return Math.floor(ctx.amount / 5);
    },
  },
  actions: {
    updateAmount(event) {
      const ctx = getContext();
      ctx.amount = Number(event.target.value);
    },
  },
});

import { store, getContext, getElement } from '@wordpress/interactivity';

store('my-plugin/block-name', {
  // Reactive state (global to all instances of this store)
  state: {
    count: 0,

    // Computed values (derived state)
    get doubled() {
      return store('my-plugin/block-name').state.count * 2;
    },
  },

  // Actions (modify state in response to events)
  actions: {
    increment() {
      store('my-plugin/block-name').state.count++;
    },

    updateFromInput(event) {
      const ctx = getContext();
      ctx.value = event.target.value;
    },
  },

  // Callbacks (side effects — for watch and init)
  callbacks: {
    onInit() {
      const ctx = getContext();
      const { ref } = getElement();
      // ref is the DOM element with data-wp-init
    },

    logChange() {
      const ctx = getContext();
      console.log('Context changed:', ctx);
    },
  },
});

import { store, getContext } from '@wordpress/interactivity';

store('my-theme/accordion', {
  state: {
    get isOpen() {
      const parent = getContext();
      const child = getContext();
      return parent.activeIndex === child.index;
    },
  },
  actions: {
    toggle() {
      const parent = getContext();
      const child = getContext();
      parent.activeIndex =
        parent.activeIndex === child.index ? -1 : child.index;
    },
  },
});
