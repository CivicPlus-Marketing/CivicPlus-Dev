export function removeClass(arr, data = 'active') {
   arr.forEach(function (item) {
      item?.classList.remove(data);
   });
}

export function addClass(arr, data = 'active') {
   arr.forEach(function (item) {
      item?.classList.add(data);
   });
}

export function tabify(section = document) {
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

export function subTabify(section = document) {
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

export function youtube() {
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

export function loadscripts(arr) {
   !function (e, t, r) {
      function n() {
         for (; d[0] && "loaded" == d[0][f];) c = d.shift(), c[o] = !i.parentNode.insertBefore(c, i)
      }

      for (var s, a, c, d = [], i = e.scripts[0], o = "onreadystatechange", f = "readyState"; s = r.shift();) a = e.createElement(t), "async" in i ? (a.async = !1, e.head.appendChild(a)) : i[f] ? (d.push(a), a[o] = n) : e.write("<" + t + ' src="' + s + '" defer></' + t + ">"), a.src = s
   }(document, "script", arr)
};

export function wistia() {
   let wistia = document.querySelectorAll('.js-wistia-video-box');
   for (let i = 0; i < wistia.length; i++) {
      let source = "https://fast.wistia.com/embed/medias/" + wistia[i].dataset.embed + "/swatch";

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

      let VIDEO_ID = wistia[i].dataset.embed; //you might not need caps in your code
      window._wq = window._wq || [];
      _wq.push({
         id: VIDEO_ID,
         options: {
            videoFoam: true,
            autoPlay: true
         }
      });
   }
}