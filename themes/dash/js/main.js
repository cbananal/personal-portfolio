jQuery(document).ready(function() {

  //Animate icons on passion-grid section
  jQuery('.passion-grid div').on('hover', function() {
    jQuery(this).children('i').addClass('animated swing');
  });

  //Toggle Menu Nav
  jQuery('.menu-toggle').on('click', function() {
    jQuery('.main-navigation').toggleClass('toggled');
  });

  //Toggle Sub-Menus
  // jQuery('.main-navigation .menu-item-has-children').on('click', function() {
  //   console.log('hi');
  //   jQuery('.main-navigation .sub-menu a').css("display", "inline-block");
  // })

  // jQuery('.main-navigation .menu-item-has-children').on('click', function() {
  //
  //   console.log('hi');
  //   jQuery(this).children('.sub-menu').toggle(function() {
  //     jQuery('.main-navigation .sub-menu a').css("display", "inline-block");
  //   });
  //
  // });

  jQuery('.main-navigation .menu-item-has-children').on('click', function() {

    jQuery(this).children('.sub-menu').toggle(function() {
      jQuery('.main-navigation .sub-menu').css({position:"relative", top:"0", left:"0"});
    });

  });


}); //end document ready
