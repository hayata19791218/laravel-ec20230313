/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/common.js ***!
  \********************************/
var button = document.getElementById('button');
button.addEventListener('click', function () {
  var confirm = window.confirm('購入しますか？');
  if (confirm) {
    button.classList.add('disable');
  }
});
/******/ })()
;