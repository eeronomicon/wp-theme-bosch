(function($) {


   $( ".triptych-panel-body" ).click(function() {
      var clickTarget = "#" + $( this ).attr("id");
      $( clickTarget ).toggle();
      $( clickTarget + "-image" ).toggle();
    });
    

})(jQuery);
