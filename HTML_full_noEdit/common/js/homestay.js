

       $(function () {

           $('#asia_map').each(function () {

               var distance = 10;

               var time = 250;

               var hideDelay = 400;

               var hideDelayTimer = null;

               var beingShown = false;

               var shown = false;

               var trigger = $('.hakodate_btn', this);

               var info = $('.popup1', this).css('opacity', 0);

               $([trigger.get(0), info.get(0)]).mouseover(function () {

                   if (hideDelayTimer) clearTimeout(hideDelayTimer);

                   if (beingShown || shown) {

                       // don't trigger the animation again

                       return;

                   } else {

                       // reset position of info box

                       beingShown = true;

                       info.css({

                           top: 0,

                           left: 0,

                           display: 'block'

                       }).animate({

                           top: '-=' + distance + 'px',

                           opacity: 1

                       }, time, 'swing', function() {

                           beingShown = false;

                           shown = true;

                       });

                   }

                   return false;

               }).mouseout(function () {

                   if (hideDelayTimer) clearTimeout(hideDelayTimer);

                   hideDelayTimer = setTimeout(function () {

                       hideDelayTimer = null;

                       info.animate({

                           top: '-=' + distance + 'px',

                           opacity: 0

                       }, time, 'swing', function () {

                           shown = false;

                           info.css('display', 'none');

                       });

                   }, hideDelay);

                   return false;

               });

           });

       });


       


       





       $(function () {

           $('#asia_map').each(function () {

               var distance = 10;

               var time = 250;

               var hideDelay = 400;

               var hideDelayTimer = null;

               var beingShown = false;

               var shown = false;

               var trigger = $('.shibetsu_btn', this);

               var info = $('.popup5', this).css('opacity', 0);

               $([trigger.get(0), info.get(0)]).mouseover(function () {

                   if (hideDelayTimer) clearTimeout(hideDelayTimer);

                   if (beingShown || shown) {

                       // don't trigger the animation again

                       return;

                   } else {

                       // reset position of info box

                       beingShown = true;

                       info.css({

                           top: 0,

                           left: 0,

                           display: 'block'

                       }).animate({

                           top: '-=' + distance + 'px',

                           opacity: 1

                       }, time, 'swing', function() {

                           beingShown = false;

                           shown = true;

                       });

                   }

                   return false;

               }).mouseout(function () {

                   if (hideDelayTimer) clearTimeout(hideDelayTimer);

                   hideDelayTimer = setTimeout(function () {

                       hideDelayTimer = null;

                       info.animate({

                           top: '-=' + distance + 'px',

                           opacity: 0

                       }, time, 'swing', function () {

                           shown = false;

                           info.css('display', 'none');

                       });

                   }, hideDelay);

                   return false;

               });

           });

       });





       $(function () {

           $('#asia_map').each(function () {

               var distance = 10;

               var time = 250;

               var hideDelay = 400;

               var hideDelayTimer = null;

               var beingShown = false;

               var shown = false;

               var trigger = $('.higashisona_btn', this);

               var info = $('.popup8', this).css('opacity', 0);

               $([trigger.get(0), info.get(0)]).mouseover(function () {

                   if (hideDelayTimer) clearTimeout(hideDelayTimer);

                   if (beingShown || shown) {

                       // don't trigger the animation again

                       return;

                   } else {

                       // reset position of info box

                       beingShown = true;

                       info.css({

                           top: 0,

                           left: 0,

                           display: 'block'

                       }).animate({

                           top: '-=' + distance + 'px',

                           opacity: 1

                       }, time, 'swing', function() {

                           beingShown = false;

                           shown = true;

                       });

                   }

                   return false;

               }).mouseout(function () {

                   if (hideDelayTimer) clearTimeout(hideDelayTimer);

                   hideDelayTimer = setTimeout(function () {

                       hideDelayTimer = null;

                       info.animate({

                           top: '-=' + distance + 'px',

                           opacity: 0

                       }, time, 'swing', function () {

                           shown = false;

                           info.css('display', 'none');

                       });

                   }, hideDelay);

                   return false;

               });

           });

       });



       $(function () {

           $('#asia_map').each(function () {

               var distance = 10;

               var time = 250;

               var hideDelay = 400;

               var hideDelayTimer = null;

               var beingShown = false;

               var shown = false;

               var trigger = $('.iejima_btn', this);

               var info = $('.popup9', this).css('opacity', 0);

               $([trigger.get(0), info.get(0)]).mouseover(function () {

                   if (hideDelayTimer) clearTimeout(hideDelayTimer);

                   if (beingShown || shown) {

                       // don't trigger the animation again

                       return;

                   } else {

                       // reset position of info box

                       beingShown = true;

                       info.css({

                           top: 0,

                           left: 0,

                           display: 'block'

                       }).animate({

                           top: '-=' + distance + 'px',

                           opacity: 1

                       }, time, 'swing', function() {

                           beingShown = false;

                           shown = true;

                       });

                   }

                   return false;

               }).mouseout(function () {

                   if (hideDelayTimer) clearTimeout(hideDelayTimer);

                   hideDelayTimer = setTimeout(function () {

                       hideDelayTimer = null;

                       info.animate({

                           top: '-=' + distance + 'px',

                           opacity: 0

                       }, time, 'swing', function () {

                           shown = false;

                           info.css('display', 'none');

                       });

                   }, hideDelay);

                   return false;

               });

           });

       });



       

       



       $(function () {

           $('#asia_map').each(function () {

               var distance = 10;

               var time = 250;

               var hideDelay = 400;

               var hideDelayTimer = null;

               var beingShown = false;

               var shown = false;

               var trigger = $('.ise_btn', this);

               var info = $('.popup10', this).css('opacity', 0);

               $([trigger.get(0), info.get(0)]).mouseover(function () {

                   if (hideDelayTimer) clearTimeout(hideDelayTimer);

                   if (beingShown || shown) {

                       // don't trigger the animation again

                       return;

                   } else {

                       // reset position of info box

                       beingShown = true;

                       info.css({

                           top: 0,

                           left: 0,

                           display: 'block'

                       }).animate({

                           top: '-=' + distance + 'px',

                           opacity: 1

                       }, time, 'swing', function() {

                           beingShown = false;

                           shown = true;

                       });

                   }

                   return false;

               }).mouseout(function () {

                   if (hideDelayTimer) clearTimeout(hideDelayTimer);

                   hideDelayTimer = setTimeout(function () {

                       hideDelayTimer = null;

                       info.animate({

                           top: '-=' + distance + 'px',

                           opacity: 0

                       }, time, 'swing', function () {

                           shown = false;

                           info.css('display', 'none');

                       });

                   }, hideDelay);

                   return false;

               });

           });

       });



       



    $(document).ready(function(){

        $("ul.sf-menu").superfish({ 

            animation: {opacity:'show',height:'show'},   // slide-down effect without fade-in 

			speed: 'fast',                          // faster animation speed

            delay: 400               // 1.2 second delay on mouseout 

        }); 

    });









$(document).ready(function(){

// hide #back-top first

$("#back-top_wide").hide();  

// fade in #back-top

$(function () {

$(window).scroll(function () {

if ($(this).scrollTop() > 30) {

$('#back-top_wide').fadeIn();

} else {

$('#back-top_wide').fadeOut();

}

});

// scroll body to 0px on click

$('#back-top_wide a').click(function () {

$('body,html').animate({

scrollTop: 0

}, 600);

return false;

});

});

});

