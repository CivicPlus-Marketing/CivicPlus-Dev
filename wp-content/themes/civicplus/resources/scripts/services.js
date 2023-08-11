import domReady from '@roots/sage/client/dom-ready';

/**
 * Application entrypoint
 */
domReady(async () => {
   const $h2 = document.querySelectorAll('.js-content h2');
   const $nav = document.querySelector(".js-post-navigation");
   const $postNavBox = document.querySelector(".post-nav-box");

   if ($h2.length > 0) {
      $h2.forEach(function (item, i) {
         // console.log('item: ', item);

         item.setAttribute('id', `title-${i}`);
         let link = `<li><a href="#title-${i}">${item.innerHTML}</a></li>`;
         $nav.insertAdjacentHTML('beforeend', link);
      });
   } else {
      $postNavBox.remove();
   }

   window.addEventListener('scroll', function () {
      let $nav = document.querySelectorAll(".js-post-navigation li");

      let winScrollTop = window.scrollY;

      // console.log('winScrollTop: ', winScrollTop);

      $h2.forEach(function (item, i) {
         let $h2Top = item.offsetTop;

         // console.log(`$h2Top: ${i}`, $h2Top);

         if ($h2Top <= winScrollTop) {
            item.classList.add(`active`);
            $nav[i].classList.add(`active`);
            if (i > 0) {
               $nav[i].classList.add(`done`);
            }
         } else {
            item.classList.remove(`active`);
            $nav[i].classList.remove(`active`);

            if (i > 0) {
               $nav[i - 1].classList.remove(`done`);
            }
         }
      });

   });
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
//
// $(document).ready(function () {
//   $(".js-content h2").each(function (i) {
//     // console.log('H2', $(this).text());
//     $(this).attr('id', `title-${i}`);
//     let link = `<li><a href="#title-${i}">${$(this).text()}</a></li>`;
//     $('.js-post-navigation').append(link);
//   });
// });
//

// });
