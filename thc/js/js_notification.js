jQuery(document).ready(function() {
    var disableScroll = false;
    var scrollPos = 0;
    function stopScroll() {
        disableScroll = true;
        scrollPos = $(window).scrollTop();
    }
    function enableScroll() {
        disableScroll = false;
    }
    jQuery(function(){
        jQuery(window).bind('scroll', function(){
             if(disableScroll) jQuery(window).scrollTop(scrollPos);
        });
        jQuery(window).bind('touchmove', function(){
             jQuery(window).trigger('scroll');
        });
    });
    jQuery('.accoridon--container').find('.accor-title').click(function() {
        stopScroll();
        if('#tripla-chat-window'){
             jQuery('body').find('#tripla-chat-window').parent().addClass('z-index-2');
        }
        
        var data_html = jQuery(this).parent().html();                   
        jQuery("#container--notification").find('.accoridon--container-box').append("<div class='accoridon--container-box-show'>"+data_html+"</div>");
        var windows_width = jQuery(window).width();
        console.log(windows_width);
        if(windows_width < 680 ){
            jQuery('#top').addClass('hidden--scroll'); 
        }
        jQuery("#container--notification").fadeIn(500, function() {
           jQuery(this).addClass('container-notification-active');
        });

        var content_height = jQuery('#container--notification').find('.bg_container--notification').height()+100;
        var windows_height = jQuery(window).height();

        if(content_height > windows_height ){
            jQuery('#container--notification').addClass('scroll--pd-r-30');  
            jQuery('#container--notification').find('.accoridon--data-content').addClass('scroll--overflow');
        }
        var content_height_1 = jQuery('#container--notification').find('.bg_container--notification').height();
        var margin_top  = (windows_height - content_height_1)/2;
        if(margin_top > 0 ){

            jQuery('#container--notification').find('.container--notification').css("margin-top", margin_top);
        }
    });
    jQuery('.container--notification-close,.container--notification-cell').click(function() {
        enableScroll();
        jQuery("#container--notification").fadeOut( 'slow', function() {
           jQuery(this).removeClass('container-notification-active');
           jQuery("#container--notification").find('.accoridon--container-box-show').remove();
            jQuery('#top').removeClass('hidden--scroll'); 
            jQuery('#container--notification').find('.accoridon--data-content').removeClass('scroll--overflow');
            jQuery('#container--notification').find('.container--notification').css("margin-top", "");
            jQuery('#container--notification').removeClass('scroll--pd-r-30');
            jQuery('body').find('#tripla-chat-window').parent().removeClass('z-index-2');
        });
    });

});
