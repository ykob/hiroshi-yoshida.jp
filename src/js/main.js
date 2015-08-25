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
