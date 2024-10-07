

       $(function () {
           $('#asia_map').each(function () {
               var distance = 10;
               var time = 250;
               var hideDelay = 400;
               var hideDelayTimer = null;
               var beingShown = false;
               var shown = false;
               var trigger = $('.mya_btn', this);
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
                           top: -40,
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
               var trigger = $('.vet_btn', this);
               var info = $('.popup2', this).css('opacity', 0);
               $([trigger.get(0), info.get(0)]).mouseover(function () {
                   if (hideDelayTimer) clearTimeout(hideDelayTimer);
                   if (beingShown || shown) {
                       // don't trigger the animation again
                       return;
                   } else {
                       // reset position of info box
                       beingShown = true;
                       info.css({
                           top: -50,
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
               var trigger = $('.cam_btn', this);
               var info = $('.popup3', this).css('opacity', 0);
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
               var trigger = $('.thai_btn', this);
               var info = $('.popup4', this).css('opacity', 0);
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
               var trigger = $('.chai_btn', this);
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
               var trigger = $('.mal_btn', this);
               var info = $('.popup6', this).css('opacity', 0);
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
               var trigger = $('.ind_btn', this);
               var info = $('.popup7', this).css('opacity', 0);
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
               var trigger = $('.korea_btn', this);
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
               var trigger = $('.japan_btn', this);
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
	   
	     
        // $(function () {
        //     $('#asia_map').each(function () {
        //         var distance = 10;
        //         var time = 250;
        //         var hideDelay = 400;
        //         var hideDelayTimer = null;
        //         var beingShown = false;
        //         var shown = false;
        //         var trigger = $('.mal_btn', this);
        //         var info = $('.popup10', this).css('opacity', 0);
        //         $([trigger.get(0), info.get(0)]).mouseover(function () {
        //             if (hideDelayTimer) clearTimeout(hideDelayTimer);
        //             if (beingShown || shown) {
        //                 // don't trigger the animation again
        //                 return;
        //             } else {
        //                 // reset position of info box
        //                 beingShown = true;
        //                 info.css({
        //                     top: 0,
        //                     left: 0,
        //                     display: 'block'
        //                 }).animate({
        //                     top: '-=' + distance + 'px',
        //                     opacity: 1
        //                 }, time, 'swing', function() {
        //                     beingShown = false;
        //                     shown = true;
        //                 });
        //             }
        //             return false;
        //         }).mouseout(function () {
        //             if (hideDelayTimer) clearTimeout(hideDelayTimer);
        //             hideDelayTimer = setTimeout(function () {
        //                 hideDelayTimer = null;
        //                 info.animate({
        //                     top: '-=' + distance + 'px',
        //                     opacity: 0
        //                 }, time, 'swing', function () {
        //                     shown = false;
        //                     info.css('display', 'none');
        //                 });
        //             }, hideDelay);
        //             return false;
        //         });
        //     });
        // });


       
       
            
       