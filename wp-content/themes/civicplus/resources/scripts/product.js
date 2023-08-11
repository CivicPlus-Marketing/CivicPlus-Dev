import domReady from '@roots/sage/client/dom-ready';

/**
 * Application entrypoint
 */
domReady(async () => {
   const modals = document.querySelectorAll(".js-open-popup");

   modals.forEach(function (trigger) {
      trigger.addEventListener("click", function (event) {
         event.preventDefault();
         const modal = document.querySelector('.js-modal');
         modal.classList.add("open");
         document.body.style.overflow = 'hidden';
         const exits = modal.querySelectorAll(".modal-exit");
         exits.forEach(function (exit) {
            exit.addEventListener("click", function (event) {
               event.preventDefault();
               document.body.style.overflow = 'inherit';
               modal.classList.remove("open");
            });
         });
      });
   });
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
