function banner(){

	var html = "";

		
html += '<div id="banners_block">';
html += '<div id="in_banner">';
html += '<div class="ro_banner">';
html += '<a href="/inquire.html"><img src="/img/banner_info_rollout.jpg" alt="お問い合わせ・資料請求" width="203" height="60" border="0"></a>';
html += '</div>';
html += '<div class="nom_banner">';
html += '<a href="http://www.gakuseikaikan.com/" target="_blank"><img src="/img/banner_kaikan_rollout.jpg" alt="学生会館GUIDE" width="203" height="60" border="0"></a>';
html += '</div>';
html += '<div id="sns_box">';
html += '<div class="nom_banner f_left">';
html += '<a href="http://twitter.com/#!/KyoritsuZaidan" target="_blank"><img src="/img/banner_twitter_rollout.jpg" alt="twitter" width="99" height="45" border="0"></a>';
html += '</div>';
html += '<div class="nom_banner f_right">';
html += '<a href="https://www.facebook.com/KyoritsuInternationalFoundation" target="_blank"><img src="/img/banner_facebook_rollout.jpg" alt="facebook" width="99" height="45" border="0"></a>';
html += '</div>';
html += '</div>';
html += '<div style="clear:both;"></div>';




html += '<div id="sns_box">';
html += '<div class="nom_banner f_left">';
html += '<a href="https://www.instagram.com/kif_trip/" target="_blank">';
html += '<img  class="child-middle" src="/img/icon_instagram_color.png" alt="Instagram" width="24" height="24" border="0">';
html += '<span class="child-middle" >国内</span>';
html += '</a>';
html += '</div>';

html += '<div class="nom_banner f_right">';
html += '<a href="https://www.instagram.com/kif_contest/" target="_blank">';
html += '<img  class="child-middle" src="/img/icon_instagram_color.png" alt="Instagram" width="24" height="24" border="0">';
html += '<span class="child-middle" >海外</span>';
html += '</a>';
html += '</div>';



html += '</div>';



html += '<div style="clear:both;"></div>';
html += '</div>';
html += '</div>';


	document.write(html);
}