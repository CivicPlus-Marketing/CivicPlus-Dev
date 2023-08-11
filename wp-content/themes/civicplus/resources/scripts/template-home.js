import domReady from '@roots/sage/client/dom-ready';

domReady(async () => {
   const $sections = document.querySelectorAll('.js-content-box section');
   const $nav = document.querySelector(".js-post-navigation");
   const $postNavBox = document.querySelector(".post-nav-box");

   if ($sections.length > 0) {
      $sections.forEach(function (section, i) {
         // console.log('item: ', item);

         section.setAttribute('id', `section-${i}`);
         let link = `<li><a href="#section-${i}">${section.getAttribute('data-title')}</a></li>`;
         $nav.insertAdjacentHTML('beforeend', link);
      });
   } else {
      $postNavBox.remove();
   }

   window.addEventListener('scroll', function () {
      let $nav = document.querySelectorAll(".js-post-navigation li");

      let winScrollTop = window.scrollY;

      // console.log('winScrollTop: ', winScrollTop);

      $sections.forEach(function (item, i) {
         let $sectionsTop = item.offsetTop;

         // console.log(`$h2Top: ${i}`, $h2Top);

         if ($sectionsTop <= winScrollTop) {
            item.classList.add('active');
            $nav[i].classList.add('active');
            if (i > 0) {
               $nav[i].classList.add('done');
            }
         } else {
            item.classList.remove('active');
            $nav[i].classList.remove('active');

            if (i > 0) {
               $nav[i - 1].classList.remove('done');
            }
         }
      });

   });

});