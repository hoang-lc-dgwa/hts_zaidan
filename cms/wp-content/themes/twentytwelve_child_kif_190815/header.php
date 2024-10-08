<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>一般財団法人 共立国際交流奨学財団</title>
<link href="/common/css/common.css" rel="stylesheet" type="text/css">
<link href="/common/css/main.css" rel="stylesheet" type="text/css">
<link href="/common/css/navi.css" rel="stylesheet" type="text/css" media="all" />
<link href="/common/css/print.css" rel="stylesheet" type="text/css" media="all" />
<link href="/common/css/sk_styles.css" type="text/css" media="all" rel="stylesheet" />
<link href="/common/css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
<link rel=”icon” href=“favicon.ico”>
<script src="/common/js/import.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $("ul.sf-menu").superfish({
            animation:   {opacity:'show',height:'show'},   // slide-down effect without fade-in
			speed:       'fast',                          // faster animation speed
            delay:     400               // 1.2 second delay on mouseout
        });
    });
</script>



<!-- トップに戻る-->
<script>
$(document).ready(function(){
// hide #back-top first
$("#back-top_wide").hide();
// fade in #back-top
$(function () {
$(window).scroll(function () {
if ($(this).scrollTop() > 500) {
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
</script>
<script language="JavaScript" type="text/javascript">
<!--
function disp(url){
window.open(url,"window_name","toolbar=yes,location=yes,status=yes,menubar=yes,scrollbars=yes,resizable=yes");
}
//-->
</script>



<!-- トップに戻る-->







<script src="/common/js/ga.js" type="text/javascript"></script>
</head>