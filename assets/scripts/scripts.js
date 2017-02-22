/*global jQuery*/

(function($) {

   $('.triptych-panel-clickable').click(function() {
      $(this).parent().find('.triptych-panel-body').toggle();
    });
    
   $('.triptych-panel-unflip').click(function() {
      $(this).parent().parent().parent().find('.triptych-panel-body').toggle();
   });

})(jQuery);
