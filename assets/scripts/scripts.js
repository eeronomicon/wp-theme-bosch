/*global jQuery*/

(function($) {


   $('.triptych-panel-clickable').click(function() {
      $(this).parent().find('.triptych-panel-body').toggle();
    });
    

})(jQuery);
