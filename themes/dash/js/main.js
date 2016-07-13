jQuery(document).ready(function() {

  //Animate icons on passion-grid section
  jQuery('.passion-grid div').on('hover', function() {
    jQuery(this).children('i').addClass('animated swing');
  });

}); //end document ready
