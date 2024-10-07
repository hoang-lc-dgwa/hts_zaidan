<?php
//title.txtに記述された研修会名をセット(title.txtの文字コードはUTF-8として下さい。でないと文字化けします)
$getTitle = '';
if(file_exists('title.txt')){
	$lines = file('title.txt');
	$getTitle = rtrim($lines[0]);
}

//もし文字化けする場合は以下で直接設定下さい（こちらが優先されます）
$title = '';//例　$title = '共立財団の就職支援活動に関するアンケート';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>共立財団の就職支援活動に関するアンケート |一般財団法人　共立国際交流奨学財団</title>
<link href="../../common/css/common.css" rel="stylesheet" type="text/css">
<link href="../../common/css/main.css" rel="stylesheet" type="text/css">
<link href="../../common/css/navi.css" rel="stylesheet" type="text/css" media="all" />
<link href="../../common/css/form.css" rel="stylesheet" type="text/css">
<script src="../../common/js/import.js" type="text/javascript"></script>

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
</script>

<script language="JavaScript" type="text/javascript">
<!--
function disp(url){
window.open(url,"window_name","toolbar=yes,location=yes,status=yes,menubar=yes,scrollbars=yes,resizable=yes");
}
//-->
</script>
<!-- トップに戻る-->


<script src="../common/js/ga.js" type="text/javascript"></script>

<style type="text/css">
/*必須エラーメッセージ*/
div.error{
	font-size:13px;
	font-weight:normal;
	color:#F00;
	padding:2px 18px;
	background:url(../common/js/images/error.gif) no-repeat 0px 4px;
}
</style>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script type="text/javascript" src="../common/js/validate.js"></script>
<!--<script type="text/javascript" src="../common/js/form.js"></script>JSチェックはカット-->

</head>

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
<p><img src="/img/c_outline.png" alt="" width="60" height="60"></p>
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
<!--ナビAブロック-->
<div class="navi_block">
<div id="navi_a_head"><span>活動内容</span></div>

<ul>
<li><a href="/profile/summary.html"><img src="/common/img/nav_img/navi_overview_1_rollout.png" alt="財団概要" width="220" height="30" border="0"></a></li>
<li><a href="/profile/official.html"><img src="/common/img/nav_img/navi_overview_2_rollout.png" alt="評議員・役員" width="220" height="30" border="0"></a></li>
<li><a href="/profile/staff.html"><img src="/common/img/nav_img/navi_overview_3_rollout.png" alt="スタッフ紹介" width="220" height="30" border="0"></a></li>
<li><a href="/profile/map.html"><img src="/common/img/nav_img/navi_overview_4_rollout.png" alt="所在地" width="220" height="30" border="0"></a></li>
<li><a href="/profile/financial.html"><img src="/common/img/nav_img/navi_overview_5_rollout.png" alt="業務及び財務等に関する資料" width="220" height="30" border="0"></a></li>
</ul>

</div>
<!--ナビAブロックここまで-->

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
<li><a href="/media/"><img src="/common/img/nav_img/nav_g_media_rollout.png" alt="メディア掲載" width="220" height="30" border="0"></a></li>
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


<h1>共立財団の就職支援活動に関するアンケート</h1>

<div class="text">●ご入力いただいた個人情報は、厳重にお取り扱いいたします。<br>
</div>

 <form action="mail.php" method="post" enctype="multipart/form-data" id="mainForm">


<h2>【ご自身について】</h2>
<br>

<table width="590" cellpadding="7" cellspacing="1" class="text" style="table-layout:fixed;">


<!-- ================================== -->

<tr>
	<td colspan="4" bgcolor="#D9D9F5">
		<strong>Q1．</strong>性別を教えてください。
	</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#EEEEFF">
		<input type="radio" name="性別" value="男性" class="radio">男性&nbsp;
		<input type="radio" name="性別" value="女性" class="radio">女性&nbsp;
	</td>
</tr>


<tr>
<td colspan="4" bgcolor="#D9D9F5">
	<strong>Q2．</strong>現在の学生区分を教えてください。
</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#EEEEFF">
		<input type="radio" name="現在の学生区分" value="大学院生" class="radio">大学院生&nbsp;
		<input type="radio" name="現在の学生区分" value="大学生" class="radio">大学生&nbsp;
		<input type="radio" name="現在の学生区分" value="専門学生" class="radio">専門学生&nbsp;
		<input type="radio" name="現在の学生区分" value="日本語学校生" class="radio">日本語学校生&nbsp;
	</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#D9D9F5">
		<strong>Q3．</strong>国籍はどこですか。
	</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#EEEEFF">
		<input type="radio" name="国籍[]" value="中国" class="radio">中国&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="国籍[]" value="台湾" class="radio">台湾&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="国籍[]" value="ベトナム" class="radio">ベトナム&nbsp;&nbsp;
		<input type="radio" name="国籍[]" value="韓国" class="radio">韓国&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="国籍[]" value="カンボジア" class="radio">カンボジア&nbsp;
	</td>
</tr>
<tr>
	<td colspan="4" bgcolor="#EEEEFF">
		<input type="radio" name="国籍[]" value="ネパール" class="radio">ネパール&nbsp;
		<input type="radio" name="国籍[]" value="インドネシア" class="radio">インドネシア &nbsp;
		<input type="radio" name="国籍[]" value="ミャンマー" class="radio">ミャンマー&nbsp;
		<input type="radio" name="国籍[]" value="マレーシア" class="radio">マレーシア&nbsp;
	</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#EEEEFF">
		その他<br>
		<input name="その他・国籍" type="text" class="free" value="">
	</td>
</tr>


<tr>
	<td colspan="4" bgcolor="#D9D9F5">
		<strong>Q4．</strong>学校を卒業するのはいつですか。
	</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#EEEEFF">
		<input type="radio" name="学校卒業[]" value="2021年3月" class="radio">2021年3月&nbsp;
		<input type="radio" name="学校卒業[]" value="2021年9月" class="radio">2021年9月&nbsp;
		<input type="radio" name="学校卒業[]" value="2022年3月" class="radio">2022年3月&nbsp;
		<input type="radio" name="学校卒業[]" value="2022年9月" class="radio">2022年9月&nbsp;
	</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#EEEEFF">
		<input type="radio" name="学校卒業[]" value="2023年3月" class="radio">2023年3月&nbsp;
		<input type="radio" name="学校卒業[]" value="2023年9月" class="radio">2023年9月&nbsp;
		<input type="radio" name="学校卒業[]" value="2024年3月" class="radio">2024年3月&nbsp;
		<input type="radio" name="学校卒業[]" value="2024年9月" class="radio">2024年9月&nbsp;
	</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#EEEEFF">
		その他<br>
		<input name="その他・学校卒業時期" type="text" class="free" value="">
	</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#D9D9F5">
		<strong>Q5．</strong>卒業後の進路希望について
	</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#EEEEFF">
		<input type="radio" name="進路" value="さらに進学する" class="radio">さらに進学する&nbsp;
		<input type="radio" name="進路" value="就職する" class="radio">就職する&nbsp;
	</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#D9D9F5">
		<strong>Q5.1 </strong>[さらに進学する]を選んだ方　進学先の国はどこですか　※任意
	</td>
</tr>
<tr>
	<td colspan="4" bgcolor="#EEEEFF">
		<input type="radio" name="進学先" value="日本" class="radio">日本&nbsp;
		<input type="radio" name="進学先" value="米国" class="radio">米国&nbsp;
	</td>
</tr>
<tr>
	<td colspan="4" bgcolor="#EEEEFF">
		その他<br>
		<input name="その他・進学先" type="text" class="free" value="">
	</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#D9D9F5">
		<strong>Q5.2 </strong>[就職する]を選んだ方　就職先の国はどこですか　 ※任意
	</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#EEEEFF">
		<input type="radio" name="就職先" value="日本" class="radio">日本&nbsp;
		<input type="radio" name="就職先" value="母国" class="radio">母国&nbsp;
	</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#EEEEFF">
		その他<br>
		<input name="その他・就職先" type="text" class="free" value="">
	</td>
</tr>


<tr>
	<td colspan="4" bgcolor="#D9D9F5">
		<strong>Q5.3 </strong>[就職する]、[日本]を選んだ方に聞きます。
	</td>
</tr>
<tr>
	<td colspan="4" bgcolor="#D9D9F5">
		<strong>Q5.3-1 </strong>あなたが日本で勉強したのは（複数回答可） ※任意
	</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#EEEEFF">
		<input type="checkbox" name="勉強した内容[]" value="理工系" class="radio">理工系&nbsp;
		<input type="checkbox" name="勉強した内容[]" value="IT系" class="radio">IT系&nbsp;
		<input type="checkbox" name="勉強した内容[]" value="ビジネス系" class="radio">ビジネス系&nbsp;
		<input type="checkbox" name="勉強した内容[]" value="サービス系" class="radio">サービス系&nbsp;
		<input type="checkbox" name="勉強した内容[]" value="医療系" class="radio">医療系&nbsp;
	</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#EEEEFF">
		その他<br>
		<input name="その他・勉強した内容" type="text" class="free" value="">
	</td>
</tr>


<tr>
	<td colspan="4" bgcolor="#D9D9F5">
		<strong>Q5.3-2 </strong>日本で就職するときにどこで相談・アドバイスを受けますか。（複数回答可） ※任意
	</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#EEEEFF">
		<input type="checkbox" name="日本で就職に関する相談先[]" value="在籍校の就職センター" class="radio">在籍校の就職センター&nbsp;
		<input type="checkbox" name="日本で就職に関する相談先[]" value="指導教員" class="radio">指導教員&nbsp;&nbsp;&nbsp;
		<input type="checkbox" name="日本で就職に関する相談先[]" value="就職サービス会社" class="radio">就職サービス会社&nbsp;
	</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#EEEEFF">
		<input type="checkbox" name="日本で就職に関する相談先[]" value="自国の友人・先輩" class="radio">自国の友人・先輩&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="checkbox" name="日本で就職に関する相談先[]" value="分からない" class="radio">分からない&nbsp;&nbsp;
		<input type="checkbox" name="日本で就職に関する相談先[]" value="考えていない" class="radio">考えていない&nbsp;
	</td>
</tr>

</table>


<h2>【財団について】</h2>
<br>

<table width="590" cellpadding="7" cellspacing="1" class="text" style="table-layout:fixed;">


<!-- ================================== -->

<tr>
	<td colspan="4" bgcolor="#D9D9F5">
		<strong>Q1．</strong>当財団が就職支援事業を開始したらサービスは受けたいと思いますか。
	</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#EEEEFF">
		<input type="radio" name="財団の就職支援サービスを受けたいか" value="利用したい" class="radio">利用したい&nbsp;
		<input type="radio" name="財団の就職支援サービスを受けたいか" value="利用しない" class="radio">利用しない&nbsp;
		<input type="radio" name="財団の就職支援サービスを受けたいか" value="分からない" class="radio">分からない&nbsp;
	</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#D9D9F5">
		<strong>Q2．</strong>当財団HPの就職支援事業ページは見たことがありますか。
	</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#EEEEFF">
		<input type="radio" name="就職支援事業ページは見たことあるか" value="はい" class="radio">はい&nbsp;
		<input type="radio" name="就職支援事業ページは見たことあるか" value="いいえ" class="radio">いいえ&nbsp;
	</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#D9D9F5"><strong>Q3．</strong>当財団のKIF通信（メールマガジン）を見たことがありますか。</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#EEEEFF">
		<input type="radio" name="KIF通信は見たことあるか" value="はい" class="radio">はい&nbsp;
		<input type="radio" name="KIF通信は見たことあるか" value="いいえ" class="radio">いいえ&nbsp;
	</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#D9D9F5">
		<strong>Q4．</strong>どのような就職支援を受けたいですか。（複数回答可）
	</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#EEEEFF">
		<input type="checkbox" name="どのような就職支援を受けたいか[]" value="就職支援情報の提供（メールマガジン）" class="radio">就職支援情報の提供（メールマガジン）&nbsp;
		<input type="checkbox" name="どのような就職支援を受けたいか[]" value="求人情報の提供" class="radio">求人情報の提供&nbsp;
		<input type="checkbox" name="どのような就職支援を受けたいか[]" value="就職セミナー" class="radio">就職セミナー&nbsp;
	</td>
</tr>


<tr>
	<td colspan="4" bgcolor="#D9D9F5">
		<strong>Q5．</strong>当財団が実施する就職セミナー・就職相談会などがあれば参加したいですか。
	</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#EEEEFF">
		<input type="radio" name="就職相談会などがあれば参加したいか" value="参加したい" class="radio">参加したい&nbsp;
		<input type="radio" name="就職相談会などがあれば参加したいか" value="参加したくない" class="radio">参加したくない&nbsp;
		<input type="radio" name="就職相談会などがあれば参加したいか" value="分からない" class="radio">分からない&nbsp;
	</td>
</tr>

</table>
<br /><br />

<div class="text"><font color="red">※【個人情報の取り扱いについて】は、良く読み、「同意する」にチェックしてください。<br />
　チェックされた時点で、以下の条件を全て了承したこととみなします。</font></div>
<br />

<div class="kiyaku">
<dl>
<dt>【個人情報の取り扱いについて】</dt>
<dd>一般財団法人　共立国際交流奨学財団は、個人情報の取扱方針を下記の通り定め、適切な管理に努めます。</dd>
<dd>
<ol>
<li>個人情報の収集、利用、提供等
<ul>
<li>当財団は、当財団における事業の案内、お問い合わせに対する回答、アンケートの分析等の利用目的のために適法かつ公正な手段で個人情報を収集し、その目的の達成に必要な範囲内で個人情報を利用します。</li>
<li>当財団は、業務の遂行に必要な範囲で、外部委託事業者等に個人情報を預託する場合があります。その場合は、当財団の厳正な管理のもとに行い、契約内容においても個人情報の保護に配慮したものとします。</li>
<li>当財団は、当財団が保有する個人情報について、下記の場合を除き第三者への提供はいたしません。<br>
(1) ご本人様の同意がある場合<br>
(2) 法令などに基づき個人情報の開示を要請された場合<br>
(3) ご本人様側での利用規約違反により、当財団の利益が大幅に損なわれる場合<br>
(4) 人の生命、健康、財産などの重大な利益を保護するために必要な場合</li>
</ul></li>
<li>個人情報の安全管理
<ul>
<li>当財団は、当財団が保有する個人情報への不正アクセス、紛失、破壊、改ざん、漏えい等のトラブルを引き起こさないために、合理的な安全対策を実施します。</li>
</ul></li>
<li>個人情報の開示、訂正及び削除等
<ul>
<li>当財団は、当財団が管理する個人情報について、ご本人様が開示、訂正及び削除等を希望された場合には、第三者による個人情報の不正な改ざん等を防ぐために、適切な本人確認の手続きを経た上で、社会通念や慣行に照らし合理的な範囲内で速やかに対応いたします。</li>
</ul></li>
<li>法令及びその他の規範の遵守
<ul>
<li>個人情報の取扱いに関しては、個人情報保護に関する日本の法令及びその他の規範を遵守します。</li>
</ul></li>
<li>個人情報に関するお問い合わせ
<ul>
<li>当財団の個人情報の取扱いに関するお問い合わせがございましたら、下記、連絡先までご連絡下さい。ご本人様の確認を行ったうえで、合理的な期間、範囲内で対応いたします。</li>
</ul></li>
</ol>
</dd>
<dd class="sign">一般財団法人　共立国際交流奨学財団　研修会担当者宛<br>
住所： 〒101-0021　東京都千代田区外神田 2-18-3　第2昭和ビル 4F<br>
TEL： 03-5295-0205<br>
受付時間： 9:00～17:00 （土日祝日・年末年始を除く）</dd>
</dl>
</div>
<div class="agree"><input type="checkbox" name="個人情報の取り扱いについて" value="同意します" class="check" id="agree_check">上記個人情報の取り扱いについて同意します</div>


<div id="btn"><input type="image" src="../common/img/btn_placehall_confirm_rollout.png" alt="確認画面へ" id="homestay2_submitbtn"></div>
</form>


<div style="height:100px;"></div>



<div style="clear:both;"></div>

</div><!--main_in-->
</div>
</div><!--main container-->
</div><!--end container-->
<div style="clear:both;"></div>

<div id="back-top_pos_wide">
<p id="back-top_wide"><a href="#top"><span><img src="/img/to_top.png" alt="ページトップへ戻る" width="30" height="130"></span></a></p>
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
