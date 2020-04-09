importScripts('https://storage.googleapis.com/workbox-cdn/releases/3.0.0/workbox-sw.js');

workbox.routing.registerRoute(
    new RegExp('http://127.0.0.1:8000/api/taxes'),
    workbox.strategies.networkFirst()
);


workbox.routing.registerRoute(
  new RegExp('http://127.0.0.1:8000/api/liees'),
  workbox.strategies.networkFirst()
);


workbox.routing.registerRoute(
    new RegExp('https://fonts.(?:googleapis|gstatic).com/(.*)'),
    workbox.strategies.cacheFirst({
      cacheName: 'google-fonts',
      plugins: [
        new workbox.expiration.Plugin({
          maxEntries: 30,
        }),
        new workbox.cacheableResponse.Plugin({
          statuses: [0, 200]
        }),
      ],
    }),
  );

workbox.precaching.precacheAndRoute([
  {
    "url": "css/main.css",
    "revision": "d3072ab3693c185313018e404e07d914"
  },
  {
    "url": "http://127.0.0.1:8000/",
    "revision": "a40871df1e3a91dd14b9e21363d4cc71"
  },
  {
    "url": "js/user.js",
    "revision": "6b73f45a2506a26e00e425688eaa6514"
  },
  {
    "url": "js/liee.js",
    "revision": "6b73f45a2506a26e00e425688eaa6514"
  },{
    "url": "js/sync.js",
    "revision": "6b73f45a2506a26e00e425688eaa6514"
  }
  ,{
    "url": "css/style.css",
    "revision": "6b73f45a2506a26e00e425688eaa6514"
  },{
    "url": "/fonts/fontawesome-webfont.woff2?v=4.7.0",
    "revision": "6b73f45a2506a26e00e425688eaa6514"
  },
  {
    "url": "/images/b4.jpg",
    "revision": "6b73f45a2506a26e00e425688eaa6514"
  },

  {
    "url": "/images/m.jpg",
    "revision": "6b73f45a2506a26e00e425688eaa6514"
  },
  {
    "url": "css/font-awesome.min.css",
    "revision": "6b73f45a2506a26e00e425688eaa6514"
  },

  {
    "url": "https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js",
    "revision": "6b73f45a2506a26e00e425688eaa6514"
  },
  {
    "url": "http://127.0.0.1:8000/api/taxes",
    "revision": "6b73f45a2506a26e00e425688eaa6514"
  },
  {
    "url": "http://127.0.0.1:8000/api/liees",
    "revision": "6b73f45a2506a26e00e425688eaa6514"
  }

]);






// var staticCacheName = "pwa-v" + new Date().getTime();
// var filesToCache = [
//     '/offline',
//     '/127.0.0.1:800',
//     '/css/app.css',
//     '/js/app.js',
//     '/images/icons/icon-72x72.png',
//     '/images/icons/icon-96x96.png',
//     '/images/icons/icon-128x128.png',
//     '/images/icons/icon-144x144.png',
//     '/images/icons/icon-152x152.png',
//     '/images/icons/icon-192x192.png',
//     '/images/icons/icon-384x384.png',
//     '/images/icons/icon-512x512.png',
// ];

// // Cache on install
// self.addEventListener("install", event => {
//     this.skipWaiting();
//     event.waitUntil(
//         caches.open(staticCacheName)
//             .then(cache => {
//                 return cache.addAll(filesToCache);
//             })
//     )
// });

// workbox.routing.registerRoute(
//     new RegExp('http://127.0.0.1:8000/api/taxes'),
//     workbox.strategies.networkFirst()
// )

// // Clear cache on activate
// self.addEventListener('activate', event => {
//     event.waitUntil(
//         caches.keys().then(cacheNames => {
//             return Promise.all(
//                 cacheNames
//                     .filter(cacheName => (cacheName.startsWith("pwa-")))
//                     .filter(cacheName => (cacheName !== staticCacheName))
//                     .map(cacheName => caches.delete(cacheName))
//             );
//         })
//     );
// });

// // Serve from Cache
// self.addEventListener("fetch", event => {
//     event.respondWith(
//         caches.match(event.request)
//             .then(response => {
//                 return response || fetch(event.request);
//             })
//             .catch(() => {
//                 return caches.match('offline');
//             })
//     )
// });