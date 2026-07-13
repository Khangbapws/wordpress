import domReady from '@wordpress/dom-ready';

domReady(() => {
  //
});

// Example: Add a custom block style
wp.blocks.registerBlockStyle('core/heading', {
  name: 'accent-underline',
  label: 'Accent Underline',
});
