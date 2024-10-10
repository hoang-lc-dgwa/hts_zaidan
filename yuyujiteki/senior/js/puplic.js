$(document).ready(function () {

  jQuery('a[href^="#"]').click(function () {
    jQuery('html, body').animate({
      scrollTop: jQuery( jQuery.attr(this, 'href') ).offset().top
    }, 500);
    return false;
  });

});

$(document).ready(function() {
  $('.open_nav_left').click(function(event) {

    $('.navigation_box').animate({
      left: '-400px', 
      left: '0'
    }, 500);

    $('body').addClass('open_nav');

  });

  $('.close_nav_left').click(function(event) {
    $('.navigation_box').animate({
      left: '0', 
      left: '-400px'
    }, 500);

    $('body').removeClass('open_nav')
  });

  $('.open_list').click(function(event) {
    if($(this).hasClass('ic-open')){
      $(this).removeClass('ic-open');
      $(this).addClass('ic-close');

      $(this).next().slideDown();
    }else if($(this).hasClass('ic-close')){
      $(this).addClass('ic-open');
      $(this).removeClass('ic-close');

      $(this).next().slideUp();
    }

  });
});




