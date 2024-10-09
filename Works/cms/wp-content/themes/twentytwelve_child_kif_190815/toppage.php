<?php
/*
Template Name: 共立財団トップページ
*/
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>一般財団法人 共立国際交流奨学財団</title>
<link rel="canonical" href="https://www.kif-org.com">
<link href="/common/css/common.css" rel="stylesheet" type="text/css">
<link href="/common/css/main.css" rel="stylesheet" type="text/css">
<link href="/common/css/navi.css" rel="stylesheet" type="text/css" media="all" />
<link href="/common/css/print.css" rel="stylesheet" type="text/css" media="all" />
<link href="/common/css/sk_styles.css" type="text/css" media="all" rel="stylesheet" />
<link href="/common/css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
<link rel=”icon” href=“favicon.ico”>
<script src="/common/js/jquery-1.9.0.min.js" type="text/javascript"></script>
<script src="/common/js/superfish.js" type="text/javascript"></script>
<script src="/common/js/supersubs.js" type="text/javascript"></script>
<script src="/common/js/jquery.bgiframe.min.js" type="text/javascript"></script>
<script src="/common/js/hoverIntent.js" type="text/javascript"></script>
<script src="/common/js/rollover2.js" type="text/javascript"></script>
<script src="/common/js/shadowbox.js" type="text/javascript"></script>
<script src="/common/js/stickyMojo.js" type="text/javascript"></script>




 <!-- Skitter JS -->


	<script type="text/javascript" language="javascript" src="/common/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" language="javascript" src="/common/js/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" language="javascript" src="/common/js/jquery.skitter.min.js"></script>

	<!-- Init Skitter -->
	<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('.box_skitter_large').skitter({
				theme: 'minimalist',
				numbers_align: 'center',
				preview: true,
				animation:'upBars',
				label:false,
				progressbar:false,
				show_randomly:false,
				numbers:false,
interval: 7000

			});
		});
</script>



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





<style>
#container #main_container #main #videobox p{
float:none;
}

.m_title{
background-image: url(../../img/cir_icon.jpg);
background-repeat: no-repeat;
background-position: left;
font-weight: normal;
padding-left: 1.2em;
font-size: 15px;
margin: 30px 10px 10px 0;
padding-bottom: 7px;
}

</style>

<script src="/common/js/ga.js" type="text/javascript"></script>
</head>







<body>

<div id="top"></div>
<img src="/img/back_1.jpg" alt="" class="bgmaximage" />

<div id="back1">
<!--header-->
<div id="header">
<div id="header_line"></div>
<div id="header_white">
<div id="in_header">
<div id="logo" class="left"><a href="/"><img src="/img/logo.png" alt="" width="329" height="55"></a></div>
<div class="right_head"><img src="/img/masseage.png" alt="" width="341" height="42">
</div>
</div>
</div>
</div>
<!--end header-->
<div id="wrapper">

<div id="container">


<div id="slider_box">



<div id="slider">
<div class="border_box">
<div class="box_skitter box_skitter_large">

<?php echo do_shortcode('[metaslider id="3394"]'); ?>
    </div>
</div>
</div>

</div>


<div id="main_container">


<!--左ナビ-->

<div id="left_body">


<!--サイドナビここから-->
<div id="side_line"></div>

<div id="side_block">


<div id="sidenavi">
<!--ナビAブロック-->
<div class="navi_block">
<div id="navi_a_head"><span>活動内容</span></div>

<ul>
<li><a href="/profile/summary.html"><img src="/common/img/nav_img/navi_overview_1_rollout.png" alt="財団概要" width="220" height="32" border="0"></a></li>
<li><a href="/profile/official.html"><img src="/common/img/nav_img/navi_overview_2_rollout.png" alt="評議員・役員" width="220" height="30" border="0"></a></li>
<li><a href="/profile/staff.html"><img src="/common/img/nav_img/navi_overview_3_rollout.png" alt="スタッフ紹介" width="220" height="30" border="0"></a></li>
<li><a href="/profile/map.html"><img src="/common/img/nav_img/navi_overview_4_rollout.png" alt="所在地" width="220" height="30" border="0"></a></li>
<li><a href="/profile/financial.html"><img src="/common/img/nav_img/navi_overview_5_rollout.png" alt="業務及び財務等に関する資料" width="220" height="30" border="0"></a></li>
</ul>

</div>
<!--ナビAブロックここまで-->

<!--ナビB(可変)ブロック-->
<div class="navi_block">
<div id="navi_b_head"><span>活動内容</span></div>


<!--活動内容-->
<ul class="sf-menu sf-vertical">



<!--年間スケジュール-->
<li><a href="/activity/schedule.html"><img src="/common/img/nav_img/nav_activity_sche_rollout.png" alt="年間スケジュール" width="220" height="30" border="0"></a>
</li>
<!--年間スケジュール-->



<!--奨学金支給事業-->
<li><a href="/scholarship/"><img src="/common/img/nav_img/nav_activity_scl_rollout.png" alt="奨学金支給事業" width="220" height="30" border="0"></a>
<ul>
<li><a href="/activity/scholarship_zaidan.html"><img src="/common/img/nav_img/nav_activity_scl_zaidan_rollout.png" alt="一般財団法人 共立国際交流奨学財団奨学金" width="220" height="30" border="0"></a></li>

<li><a href="/activity/scholarship_maintenance.html"><img src="/common/img/nav_img/nav_activity_scl_ment_simple_rollout.png" alt="株式会社共立メンテナンス奨学基金奨学金" width="220" height="30" border="0"></a></li>
<li><a href="/activity/scholarship_youngsteel.html"><img src="/common/img/nav_img/nav_activity_scl_youngsteel_simple_rollout.png"  alt="ヤングスチール株式会社奨学金" width="220" height="30" border="0"></a></li>


<li><a href="/activity/list.html"><img src="/common/img/nav_img/nav_activity_scl_list_rollout.png" alt="奨学金対象校リスト" width="220" height="30" border="0"></a></li>

<li><a href="/information/localscholarship.html" ><img src="/common/img/nav_img/nav_activity_scl_local_rollout.png" alt="現地支給奨学金（ベトナム・ミャンマー・ラオス）" width="220" height="39" border="0"></a></li>
</ul>
</li>
<!--奨学金支給事業-->


<!--生活・学習情報提供事業-->
<li><img src="/common/img/nav_img/nav_life_rollout.png" alt="生活・学習情報提供事業" width="220" height="30" border="0">
<ul>
<li><a href="/activity/publication.html"><img src="/common/img/nav_img/nav_life_pub_rollout.png" alt="出版物の紹介" width="220" height="30" border="0"></a></li>
</ul>
</li>
<!--生活・学習情報提供事業-->



<!--国際交流支援事業-->
<li><img src="/common/img/nav_img/nav_in_rollout.png" alt="国際交流支援事業" width="220" height="30" border="0">

<ul>


<!--ホームステイ研修会-->
<li><a href="/homestay/"><img src="/common/img/nav_img/nav_home_rollout.png" alt="ホームステイ研修会" width="220" height="30" border="0"></a>

</li><!--ホームステイ研修会-->



<!--コンテスト-->
<li><a href="/contest_slection/"><img src="/common/img/nav_img/nav_cl_rollout.png" alt="コンテスト" width="220" height="30" border="0"></a></li><!--コンテスト-->


<!--国際ボランティア支援基金-->
<!-- <li><a href="/activity/volunteer.html"><img src="/common/img/nav_img/nav_vol_rollout.png" alt="国際ボランティア支援基金" width="220" height="30" border="0"></a></li> -->
<!--国際ボランティア支援基金-->


</ul>
</li>
<!--国際交流支援事業-->




<!--[NAVIGATION][NEW UPDATE 20190918]-->

<!--寮事業-->
<li><a href="/dormy/"><img src="/common/img/nav_img/nav_dormy_rollout.png" alt="寮事業" width="220" height="30" border="0"></a>

  <ul>
    <li><a href="/dormitory/tsutsuji.html"><img src="/common/img/nav_img/nav_kaikan_tsutsuji_rollout.png" alt="つつじヶ丘男子学生会館" width="220" height="30" border="0"></a></li>

    <!-- <li><a href="/dormitory/sapporo.html"><img src="/common/img/nav_img/nav_kaikan_sapporo_rollout.png" alt="札幌圏" width="220" height="30" border="0"></a></li>
    <li><a href="/dormitory/sendai.html"><img src="/common/img/nav_img/nav_kaikan_sendai_rollout.png" alt="仙台圏" width="220" height="30" border="0"></a></li>
    <li><a href="/dormitory/syutoken.html"><img src="/common/img/nav_img/nav_kaikan_syutoken_rollout.png" alt="首都圏" width="220" height="30" border="0"></a></li>
    <li><a href="/dormitory/nagoya.html"><img src="/common/img/nav_img/nav_kaikan_nagoyaken_rollout.png" alt="名古屋圏" width="220" height="30" border="0"></a></li>
    <li><a href="/dormitory/kyoto.html"><img src="/common/img/nav_img/nav_kaikan_kyotoken_rollout.png" alt="京都圏" width="220" height="30" border="0"></a></li>
    <li><a href="/dormitory/kansai.html"><img src="/common/img/nav_img/nav_kaikan_kansaiken_rollout.png" alt="関西圏" width="220" height="30" border="0"></a></li>
    <li><a href="/dormitory/kyusyu.html"><img src="/common/img/nav_img/nav_kaikan_kyushuken_rollout.png" alt="九州圏" width="220" height="30" border="0"></a></li> -->
  </ul>
</li>
<!--寮事業-->

<!--[NAVIGATION][NEW UPDATE 20190918]-->



<!-- =============== ADD 20190805 ========= -->
<!-- 就職支援事業 -->
<li><a href="/jobsupport/"><img src="/common/img/nav_img/nav_life_recruit_rollout.png" alt="就職支援事業" width="220" height="30" border="0"></a></li>
<!-- 就職支援事業 -->
<!-- ============= END ADD 20190805 ========= -->

</ul>
<!--活動内容-->

<br style="clear:both">
</div>
<!--ナビB(可変)ブロックここまで-->



<!--海外事務所-->
<div class="navi_block_ex">

<div id="navi_c_head"><span>海外事務所HP</span></div>

<ul class="normal_menu">
<li><a href="/address/soul.html"><img src="/common/img/nav_img/nav_g_ab_korea_rollout.png" alt="ソウル事務所" width="220" height="30" border="0"></a></li>
</ul>

</div><!--海外事務所-->




<!--委託事務所-->
<div class="navi_block_ex">
<div id="navi_c_head2"><span>委託事務所</span></div>

<ul class="normal_menu">
<li><a href="/address/chengdu.html"><img src="/common/img/nav_img/nav_g_ab_chengdu_rollout.png" alt="【中国】成都" width="220" height="30" border="0"></a></li>

<li><a href="/address/hochiminh.html"><img src="/common/img/nav_img/nav_g_ab_vet_rollout.png" alt="ベトナム　ホーチミン" width="220" height="30" border="0"></a></li>

<li><a href="/address/yangon.html"><img src="/common/img/nav_img/nav_g_ab_mya_rollout.png" alt="ミャンマー　ヤンゴン" width="220" height="30" border="0"></a></li>

<li><a href="/address/phnompenh.html"><img src="/common/img/nav_img/nav_g_ab_cam_rollout.png" alt="カンボジア　プノンペン" width="220" height="30" border="0"></a></li>

<li><a href="/address/bangkok.html"><img src="/common/img/nav_img/nav_g_ab_thai_rollout.png" alt="タイ　バンコク" width="220" height="30" border="0"></a></li>

<li><a href="/address/jakarta.html"><img src="/common/img/nav_img/nav_g_ab_jaka_rollout.png" alt="インドネシア　ジャカルタ" width="220" height="30" border="0"></a></li>

<li><a href="/address/kuala.html"><img src="/common/img/nav_img/nav_g_ab_mal_rollout.png" alt="マレーシア　クアラルンプール" width="220" height="30" border="0"></a></li>


</ul>

</div>
<!--委託事務所-->

<!--ホームページ-->
<div class="navi_block">



</div><!--ホームページ-->


<!--メディア-->
<div class="navi_block">
<ul class="normal_navi n_media">
<li><a href="/media/"><img src="/common/img/nav_img/nav_g_media_rollout.png" alt="メディア掲載" width="220" height="30" border="0"></a></li>
</ul>
</div><!--メディア-->






<!--ナビEブロック-->
<div class="navi_block">
<div id="navi_d_head"><span>募集</span></div>

<ul class="normal_navi">
<li><a href="/information/asia_support.html"><img src="/common/img/nav_img/nav_g_asia_rollout.png" alt="アジア6ヶ国への留学支援事業" width="220" height="30" border="0"></a></li>
<li><a href="/information/scholarship.html"><img src="/common/img/nav_img/nav_g_asia_bosyu_rollout.png" alt="奨学金寄付募集" width="220" height="30" border="0"></a></li>
<li><a href="/recruit.html"><img src="/common/img/nav_img/nav_g_recruit_rollout.png" alt="求人募集" width="220" height="30" border="0"></a></li>
</ul>
</div><!--ナビEブロックここまで-->





</div><!--サイドナビここまで-->
</div><!--side_block-->



<div style="clear:both;"></div>












<!--bannerブロック-->
<script type="text/javascript" src="/common/js/banner.js"></script>
<script type="text/javascript">
	banner();
</script>
<!--bannerブロックここまで-->


</div><!--left_body-->

<!--左ナビ-->


<div id="main">
<div id="main_in">

  <!-- =========== EDIT 20190830 ============= -->

  <div id="top_nav">
    <ul>
      <li><a href="/scholarship/"><img src="img/about_scholarship_rollout.png" alt="奨学金"></a></li>
      <li><a href="/contest/"><img src="img/about_contest_rollout.png" alt="コンテスト"></a></li>
      <li><a href="/homestay/"><img src="img/about_homestay_rollout.png" alt="研修会"></a></li>
      <li><a href="/dormy/"><img src="img/about_dormy_rollout.png" alt="寮"></a></li>
    </ul>
    <ul>
      <li><a href="/local_selection/"><img src="img/about_selection_rollout.png" alt="現地選考会"></a></li>
      <li><a href="/activity/publication.html"><img src="img/about_publication_rollout.png" alt="出版物"></a></li>
      <li><a href="/movie/"><img src="img/about_movie_rollout.png" alt="動画"></a></li>
      <li><a href="/jobsupport/"><img src="img/about_job_support_rollout.png" alt="就職支援"></a></li>
    </ul>
  </div>

  <!-- =========== END EDIT 20190830 ============= -->


<h1><img src="/common/img/top_head01.png" alt="財団からのお知らせ" width="610" height="32" border="0"></h1>
<div id="info_box">

<?php
   $newslist = get_posts( array(
    'category_name' => 'news', //特定のカテゴリースラッグを指定
    'posts_per_page' => 20 //取得記事件数
  ));
    foreach( $newslist as $post ):
    setup_postdata( $post );
?>
<dl>
<dt class="<?php echo post_custom('アイコン'); ?>"> <?php the_time('Y年n月j日'); ?></dt>
<dd>

<?php $ctm = get_post_meta($post->ID, 'リンク先', true);?>
<?php if(empty($ctm)):?>
<a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>

<?php else:?>
<a href="<?php echo post_custom('リンク先'); ?>" <?php if(get_post_meta($post->ID,'PDF',true)): ?> target="_blank" onclick="ga('send', 'event', 'linkclick', 'click', 'pdf1');" class="pdflink"<?php endif; ?>><?php the_title();?></a>

<?php endif;?>
</dd>
</dl>
<div class="dot_line_s"></div>
<?php
  endforeach;
  wp_reset_postdata();
?>
</div>






<h1 id="newmovie"><img src="/common/img/top_head03.png" alt="最新動画一覧" width="610" height="32" border="0"></h1>

<?php echo get_post_meta($post->ID, '動画', true); ?>

<div style="clear:both;"></div>


<div style="height:205px;"></div>
</div>

</div><!--end main_in-->
</div><!--end main-->

<div style="clear:both;"></div>

</div><!--main container-->


</div><!--end container-->
<div style="clear:both;"></div>


<div id="back-top_pos_wide">
<p id="back-top_wide"><a href="#top"><span><img src="img/to_top.png" alt="ページトップへ戻る" width="30" height="130"></span></a></p>
</div>

</div><!--end wrapper-->

<!--foot-->
<script type="text/javascript" src="/common/js/foot.js"></script>
<script type="text/javascript">
	foot();
</script>
<!--foot-->

</div><!--end back1-->


</body>
</html>