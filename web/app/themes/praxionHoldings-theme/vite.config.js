import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';
import laravel from 'laravel-vite-plugin';
import { wordpressPlugin, wordpressThemeJson } from '@roots/vite-plugin';

const appUrl =
  process.env.APP_URL ||
  process.env.DDEV_PRIMARY_URL ||
  'http://my-wp-bedrock-praxionholdingspage.ddev.site:33000/';
const appHost = new URL(appUrl).hostname;

process.env.APP_URL = appUrl;

export default defineConfig({
  base: '/app/themes/praxionHoldings-theme/public/build/',
  server: {
    host: '0.0.0.0',
    port: 5173,
    strictPort: true,
    origin: `${appUrl}:5173`,
    cors: {
      origin: /https?:\/\/([A-Za-z0-9-]+\.)?ddev\.site(?::\d+)?$/,
    },
    hmr: {
      protocol: 'wss',
      host: appHost,
      clientPort: 5173,
    },
  },
  plugins: [
    tailwindcss(),
    laravel({
      input: [
        'resources/css/app.css',
        'resources/js/app.js',
        'resources/css/editor.css',
        'resources/js/editor.js',
      ],
      refresh: true,
      assets: ['resources/images/**', 'resources/fonts/**'],
    }),

    wordpressPlugin(),

    // Generate the theme.json file in the public/build/assets directory
    // based on the Tailwind config and the theme.json file from base theme folder
    wordpressThemeJson({
      disableTailwindColors: false,
      disableTailwindFonts: false,
      disableTailwindFontSizes: false,
      disableTailwindBorderRadius: false,
    }),
  ],
  resolve: {
    alias: {
      '@scripts': '/resources/js',
      '@styles': '/resources/css',
      '@fonts': '/resources/fonts',
      '@images': '/resources/images',
    },
  },
});
