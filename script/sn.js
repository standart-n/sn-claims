// Generated by CoffeeScript 1.6.3
$(function() {
  var methods;
  methods = {
    init: function(options) {
      var def;
      if (!options) {
        options = {};
      }
      def = {
        content: {},
        result: {
          key: ''
        }
      };
      $.extend(true, def, options);
      $(this).data('sn', def);
      $(this).snTriggers();
      return $(this).snEvents({
        'href': '#autoload'
      });
    }
  };
  return $.fn.sn = function(sn) {
    if (!sn) {
      sn = {};
    }
    if (methods[sn]) {
      return methods[sn].apply(this, Array.prototype.slice.call(arguments, 1));
    } else {
      if (typeof sn === 'object' || !sn) {
        return methods.init.apply(this, arguments);
      } else {
        return $.error('Метод ' + sn + ' не существует');
      }
    }
  };
});
