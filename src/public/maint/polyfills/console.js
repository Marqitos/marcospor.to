/**
  * Evita errores de `console` en navegadores que carecen de consola
  * o algúna de sus funciones.
  */
function polyfill$console() {
  let method;
  let noop = function () {};
  let methods = [
    'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
    'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
    'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
    'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
  ];
  let length = methods.length;
  let console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Solo métodos no definidos.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}

polyfill$console();
