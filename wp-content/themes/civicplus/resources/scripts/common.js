import domReady from '@roots/sage/client/dom-ready';
import Splide from '@splidejs/splide';
import {AutoScroll} from '@splidejs/splide-extension-auto-scroll';

/**
 * Application entrypoint
 */
domReady(async () => {

   /*FAQs*/
   accordions();

   /*Start Products Tabs*/
   productTabs();

   /*Start Tabs*/
   tabify();
   subTabify();

   /*Star Videos*/
   youtube();
   wistia();

   /*Sliders*/
   /*Slider Cases*/
   const $casesSections = document.querySelectorAll('.js-cases-section')
   if ($casesSections.length > 0) {
      $casesSections.forEach(function (section) {
         const cases = section.querySelector('.js-cases-slider');
         let casesSlider = new Splide(cases, {
            type: 'fade',
            rewind: true,
            pagination: false,
            arrows: false,
         });

         const logos = section.querySelector('.js-logos-slider');
         let logosSlider = new Splide(logos, {
            fixedWidth: 80,
            gap: 28,
            rewind: true,
            pagination: false,
            isNavigation: true,
            arrows: true,
         });

         casesSlider.sync(logosSlider);
         casesSlider.mount();
         logosSlider.mount();
      });
   }

   /*Slider Cards*/
   const $cardsSections = document.querySelectorAll('.js-cards-section')
   if ($cardsSections.length > 0) {
      let perPage = 4;

      if (document.querySelector('.page-template-template-product')) {
         perPage = 3;
      }

      $cardsSections.forEach(function (section) {
         let slider = section.querySelector('.js-cards-slider');
         let cards = new Splide(slider, {
            // type: 'fade',
            perPage: perPage,
            rewind: true,
            pagination: false,
            arrows: false,

            breakpoints: {
               992: {
                  perPage: 3,
                  pagination: true,
               },
               768: {
                  perPage: 2,
               },
               568: {
                  perPage: 1,
               },
            },
         });

         cards.mount();
      });
   }

   /*Slider History*/
   const $historySliders = document.querySelectorAll('.js-history-slider')
   if ($historySliders.length > 0) {
      $historySliders.forEach(function (item) {
         let slider = new Splide(item, {
            type: 'loop',
            fixedWidth: 160,
            rewind: true,
            pagination: false,
            arrows: false,
            autoScroll: {
               speed: 0.2,
            },
         });

         slider.mount({AutoScroll});
      });

   }

   /*Slider Resources*/
   const $resourcesSliders = document.querySelectorAll('.js-resources-slider')
   if ($resourcesSliders.length > 0) {
      let perPage = 3;

      $resourcesSliders.forEach(function (item) {
         let slider = new Splide(item, {
            // type: 'fade',
            perPage: perPage,
            rewind: true,
            pagination: false,
            arrows: false,

            breakpoints: {
               992: {
                  perPage: 3,
                  pagination: true,
               },
               768: {
                  perPage: 2,
               },
               568: {
                  perPage: 1,
               },
            },
         });

         slider.mount();
      });
   }
});

/**
 * Products Tabs / Products Filtration
 */
function productTabs() {
   const $tabBox = document.querySelector('main .js-tab-box');

   if ($tabBox) {
      const $productsNav = $tabBox.querySelectorAll('.js-products-nav');
      const $productsCards = $tabBox.querySelectorAll('.js-card');

      // console.log('Start Tabs: ', $productsNav);

      $productsNav.forEach(function (item) {
         // console.log('Tab');

         item.addEventListener('click', function () {
            // console.log('Click Tabs');

            const active = this.getAttribute('data-product');

            if (active == 'all') {
               addClass($productsCards, 'active');
            } else {
               const $activeCards = $tabBox.querySelectorAll('.' + active);

               removeClass($productsCards, 'active');
               addClass($activeCards, 'active');
            }

            removeClass($productsNav, 'active');

            this.classList.add('active');
         });
      });
   }
}

/**
 * FAQs / Accordion
 */
function accordions() {
   const $questions = document.querySelectorAll('.question');

   $questions?.forEach(function (question) {
      question.addEventListener('click', () => {
         question.classList.toggle('is-active');
      });
   })
}


/**
 * Remove Class
 * @param arr
 * @param data
 */
function removeClass(arr, data = 'active') {
   arr.forEach(function (item) {
      item?.classList.remove(data);
   });
}

/**
 * Add Class
 * @param arr
 * @param data
 */
function addClass(arr, data = 'active') {
   arr.forEach(function (item) {
      item?.classList.add(data);
   });
}

/**
 * Tabs
 * @param section
 */
function tabify(section = document) {
   for (let tab of section.querySelectorAll(".js-tabs")) {
      // (A) GET HEADERS & BODY
      let htabs = tab.querySelectorAll(".js-tabs-nav"),
         btabs = tab.querySelectorAll(".js-tabs-body");
      if (htabs.length != btabs.length) {
         console.error("Number of tabs do not match!");
         continue;
      }

      // (B) CLICK TO TOGGLE TAB
      for (let i = 0; i < htabs.length; i++) {
         htabs[i].onclick = () => {
            for (let j = 0; j < htabs.length; j++) {
               if (i == j) {
                  htabs[j]?.classList.add("active");
                  btabs[j]?.classList.add("active");
               } else {
                  htabs[j]?.classList.remove("active");
                  btabs[j]?.classList.remove("active");
               }
            }
         };
      }

      // (C) OPEN FIRST TAB BY DEFAULT - IF NONE IS OPEN
      htabs[0]?.classList.add("active");
      btabs[0]?.classList.add("active");

   }
}

/**
 * Subtabs
 * @param section
 */
function subTabify(section = document) {
   for (let tab of section.querySelectorAll(".js-subtabs")) {
      // (A) GET HEADERS & BODY
      let htabs = tab.querySelectorAll(".js-subtabs-nav"),
         btabs = tab.querySelectorAll(".js-subtabs-body");
      if (htabs.length != btabs.length) {
         console.error("Number of tabs do not match!");
         continue;
      }

      // (B) CLICK TO TOGGLE TAB
      for (let i = 0; i < htabs.length; i++) {
         htabs[i].onclick = () => {
            for (let j = 0; j < htabs.length; j++) {
               if (i == j) {
                  htabs[j]?.classList.add("active");
                  btabs[j]?.classList.add("active");
               } else {
                  htabs[j]?.classList.remove("active");
                  btabs[j]?.classList.remove("active");
               }
            }
         };
      }

      // (C) OPEN FIRST TAB BY DEFAULT - IF NONE IS OPEN
      htabs[0]?.classList.add("active");
      btabs[0]?.classList.add("active");
   }
}

/**
 * Youtube
 */
function youtube() {
   // console.log('run');
   //Load YouTube Videos on page...
   let youTubeVideos = document.querySelectorAll('.js-youtube');
   for (var i = 0; i < youTubeVideos.length; i++) {
      let thumbnail = "https://img.youtube.com/vi/" + youTubeVideos[i].dataset.embed + "/maxresdefault.jpg";

      //set microdata attributes for SEO
      youTubeVideos[i].setAttribute("itemprop", "video");
      youTubeVideos[i].setAttribute("itemscope", '');
      youTubeVideos[i].setAttribute("itemtype", "http://schema.org/VideoObject");

      //set HTML
      youTubeVideos[i].innerHTML = '<div class="play"></div>' +
         '<meta itemprop="embedURL" content="https://www.youtube.com/embed/' + youTubeVideos[i].dataset.embed + '" />' +
         '<img style="cursor: pointer;" width="1120" height="630" src="' + thumbnail + '" />';

      //add click event that will load YouTube video
      youTubeVideos[i].addEventListener("click", function () {
         this.innerHTML = '<iframe width="1120" height="630" frameBorder="0" ' +
            'allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"' +
            'src="https://www.youtube.com/embed/' + this.dataset.embed + '?enablejsapi=1&rel=0&showinfo=0&autoplay=1"' +
            ' allowFullScreen="allowfullscreen"></iframe>';
      });

   }
}

/**
 * Load Scripts
 * @param arr
 */
function loadscripts(arr) {
   !function (e, t, r) {
      function n() {
         for (; d[0] && "loaded" == d[0][f];) c = d.shift(), c[o] = !i.parentNode.insertBefore(c, i)
      }

      for (var s, a, c, d = [], i = e.scripts[0], o = "onreadystatechange", f = "readyState"; s = r.shift();) a = e.createElement(t), "async" in i ? (a.async = !1, e.head.appendChild(a)) : i[f] ? (d.push(a), a[o] = n) : e.write("<" + t + ' src="' + s + '" defer></' + t + ">"), a.src = s
   }(document, "script", arr)
};

/**
 * Wistia
 */
function wistia() {
   let wistia = document.querySelectorAll('.js-wistia-video-box');
   for (let i = 0; i < wistia.length; i++) {
      let source = "https://fast.wistia.com/embed/medias/" + wistia[i].dataset.embed + "/swatch";

      let url = 'https://fast.wistia.net/oembed?url=https://home.wistia.com/medias/' + wistia[i].dataset.embed + '?embedType=async&videoWidth=640';

      fetch(url, {
         method: 'GET', headers: {
            'Accept': 'application/json',
         },
      })
         .then(response => response.json())
         .then(response => {
            source = response['thumbnail_url'];
            let image = new Image();
            image.src = source;
            image.addEventListener("load", function () {
               wistia[i].querySelector('.js-wistia-placeholder').innerHTML = '<div class="playbtn"></div>';
               wistia[i].querySelector('.js-wistia-placeholder').appendChild(image);
            }(i));
         })

      // console.log('source', source);

      let image = new Image();
      image.src = source;
      image.addEventListener("load", function () {
         wistia[i].querySelector('.js-wistia-placeholder').innerHTML = '<div class="playbtn"></div>';
         wistia[i].querySelector('.js-wistia-placeholder').appendChild(image);
      }(i));

      wistia[i].querySelector('.js-wistia-placeholder').addEventListener("click", function () {
         loadscripts(["//fast.wistia.com/embed/medias/" + wistia[i].dataset.embed + ".jsonp", "//fast.wistia.com/assets/external/E-v1.js"]);

         this.classList.add('hidden');
         wistia[i].querySelector('.js-wistia-video').classList.add('showed');
      });

      let VIDEO_ID = wistia[i].dataset.embed;
      window._wq = window._wq || [];
      _wq.push({
         id: VIDEO_ID, options: {
            videoFoam: true, autoPlay: true
         }
      });
   }
}

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
