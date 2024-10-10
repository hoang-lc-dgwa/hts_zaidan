<?php
/*
Template Name: メディア
*/
?>

<?php get_header() ?>

<body>
<img src="/img/back_1.jpg" alt="" class="bgmaximage" />
<div id="back1">

<!--header-->
<div id="header">
<div id="header_line"></div>
<div id="header_white">
<div id="in_header">
<div id="logo" class="left"><a href="/"><img src="/img/logo.png" alt="" width="329" height="55"></a></div>
<div class="right_head"><img src="/img/masseage.png" alt="" width="341" height="42">
<p><img src="/img/a_outline.png" alt="" width="60" height="60"></p>
</div>
</div>
</div>
</div>
<!--end header-->
<div style="clear:both;"></div>

<div id="wrapper">
<div id="container">
<div id="main_container">


<!--左ナビ-->

<div id="left_body">
<div id="side_line_down_requ"></div>
<div id="side_block">

<div class="navi_block">
<div id="home_btn">
<div id="side_totop"><a href="/"><img src="/common/img/navi/side_top_rollout.png" alt="トップページへ" width="220" height="30" border="0"></a></div>
</div>
</div>

<div id="sidenavi">

<!--財団概要ブロック-->
<script type="text/javascript" src="/common/js/overview.js"></script>
<script type="text/javascript">
	overview();
</script>
<!--財団概要ブロックここまで-->


<!--activityブロック-->
<script type="text/javascript" src="/common/js/activity.js"></script>
<script type="text/javascript">
	activity();
</script>
<!--activityブロックここまで-->




<!--officeブロック-->
<script type="text/javascript" src="/common/js/office.js"></script>
<script type="text/javascript">
	office();
</script>
<!--officeブロックここまで-->




<!--メディア-->
<div class="navi_block">
<ul class="normal_navi n_media">
<li><a href="/media/"><img src="/common/img/nav_img/nav_g_media_rollover.png" alt="メディア掲載" width="220" height="30" border="0"></a></li>
</ul>
</div><!--メディア-->



<!--recruitブロック-->
<script type="text/javascript" src="/common/js/recruit.js"></script>
<script type="text/javascript">
	recruit();
</script>
<!--recruitブロックここまで-->






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

<h1>メディア掲載</h1>



<div id="info_box">

<?php
   $newslist = get_posts( array(
    'category_name' => 'media', //特定のカテゴリースラッグを指定
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
<a href="<?php echo post_custom('リンク先'); ?>" <?php if(get_post_meta($post->ID,'PDF',true)): ?> target="_blank" class="pdflink"<?php endif; ?>><?php the_title();?></a>

<?php endif;?>
</dd>
</dl>
<div class="dot_line_s"></div>
<?php
  endforeach;
  wp_reset_postdata();
?>
</div>





<?php
  if (have_posts()) : while (have_posts()) : the_post();
    the_content();
  endwhile; endif;
?>


<div style="clear:both;"></div>




</div><!--main_in-->
</div><!--main container-->
</div><!--end container-->

<div style="clear:both;"></div>


<div id="back-top_pos_wide">
<p id="back-top_wide"><a href="#top"><span><img src="/img/to_top.png" alt="ページトップへ戻る" width="30" height="130"></span></a></p>
</div>
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