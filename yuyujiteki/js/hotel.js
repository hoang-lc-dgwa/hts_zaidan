$(document).ready(function () {

	$('.link_new_hotel').click(function(event) {
    var data_area = $(this).attr('data-area');
    $('.'+data_area).click();

    var data_id = $(this).attr('data-id');

    $('html, body').animate({
      scrollTop: $("#"+data_id).offset().top - 100
    }, 500);
  });

});


