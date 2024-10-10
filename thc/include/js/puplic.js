$(document).ready(function () {

  jQuery('a[href^="#"]').click(function () {
    jQuery('html, body').animate({
      scrollTop: jQuery( jQuery.attr(this, 'href') ).offset().top - 100
    }, 500);
    return false;
  });

});

$(document).ready(function() {

  var scrollY = 0;

  function disableScroll() {
    scrollY = $(window).scrollTop();

    $('body').css({
      'position': 'fixed',
      'left': 0,
      'right': 0,
      'top': scrollY * -1
    });
  }

  function enableScroll() {
    $('body').attr('style', '');
    $(window).scrollTop(scrollY);
  }

  $('.open_nav_left').click(function(event) {

    $('.navigation_box').animate({
      left: '-450px', 
      left: '0'
    }, 500);

    $('body').addClass('open_nav');

    disableScroll();
  });

  $('.close_nav_left').click(function(event) {
    $('.navigation_box').animate({
      left: '0', 
      left: '-450px'
    }, 500);

    $('body').removeClass('open_nav');

    enableScroll();
  });

  // $('.open_list').click(function(event) {
  //   if($(this).hasClass('ic-open')){
  //     $(this).removeClass('ic-open');
  //     $(this).addClass('ic-close');

  //     $(this).next().slideDown();
  //   }else if($(this).hasClass('ic-close')){
  //     $(this).addClass('ic-open');
  //     $(this).removeClass('ic-close');

  //     $(this).next().slideUp();
  //   }

  // });

  $('.nav_out_all_top').click(function(event) {
   $('.navigation_box').animate({
    left: '0', 
    left: '-450px'
  }, 500);

   $('body').removeClass('open_nav');
   enableScroll();

   jQuery('html, body').animate({
      scrollTop: 0
    }, 600);
    return false;

 });

  $('.nav_out_all').click(function(event) {
   $('.navigation_box').animate({
    left: '0', 
    left: '-450px'
  }, 500);

   $('body').removeClass('open_nav');
   enableScroll();

   jQuery('html, body').animate({
      scrollTop: jQuery( jQuery.attr(this, 'href') ).offset().top - 100
    }, 600);
    return false;

 });

  $('.tabs_nav a').click(function(event) {
   $('.navigation_box').animate({
    left: '0', 
    left: '-450px'
  }, 500);

   $('body').removeClass('open_nav');
   enableScroll();

   $('.icon_close_resort').show();
   $('.area_resort_box').hide();

   var panel = $(this).attr('data-tab');
   $("#"+panel).show();

   $('.tabs a').removeClass('active');
   $('.' + panel).addClass('active');


   jQuery('html, body').animate({
    scrollTop: $('#' + panel).offset().top - 100
  }, 600);
   return false;

 });




});




