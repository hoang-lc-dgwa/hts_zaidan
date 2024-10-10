<?php
//title.txtに記述された研修会名をセット(title.txtの文字コードはUTF-8として下さい。でないと文字化けします)
$getTitle = '';
if(file_exists('title.txt')){
	$lines = file('title.txt');
	$getTitle = rtrim($lines[0]);
}

//もし研修会名が文字化けする場合は以下で直接設定下さい（こちらが優先されます）
$title = '';//例　$title = '第107回研修会　北海道 標津';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>2024年3月沖縄・伊江島研修会申込フォーム |一般財団法人　共立国際交流奨学財団</title>
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
	font-size:12px;
	font-weight:normal;
	letter-spacing: -1px;
	color:#F00;
	padding:2px 0 2px 18px;
	background:url(../common/js/images/error.gif) no-repeat 0px 4px;
}
.text {
	font-family: "ＭＳ Ｐゴシック", Osaka, sans-serif;
	margin-left: 0;
}
.not-error2 .error {
	display: none !important;
}
.not-error2 .error-up1 {
	display: block !important;
}

/*.not-error2 .error {
	display: none !important;
}*/

.not-error .error-up1 {
	display: none !important;
}
</style>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script type="text/javascript" src="../common/js/validate.js"></script>
<script type="text/javascript" src="../common/js/form_homestay_iejima.js"></script>

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


<h1>2024年3月沖縄・伊江島研修会申込フォーム</h1>

<div class="text">●ご入力いただいた個人情報は、厳重にお取り扱いいたします。<br>
<span style="text-indent: -1em; padding-left: 1em;display: inline-block;">●申込フォームに不具合があった場合/申込フォーム送信後に当財団から連絡がない場合は、<br>
下記までお問い合わせください。</span><br><br>

　問合せ先 ： 03-5295-0205　（沖縄研修会担当宛）<br>
　受付時間 ： 9:00～17:00　（土・日・祝日を除く）<br />
<br />

（任意）以外の項目は必須入力になります。</div>

 <form action="mail.php" method="post" enctype="multipart/form-data" id="mainForm">
<table width="609" cellpadding="7" cellspacing="1" class="text">
<tr>
<td width="25%" nowrap bgcolor="#D1E7B1"><strong><big>研修会名</big></strong></td>
<td colspan="3" bgcolor="#E8FCCD">
	<?php echo (!empty($title)) ? $title : $getTitle;?><br>
<input name="研修会名" type="hidden" class="study" id="kensyukai" value="<?php echo (!empty($title)) ? $title : $getTitle;?>"></td>
</tr>
<tr>
<td bgcolor="#D1E7B1">氏名 （ローマ字）</td>
<td colspan="3" bgcolor="#E8FCCD"><input name="氏名（ローマ字）" type="text" class="shimei" value=""></td>
</tr>
<tr>
<td bgcolor="#D1E7B1">氏名 （フリガナ）</td>
<td colspan="3" bgcolor="#E8FCCD"><input name="氏名（フリガナ）" type="text" class="shimei" value=""></td>
</tr>
<tr>
<td bgcolor="#D1E7B1" style="min-width:85px">氏名（漢字）</td>
<td colspan="3" bgcolor="#E8FCCD"><input name="氏名（漢字）" type="text" class="shimei" value=""></td>
</tr>
<tr>
<td bgcolor="#D1E7B1">ニックネーム</td>
<td colspan="3" bgcolor="#E8FCCD"><input name="ニックネーム" type="text" class="shimei" value=""></td>
</tr>
<tr>
<td bgcolor="#D1E7B1">性別</td>
<td bgcolor="#E8FCCD" colspan="3"><input type="radio" name="性別" value="男" class="radio">
  男 　
    <input type="radio" name="性別" value="女" class="radio">
    女
</td>
</tr>
<tr>
<td bgcolor="#D1E7B1" rowspan="2">国籍</td>
<td bgcolor="#E8FCCD" rowspan="2"><input name="国籍" type="text" class="nationality" value=""></td>
<td bgcolor="#D1E7B1" style="min-width: 50px;">生年月日</td>
<td nowrap bgcolor="#E8FCCD">
<input name="生年月日[][年]" type="text" class="birth" value="" size="3" maxlength="4">
年
　
<input name="生年月日[][月]" type="text" class="birth" value="" size="1" maxlength="2">
月
　
<input name="生年月日[][日]" type="text" class="birth" value="" size="1" maxlength="2">
日
</td>
</tr>

<tr><td bgcolor="#D1E7B1">年齢</td><td  nowrap bgcolor="#E8FCCD">
<input name="年齢[][歳]" type="text" value="" class="birth" size="3" maxlength="2"> 歳</td></tr>

<tr>
<td bgcolor="#D1E7B1">学校名</td>
<td colspan="3" bgcolor="#E8FCCD"><input name="学校名" type="text" class="school1" value=""></td>
</tr>
<tr>
<td bgcolor="#D1E7B1">学部・学科</td>
<td bgcolor="#E8FCCD"><input name="学部・学科" type="text" class="school2" value=""></td>
<td bgcolor="#D1E7B1">学年</td>
<td bgcolor="#E8FCCD"><input name="学年[][年]" type="text" class="school3" value="" size="2" maxlength="1">
年
</td>
</tr>
<tr>
<td nowrap bgcolor="#D1E7B1">日本での住所</td>
<td colspan="3" bgcolor="#E8FCCD">
〒
<input name="郵便番号[][-]" type="text" value="" size="4" maxlength="3">
-
<input name="郵便番号[][]" type="text" value="" size="5" maxlength="4" onKeyUp="AjaxZip3.zip2addr('郵便番号[][-]','郵便番号[][]','ご住所','ご住所');">
<br>
<input name="ご住所" type="text" class="address" value=""></td>
</tr>
<!-- <tr>
<td bgcolor="#D1E7B1">自宅電話</td>
<td bgcolor="#E8FCCD"><input name="自宅電話" type="text" class="tel" value=""></td> -->

<td bgcolor="#D1E7B1" rowspan="2">携帯番号</td>
<td bgcolor="#E8FCCD" rowspan="2"><input name="携帯番号" type="text" class="tel" value=""></td>
<td bgcolor="#D1E7B1" nowrap="nowrap">E-mail①</td>
<td bgcolor="#E8FCCD"><input name="E-mail1" type="text" class="email" value="">
  </td>
</tr>

<tr>
<td bgcolor="#D1E7B1">E-mail②<br>（任意）</td>
<td bgcolor="#E8FCCD"><input name="E-mail2" type="text" class="email" value=""></td>
</tr>

<!-- <tr>
<td bgcolor="#D1E7B1">郵便番号</td>
<td bgcolor="#E8FCCD"><input name="郵便番号" type="text" class="tel" value=""></td>
<td bgcolor="#D1E7B1" nowrap="nowrap">E-mail①</td>
<td bgcolor="#E8FCCD"><input name="E-mail" type="text" class="email" value="">
 </td>
</tr>
<tr>
<td bgcolor="#D1E7B1">携帯番号</td>
<td bgcolor="#E8FCCD"><input name="携帯番号" type="text" class="tel" value=""></td>
<td bgcolor="#D1E7B1">E-mail②</td>
<td bgcolor="#E8FCCD"><input name="E-mail2" type="text" class="email" value=""></td>
</tr> -->
</table>

<br>

<table width="609" cellpadding="7" cellspacing="1" class="text" style="table-layout:fixed;">
<tr>
<td bgcolor="#B7B7D3"><strong><big>質問事項</big></strong></td>
<td colspan="3" bgcolor="#B7B7D3"><strong>※ホストファミリーとの組合せで大切な質問です。<br>
※正確に全部に記入してください（特に健康面の問題・動物アレルギー・食べられない物）</strong></td>
</tr>

















<!-- ================================== -->

<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q1．</strong>今回の研修会についてどのように知りましたか？（複数回答可）</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">
<input type="checkbox" name="今回の研修会についてどのように知りましたか[]" value="学校掲示ポスター" class="check">学校掲示ポスター／ホームページ
　
<input type="checkbox" name="今回の研修会についてどのように知りましたか[]" value="当財団ホームページ" class="check">当財団ホームページ
　
<input type="checkbox" name="今回の研修会についてどのように知りましたか[]" value="友人" class="check">友人
　
<input type="checkbox" name="今回の研修会についてどのように知りましたか[]" value="寮" class="check">寮

</td>
</tr>

<tr>
	<td colspan="4" bgcolor="#EEEEFF">
		<input type="checkbox" name="今回の研修会についてどのように知りましたか[]" value="その他" class="check">その他
		<input name="今回の研修会についてどのように知りましたか[]" type="text" class="etc" value="">
	</td>
</tr>

<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q2．</strong>日本滞在期間</td>
</tr>

<tr>
<td colspan="4" bgcolor="#EEEEFF">

<input name="日本滞在期間[0][年]" type="text" class="term1" value="" size="3" maxlength="4" id="kikaku_term01">
年

<input name="日本滞在期間[1][月]" type="text" class="term1" value="" size="3" maxlength="2" id="kikaku_term02">
月

～

<input name="日本滞在期間[2][年]" type="text" class="term1" value="" size="3" maxlength="4" id="kikaku_term03">
年

<input name="日本滞在期間[3][月]" type="text" class="term1" value="" size="3" maxlength="2" id="kikaku_term04">
月

</td>

</tr>






<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q3．</strong>日本語能力試験</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">
<!--<input name="question3" type="text" class="question3" value="<?=$question3?>" size="3" maxlength="2">
級-->

<input type="radio" name="日本語能力試験" value="N1" class="radio">
N1
　
<input type="radio" name="日本語能力試験" value="N2" class="radio">
N2
　
<input type="radio" name="日本語能力試験" value="N3" class="radio">
N3　
<input type="radio" name="日本語能力試験" value="N4" class="radio">
N4
　

<input type="radio" name="日本語能力試験" value="N5" class="radio">
N5　
<input type="radio" name="日本語能力試験" value="なし" class="radio">
なし

</td>
</tr>






<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q4．</strong>母国語</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF"><input name="母国語" type="text" class="free" value=""></td>
</tr>

<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q5．</strong>学んでいることは何ですか？</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF"><input name="学んでいることは何ですか" type="text" class="free" value=""></td>
</tr>









<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q6．</strong>お酒を飲みますか？</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">
<input type="radio" name="お酒を飲みますか" value="はい" class="radio">はい
　
<input type="radio" name="お酒を飲みますか" value="少し飲む" class="radio">少し飲む
　
<input type="radio" name="お酒を飲みますか" value="いいえ" class="radio">いいえ
</td>
</tr>

<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q7．</strong>タバコをすいますか？</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF" style="position: relative;">
<input type="radio" name="タバコをすいますか" value="はい" class="radio">はい
　
<span style="position: absolute;left:213px;">
  <input type="radio" name="タバコをすいますか" value="いいえ" class="radio">いいえ
</span>

（1日<input name="1日のタバコ本数" type="text" class="question15_etc" value="" size="4" maxlength="3">
本）
　

</td>
</tr>


<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q8. </strong>ホームステイやホテルにて、喫煙者と同室になることを気にしますか？</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">
<input type="radio" name="ホームステイ先やホテルにて、喫煙者と同室になることを気にしますか" value="気になる" class="radio">気になる
　
<input type="radio" name="ホームステイ先やホテルにて、喫煙者と同室になることを気にしますか" value="気にしない" class="radio">気にしない
　
<input type="radio" name="ホームステイ先やホテルにて、喫煙者と同室になることを気にしますか" value="喫煙場所が限定されていれば気にしない" class="radio">喫煙場所が限定されていれば気にしない　
</td>
</tr>


<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q9．</strong>ホストファミリーが喫煙することを気にしますか？</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">
<input type="radio" name="ホストファミリーが喫煙することを気にしますか" value="気にする" class="radio">気にする
<input type="radio" name="ホストファミリーが喫煙することを気にしますか" value="気にしない" class="radio">気にしない
<input type="radio" name="ホストファミリーが喫煙することを気にしますか" value="喫煙場所が限定されていれば気にしない" class="radio">喫煙場所が限定されていれば気にしない
</td>
</tr>

<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q10．</strong>沖縄に行ったことはありますか？</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">
<input type="radio" name="沖縄に行ったことはありますか" value="はい" class="radio">はい
　
<input type="radio" name="沖縄に行ったことはありますか" value="いいえ" class="radio">いいえ
</td>
</tr>

<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q11．</strong>ホームステイをした経験はありますか？</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">
<input type="radio" name="ホームステイをした経験" value="ある" class="radio">ある
　
<input type="radio" name="ホームステイをした経験" value="ない" class="radio">ない
</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">「ある」を選んだ方のみ ⇒ホームステイ先をご記入ください。<br>
<input name="ホームステイ先" type="text" class="free" value=""></td>
</tr>




<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q12．</strong>健康面に何か問題がありますか？</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">
<input type="radio" name="健康面に何か問題がありますか" value="はい" class="radio">はい
　
<input type="radio" name="健康面に何か問題がありますか" value="いいえ" class="radio">いいえ
</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">「はい」を選んだ方のみ ⇒ それは何ですか？具体的に詳しく書いて下さい<br>
<input name="健康面の問題" type="text" class="free" value=""></td>
</tr>

<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q13．</strong>何かアレルギーを持っていますか？（食べ物・動物・薬のアレルギーなど）</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">
<input type="radio" name="何かアレルギーを持っていますか" value="はい" class="radio">はい
　
<input type="radio" name="何かアレルギーを持っていますか" value="いいえ" class="radio">いいえ
</td>
</tr>

<tr>
<td colspan="4" bgcolor="#EEEEFF">「はい」を選んだ方のみ ⇒ 何のアレルギーですか？具体的に詳しく書いて下さい</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">
<span style="display: inline-block;width: 50px;">食べ物</span>：&nbsp;<input name="どんなアレルギーですか[1]" type="text" class="free" value="" style="width: 489px;"></td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">
<span style="display: inline-block;width: 50px;">動物</span>：&nbsp;<input name="どんなアレルギーですか[2]" type="text" class="free" value="" style="width: 489px;"></td>
</tr>

<td colspan="4" bgcolor="#EEEEFF">
<span style="display: inline-block;width: 50px;">他</span>：&nbsp;<input name="どんなアレルギーですか[3]" type="text" class="free" value="" style="width: 489px;"></td>
</tr>
<!-- <tr>
<td colspan="4" bgcolor="#EEEEFF">「はい」を選んだ方のみ ⇒ それは何ですか？具体的に詳しく書いて下さい<br>
<input name="アレルギーは何ですか" type="text" class="free" value=""></td>
</tr> -->


<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q14．</strong>宗教上の理由、その他の理由で食べられないものがありますか？</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">
<input type="radio" name="宗教上の理由、その他の理由で食べられないものがありますか" value="はい" class="radio">はい
　
<input type="radio" name="宗教上の理由、その他の理由で食べられないものがありますか" value="いいえ" class="radio">いいえ
</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">「はい」を選んだ方のみ ⇒ 何の食べ物ですか。具体的に詳しく書いて下さい<br>
<input name="食べられないもの" type="text" class="free" value=""></td>
</tr>

<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q15．</strong>ホームステイ先に小さい子供がいても大丈夫ですか？</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">
<input type="radio" name="ホームステイ先に小さい子供がいても大丈夫ですか" value="はい" class="radio">はい
　
<input type="radio" name="ホームステイ先に小さい子供がいても大丈夫ですか" value="いいえ" class="radio">いいえ
</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">いいえの場合、何歳以上なら大丈夫ですか？
　
<input name="いいえの場合、何歳以上なら大丈夫ですか" type="text" class="question17_etc" value="" size="3" maxlength="2">
歳</td>
</tr>




<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q16．</strong>ホストファミリーの家にペット（犬・ねこ等）がいても大丈夫ですか？</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">
<input type="radio" name="ホストファミリーの家にペット（犬・ねこ等）がいても大丈夫ですか" value="はい" class="radio">はい
　
<input type="radio" name="ホストファミリーの家にペット（犬・ねこ等）がいても大丈夫ですか" value="いいえ" class="radio">いいえ
</td>
</tr>

<tr>
<td colspan="4" bgcolor="#EEEEFF">「いいえ」を選んだ方のみ ⇒ それは何ですか？<br>
<input name="ホストファミリーの家にペット" type="text" class="free" value=""></td>
</tr>

<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q17．</strong>ホストファミリーにメッセージを書いてください。</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF"><textarea name="ホストファミリーにメッセージを書いてください" class="free" rows="4"></textarea></td>
</tr>







<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>◆</strong>在留カード両面（※日本人学生は学生証）・顔写真を添付してください。</td>
</tr>
<tr>
<td colspan="4" align="right" bgcolor="#EEEEFF">
［添付可能ファイル形式： doc, docx, ppt, pptx, xls, xlsx, pdf, jpg］</td>
</tr>
<tr>
<td bgcolor="#EEEEFF">表面<br>（2MB 以内）</td>
<td colspan="3" bgcolor="#EEEEFF"><input type="file" name="upfile[]" id="upfile01" /></td>
</tr>
<tr>
<td bgcolor="#EEEEFF">裏面<br>（2MB 以内）</td>
<td colspan="3" bgcolor="#EEEEFF"><input type="file" name="upfile[]" id="upfile02" /></td>
</tr>
<tr>
<td bgcolor="#EEEEFF">顔写真<br />
（2MB以内） </td>
<td colspan="3" bgcolor="#EEEEFF"><input type="file" name="upfile[]" id="upfile03" /></td>
</tr>
</table>
<br /><br />

<div class="text"><font color="red">※【個人情報の取り扱いについて】と、【申込み条件】については、良く読み、「同意する」にチェックしてください。<br />
　チェックされた時点で、以下の条件を全て了承したこととみなします。</font></div>
<br />

<div class="kiyaku" style="margin-left: 4px;">
<dl>
<dt>【お申し込み条件・注意事項】</dt>
<dd>
<ol>
<li>
研修会前日までに新型コロナウイルス感染が発覚した場合や、<br>
出発当日の検温で発熱（37.5℃以上）が確認された場合は、研修会への参加はできません。
</li>
<li>
研修会中、新型コロナウイルス対策のためのマスク着用・手洗い／うがい・アルコール消毒・<br>検温は各受け入れ施設の指示に従ってください。
</li>
<li>
年齢、資格、その他の条件が当財団の指定する条件に合致しない場合、もしくは、慢性疾患をお持ちの方、現在健康を損なわれている方、障害をお持ちの方は、現地事情や関係機関等の状況等により、研修会の安全かつ円滑な実施のためにご参加をお断りさせていただく場合がございます。
</li>
<li>
研修会参加時に、妊娠中の方はご参加をお断りさせていただきます。
<br>
</li>
<li>
研修会中に疾病、障害、その他事由により、医師の診断または加療を必要とすると当財団が判断した場合は、研修会の円滑な実施を図るため必要な措置をとらせていただきます。
</li>
<li>
このプログラムは研修会であり、民泊・ホームステイや地域交流を通じて日本文化を理解していただくための研修会です。観光目的での参加、主催者の指示に従わない場合は、財団からの補助金を請求すると共に、研修会の途中でもお帰りいただき、帰る際の交通費は自己負担となります。
</li>
<li>
このプログラムは研修会なので課題が出ます。この課題を当財団が指定する期限内に提出しない場合は、財団からの補助金を請求いたします。<br>
</li>
<li>
皆さんの個人情報（氏名・国籍・学校名）、個人写真、研修会中に撮影した写真等は、当財団ホームページ・出版物等に掲載させて頂きます。
</li>

</ol>
</dd>
<dd class="msg">1〜8について了承の場合、下記にチェックしお申し込みください。</dd>
<dd>
私は、このプログラムの目的を十分に理解し、主催者の指示に従い積極的に研修会活動に協力することを誓うとともに、期間中の事故によるいかなる損傷や障害に対して、主催者に一切の責任がないことを承認し、ここに同意致します。
</dd>
</dl>
</div>
<div class="agree">
<input type="checkbox" name="お申し込み条件" value="同意します" class="check" id="agree_check2">上記お申込み条件について同意します
</div>

<div id="btn"><input type="image" src="../common/img/btn_placehall_confirm_rollout.png" alt="確認画面へ" id="homestay2_submitbtn"></div>

</form>


<div style="height:10px;"></div>



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
