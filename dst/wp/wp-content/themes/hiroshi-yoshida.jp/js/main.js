(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
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

},{}]},{},[1])
//# sourceMappingURL=data:application/json;charset:utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm5vZGVfbW9kdWxlcy9icm93c2VyaWZ5L25vZGVfbW9kdWxlcy9icm93c2VyLXBhY2svX3ByZWx1ZGUuanMiLCJzcmMvanMvbWFpbi5qcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtBQ0FBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EiLCJmaWxlIjoiZ2VuZXJhdGVkLmpzIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXNDb250ZW50IjpbIihmdW5jdGlvbiBlKHQsbixyKXtmdW5jdGlvbiBzKG8sdSl7aWYoIW5bb10pe2lmKCF0W29dKXt2YXIgYT10eXBlb2YgcmVxdWlyZT09XCJmdW5jdGlvblwiJiZyZXF1aXJlO2lmKCF1JiZhKXJldHVybiBhKG8sITApO2lmKGkpcmV0dXJuIGkobywhMCk7dmFyIGY9bmV3IEVycm9yKFwiQ2Fubm90IGZpbmQgbW9kdWxlICdcIitvK1wiJ1wiKTt0aHJvdyBmLmNvZGU9XCJNT0RVTEVfTk9UX0ZPVU5EXCIsZn12YXIgbD1uW29dPXtleHBvcnRzOnt9fTt0W29dWzBdLmNhbGwobC5leHBvcnRzLGZ1bmN0aW9uKGUpe3ZhciBuPXRbb11bMV1bZV07cmV0dXJuIHMobj9uOmUpfSxsLGwuZXhwb3J0cyxlLHQsbixyKX1yZXR1cm4gbltvXS5leHBvcnRzfXZhciBpPXR5cGVvZiByZXF1aXJlPT1cImZ1bmN0aW9uXCImJnJlcXVpcmU7Zm9yKHZhciBvPTA7bzxyLmxlbmd0aDtvKyspcyhyW29dKTtyZXR1cm4gc30pIiwiLy8gPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cclxuLy8gXHJcbi8vIGdsb2JhbC1uYXZpLXRvZ2dsZVxyXG5cclxudmFyICRnbmF2aV9idG4gPSAkKCcuZ2xvYmFsLW5hdmktdG9nZ2xlJyk7XHJcbnZhciAkZ25hdmkgPSAkKCcuZ2xvYmFsLW5hdmknKTtcclxudmFyIGNsYXNzbmFtZV9vcGVuZWQgPSAnaXNfb3BlbmVkJztcclxudmFyIGlzX29wZW5lZCA9IGZhbHNlO1xyXG5cclxudmFyIHRvZ2dsZUduYXZpID0gZnVuY3Rpb24oKSB7XHJcbiAgaWYgKGlzX29wZW5lZCkge1xyXG4gICAgJGduYXZpX2J0bi5yZW1vdmVDbGFzcyhjbGFzc25hbWVfb3BlbmVkKTtcclxuICAgICRnbmF2aS5yZW1vdmVDbGFzcyhjbGFzc25hbWVfb3BlbmVkKTtcclxuICAgIGlzX29wZW5lZCA9IGZhbHNlO1xyXG4gIH0gZWxzZSB7XHJcbiAgICAkZ25hdmlfYnRuLmFkZENsYXNzKGNsYXNzbmFtZV9vcGVuZWQpO1xyXG4gICAgJGduYXZpLmFkZENsYXNzKGNsYXNzbmFtZV9vcGVuZWQpO1xyXG4gICAgaXNfb3BlbmVkID0gdHJ1ZTtcclxuICB9XHJcbn07XHJcblxyXG4kZ25hdmlfYnRuLm9uKCdjbGljaycsIGZ1bmN0aW9uKGV2ZW50KSB7XHJcbiAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcclxuICB0b2dnbGVHbmF2aSgpO1xyXG59KTtcclxuIl19
