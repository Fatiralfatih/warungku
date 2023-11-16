(function () {
  "use strict";

  /*Basic Gallery */
  var lightbox = GLightbox({
    selector: '.glightbox'
});
  lightbox.on('slide_changed', ({ prev, current }) => {
    const { slideIndex, slideNode, slideConfig, player } = current;
  });
  var lightbox1 = GLightbox({
    selector: ".gallery"
  });

  /*Image with Description*/
  var lightboxDescription = GLightbox({
    selector: '.gallery2'
  });

  var lightboxVideo = GLightbox({
    selector: '.gallery3'
  });
  lightboxVideo.on('slide_changed', ({ prev, current }) => {

    const { slideIndex, slideNode, slideConfig, player } = current;

    if (player) {
      if (!player.ready) {
        // If player is not ready
        player.on('ready', (event) => {
          // Do something when video is ready
        });
      }

      player.on('play', (event) => {
      });

      player.on('volumechange', (event) => {
      });

      player.on('ended', (event) => {
      });
    }
  });
})();