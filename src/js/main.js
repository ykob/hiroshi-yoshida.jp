// =============================================================================
// 
// global-navi-toggle

var $gnavi_btn = $('.global-navi-toggle');
var $gnavi = $('.global-navi');
var classname_opened = 'is_opened';
var is_opened = false;

var toggleGnavi = function() {
  if (is_opened) {
    $gnavi_btn.removeClass(classname_opened);
    $gnavi.removeClass(classname_opened);
    is_opened = false;
  } else {
    $gnavi_btn.addClass(classname_opened);
    $gnavi.addClass(classname_opened);
    is_opened = true;
  }
};

$gnavi_btn.on('click', function(event) {
  event.preventDefault();
  toggleGnavi();
});

// =============================================================================
//
// imagelightbox
// http://osvaldas.info/image-lightbox-responsive-touch-friendly

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

var imageLightboxObj = {
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
};

$('.gallery-thumbs a').imageLightbox(imageLightboxObj);

