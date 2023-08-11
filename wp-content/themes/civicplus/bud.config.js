/**
 * Build configuration
 *
 * @see {@link https://roots.io/docs/sage/ sage documentation}
 * @see {@link https://bud.js.org/guides/configure/ bud.js configuration guide}
 *
 * @typedef {import('@roots/bud').Bud} Bud
 * @param {Bud} app
 */
export default async (app) => {
   /**
    * Application entrypoints
    * @see {@link https://bud.js.org/docs/bud.entry/}
    */
   app
      .entry({
         author: ['@styles/author'],
         awards: ['@styles/awards'],
         global: ['@styles/global', '@scripts/common'],
         icomoon: ['@fonts/icomoon/style'],
         home: ['@styles/home', '@scripts/template-home'],
         default: ['@styles/default'],
         state: ['@styles/state'],
         thankYou: ['@styles/thank-you'],
         useCase: ['@styles/use-case', '@scripts/template-home'],
         careers: ['@styles/careers'],
         about: ['@styles/about'],
         demo: ['@styles/demo'],
         demoSuccess: ['@styles/demo-success'],
         product: ['@styles/product', '@scripts/product'],
         contact: ['@styles/contact'],
         productsArchive: ['@styles/products-archive'],
         tool: ['@styles/tool'],
         toolsArchive: ['@styles/tools-archive'],
         single: ['@styles/single', '@scripts/single'],
         singleWithForm: ['@styles/single-with-form'],
         singleWebinars: ['@styles/single-webinars'],
         pricing: ['@styles/pricing'],
         services: ['@styles/services', '@scripts/services'],
         archive: ['@styles/archive'],
         archiveCaseStudies: ['@styles/archive-case-studies'],
         singleCaseStudies: ['@styles/single-case-studies', '@scripts/single'],
         security: ['@styles/security'],
         history: ['@styles/history'],
         notFound: ['@styles/not-found'],
      })

      /**
       * Directory contents to be included in the compilation
       * @see {@link https://bud.js.org/docs/bud.assets/}
       */
      .assets(['images'])

      /**
       * Matched files trigger a page reload when modified
       * @see {@link https://bud.js.org/docs/bud.watch/}
       */
      .watch(['resources/views', 'app'])

      /**
       * Proxy origin (`WP_HOME`)
       * @see {@link https://bud.js.org/docs/bud.proxy/}
       */
      .proxy('http://localhost/cps/')

      /**
       * Development origin
       * @see {@link https://bud.js.org/docs/bud.serve/}
       */
      .serve('http://localhost:3000/cps/')

      /**
       * URI of the `public` directory
       * @see {@link https://bud.js.org/docs/bud.setPublicPath/}
       */
      .setPublicPath('/wp-content/themes/civicplus/public/')

      /**
       * Generate WordPress `theme.json`
       *
       * @note This overwrites `theme.json` on every build.
       *
       * @see {@link https://bud.js.org/extensions/sage/theme.json/}
       * @see {@link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/}
       */
      .wpjson.settings({
      color: {
         custom: false,
         customDuotone: false,
         customGradient: false,
         defaultDuotone: false,
         defaultGradients: false,
         defaultPalette: false,
         duotone: [],
      },
      custom: {
         spacing: {},
         typography: {
            'font-size': {},
            'line-height': {},
         },
      },
      spacing: {
         padding: true,
         units: ['px', '%', 'em', 'rem', 'vw', 'vh'],
      },
      typography: {
         customFontSize: false,
      },
   })
      .useTailwindColors()
      .useTailwindFontFamily()
      .useTailwindFontSize()
      .enable();
};
