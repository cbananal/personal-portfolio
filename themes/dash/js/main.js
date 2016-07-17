jQuery(document).ready(function() {

  //Animate icons on passion-grid section
  jQuery('.passion-grid div').on('hover', function() {
    jQuery(this).children('i').addClass('animated swing');
  });

  //Toggle Menu Nav
  jQuery('.menu-toggle').on('click', function() {
    jQuery('.main-navigation').toggleClass('toggled');
  });

  //Toggle sub-menu and space it properly under its parent
  jQuery('.main-navigation .menu-item-has-children').on('click', function() {

    jQuery(this).children('.sub-menu').toggle(function() {
      jQuery('.main-navigation .sub-menu').css({position:"relative", top:"0", left:"0"});
    });

  });


}); //end document ready
