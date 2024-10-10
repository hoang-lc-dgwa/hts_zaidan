$(document).ready(function () {

	$('.next_link').find('a[href^="#"]').click(function () {
      $('.accordion_title').next().slideDown(0,function(){
        if($(this).hasClass('active')) {
            $(this).prev().removeClass('active');
          } else {
            $(this).prev().toggleClass('active');         
          }
      });
      // $('html, body').animate({
      //     scrollTop: $( $.attr(this, 'href') ).offset().top
      // }, 500);
      // return false;
	});

	$('.accordion_title').click(function() {
        $(this).next().not(':animated').slideToggle(200,function(){
          if($(this).hasClass('active')) {
            $(this).prev().removeClass('active');
          } else {
            $(this).prev().toggleClass('active');         
          }
        });
    });

});


