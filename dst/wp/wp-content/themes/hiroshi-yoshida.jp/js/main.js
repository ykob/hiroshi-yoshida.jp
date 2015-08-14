(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
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


},{}]},{},[1])
//# sourceMappingURL=data:application/json;charset:utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm5vZGVfbW9kdWxlcy9icm93c2VyaWZ5L25vZGVfbW9kdWxlcy9icm93c2VyLXBhY2svX3ByZWx1ZGUuanMiLCJzcmMvanMvbWFpbi5qcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtBQ0FBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsImZpbGUiOiJnZW5lcmF0ZWQuanMiLCJzb3VyY2VSb290IjoiIiwic291cmNlc0NvbnRlbnQiOlsiKGZ1bmN0aW9uIGUodCxuLHIpe2Z1bmN0aW9uIHMobyx1KXtpZighbltvXSl7aWYoIXRbb10pe3ZhciBhPXR5cGVvZiByZXF1aXJlPT1cImZ1bmN0aW9uXCImJnJlcXVpcmU7aWYoIXUmJmEpcmV0dXJuIGEobywhMCk7aWYoaSlyZXR1cm4gaShvLCEwKTt2YXIgZj1uZXcgRXJyb3IoXCJDYW5ub3QgZmluZCBtb2R1bGUgJ1wiK28rXCInXCIpO3Rocm93IGYuY29kZT1cIk1PRFVMRV9OT1RfRk9VTkRcIixmfXZhciBsPW5bb109e2V4cG9ydHM6e319O3Rbb11bMF0uY2FsbChsLmV4cG9ydHMsZnVuY3Rpb24oZSl7dmFyIG49dFtvXVsxXVtlXTtyZXR1cm4gcyhuP246ZSl9LGwsbC5leHBvcnRzLGUsdCxuLHIpfXJldHVybiBuW29dLmV4cG9ydHN9dmFyIGk9dHlwZW9mIHJlcXVpcmU9PVwiZnVuY3Rpb25cIiYmcmVxdWlyZTtmb3IodmFyIG89MDtvPHIubGVuZ3RoO28rKylzKHJbb10pO3JldHVybiBzfSkiLCJ2YXIgYWN0aXZpdHlJbmRpY2F0b3JPbiA9IGZ1bmN0aW9uKCkge1xyXG4gICQoJzxkaXYgaWQ9XCJpbWFnZWxpZ2h0Ym94LWxvYWRpbmdcIj48ZGl2PjwvZGl2PjwvZGl2PicpLmFwcGVuZFRvKCdib2R5Jyk7XHJcbn07XHJcblxyXG52YXIgYWN0aXZpdHlJbmRpY2F0b3JPZmYgPSBmdW5jdGlvbigpIHtcclxuICAkKCcjaW1hZ2VsaWdodGJveC1sb2FkaW5nJyApLnJlbW92ZSgpO1xyXG59O1xyXG5cclxudmFyIG92ZXJsYXlPbiA9IGZ1bmN0aW9uKCkge1xyXG4gICQoJzxkaXYgaWQ9XCJpbWFnZWxpZ2h0Ym94LW92ZXJsYXlcIj48L2Rpdj4nKS5hcHBlbmRUbygnYm9keScpO1xyXG59O1xyXG5cclxudmFyIG92ZXJsYXlPZmYgPSBmdW5jdGlvbigpIHtcclxuICAkKCcjaW1hZ2VsaWdodGJveC1vdmVybGF5JyApLnJlbW92ZSgpO1xyXG59O1xyXG5cclxuXHJcbiAgJCgnLmdhbGxlcnktdGh1bWJzIGEnKS5pbWFnZUxpZ2h0Ym94KHtcclxuICAgIG9uU3RhcnQ6IGZ1bmN0aW9uKCkge1xyXG4gICAgICBvdmVybGF5T24oKTtcclxuICAgIH0sXHJcbiAgICBvbkVuZDogZnVuY3Rpb24oKSB7XHJcbiAgICAgIG92ZXJsYXlPZmYoKTsgYWN0aXZpdHlJbmRpY2F0b3JPZmYoKTtcclxuICAgIH0sXHJcbiAgICBvbkxvYWRTdGFydDogZnVuY3Rpb24oKSB7XHJcbiAgICAgIGFjdGl2aXR5SW5kaWNhdG9yT24oKTtcclxuICAgIH0sXHJcbiAgICBvbkxvYWRFbmQ6IGZ1bmN0aW9uKCkge1xyXG4gICAgICBhY3Rpdml0eUluZGljYXRvck9mZigpO1xyXG4gICAgfVxyXG4gIH0pO1xyXG5cclxuIl19
