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


},{}]},{},[1])
//# sourceMappingURL=data:application/json;charset:utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm5vZGVfbW9kdWxlcy9icm93c2VyaWZ5L25vZGVfbW9kdWxlcy9icm93c2VyLXBhY2svX3ByZWx1ZGUuanMiLCJzcmMvanMvbWFpbi5qcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtBQ0FBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBIiwiZmlsZSI6ImdlbmVyYXRlZC5qcyIsInNvdXJjZVJvb3QiOiIiLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24gZSh0LG4scil7ZnVuY3Rpb24gcyhvLHUpe2lmKCFuW29dKXtpZighdFtvXSl7dmFyIGE9dHlwZW9mIHJlcXVpcmU9PVwiZnVuY3Rpb25cIiYmcmVxdWlyZTtpZighdSYmYSlyZXR1cm4gYShvLCEwKTtpZihpKXJldHVybiBpKG8sITApO3ZhciBmPW5ldyBFcnJvcihcIkNhbm5vdCBmaW5kIG1vZHVsZSAnXCIrbytcIidcIik7dGhyb3cgZi5jb2RlPVwiTU9EVUxFX05PVF9GT1VORFwiLGZ9dmFyIGw9bltvXT17ZXhwb3J0czp7fX07dFtvXVswXS5jYWxsKGwuZXhwb3J0cyxmdW5jdGlvbihlKXt2YXIgbj10W29dWzFdW2VdO3JldHVybiBzKG4/bjplKX0sbCxsLmV4cG9ydHMsZSx0LG4scil9cmV0dXJuIG5bb10uZXhwb3J0c312YXIgaT10eXBlb2YgcmVxdWlyZT09XCJmdW5jdGlvblwiJiZyZXF1aXJlO2Zvcih2YXIgbz0wO288ci5sZW5ndGg7bysrKXMocltvXSk7cmV0dXJuIHN9KSIsInZhciBhY3Rpdml0eUluZGljYXRvck9uID0gZnVuY3Rpb24oKSB7XHJcbiAgJCgnPGRpdiBpZD1cImltYWdlbGlnaHRib3gtbG9hZGluZ1wiPjxkaXY+PC9kaXY+PC9kaXY+JykuYXBwZW5kVG8oJ2JvZHknKTtcclxufTtcclxuXHJcbnZhciBhY3Rpdml0eUluZGljYXRvck9mZiA9IGZ1bmN0aW9uKCkge1xyXG4gICQoJyNpbWFnZWxpZ2h0Ym94LWxvYWRpbmcnICkucmVtb3ZlKCk7XHJcbn07XHJcblxyXG52YXIgb3ZlcmxheU9uID0gZnVuY3Rpb24oKSB7XHJcbiAgJCgnPGRpdiBpZD1cImltYWdlbGlnaHRib3gtb3ZlcmxheVwiPjwvZGl2PicpLmFwcGVuZFRvKCdib2R5Jyk7XHJcbn07XHJcblxyXG52YXIgb3ZlcmxheU9mZiA9IGZ1bmN0aW9uKCkge1xyXG4gICQoJyNpbWFnZWxpZ2h0Ym94LW92ZXJsYXknICkucmVtb3ZlKCk7XHJcbn07XHJcblxyXG52YXIgaW1hZ2VMaWdodGJveE9iaiA9IHtcclxuICBvblN0YXJ0OiBmdW5jdGlvbigpIHtcclxuICAgIG92ZXJsYXlPbigpO1xyXG4gIH0sXHJcbiAgb25FbmQ6IGZ1bmN0aW9uKCkge1xyXG4gICAgb3ZlcmxheU9mZigpOyBhY3Rpdml0eUluZGljYXRvck9mZigpO1xyXG4gIH0sXHJcbiAgb25Mb2FkU3RhcnQ6IGZ1bmN0aW9uKCkge1xyXG4gICAgYWN0aXZpdHlJbmRpY2F0b3JPbigpO1xyXG4gIH0sXHJcbiAgb25Mb2FkRW5kOiBmdW5jdGlvbigpIHtcclxuICAgIGFjdGl2aXR5SW5kaWNhdG9yT2ZmKCk7XHJcbiAgfVxyXG59O1xyXG5cclxuJCgnLmdhbGxlcnktdGh1bWJzIGEnKS5pbWFnZUxpZ2h0Ym94KGltYWdlTGlnaHRib3hPYmopO1xyXG5cclxuIl19
