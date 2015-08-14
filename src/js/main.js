var activityIndicatorOn = function() {
  $('<div id="imagelightbox-loading"><div></div></div>').appendTo('body');
};

var activityIndicatorOff = function() {
  $('#imagelightbox-loading' ).remove();
};

var overlayOn = function() {
  $('<div id="imagelightbox-overlay"></div>').appendTo('body');
};

var overlayOff = function() {
  $('#imagelightbox-overlay' ).remove();
};


  $('.gallery-thumbs a').imageLightbox({
    onStart: function() {
      overlayOn();
    },
    onEnd: function() {
      overlayOff(); activityIndicatorOff();
    },
    onLoadStart: function() {
      activityIndicatorOn();
    },
    onLoadEnd: function() {
      activityIndicatorOff();
    }
  });

