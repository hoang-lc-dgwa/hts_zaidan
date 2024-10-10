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
<title>ホームステイ研修会予約フォーム |一般財団法人　共立国際交流奨学財団</title>
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
<script type="text/javascript" src="../common/js/form.js"></script>

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


<h1>ホームステイ研修会予約フォーム</h1>

<div class="text">●ご入力いただいた個人情報は、厳重にお取り扱いいたします。<br>
●ご入力いただいたメールアドレスが間違っている場合等はお返事できない場合がございますので、<br />
　当財団から回答がない場合は、お電話でその旨をお問い合わせください。<br />
　※送信して頂きましたら、後日当財団担当者より詳細のご連絡を致します。<br>
　お電話での問合せ先　　03-5295-0205<br>
　受付時間　　9:00～17:00（土・日・祝日を除く）<br />
<br />
<font color="red">※予約は、参加費用の振込が当財団で確認出来た時点で完了し、先着順で定員になり次第、締め切ります。<br><br>
※予約フォームに不具合がありました場合は、上記問い合わせ先までお電話下さい。
</font><br>
<br>
（任意）以外の項目は必須入力になります。</div>

 <form action="mail.php" method="post" enctype="multipart/form-data" id="mainForm">
<table width="590" cellpadding="7" cellspacing="1" class="text">
<tr>
<td width="25%" nowrap bgcolor="#D1E7B1"><strong><big>研修会名</big></strong></td>
<td colspan="3" bgcolor="#E8FCCD"><?php echo (!empty($title)) ? $title : $getTitle;?>
<input name="研修会名" type="hidden" class="study" id="kensyukai" value="<?php echo (!empty($title)) ? $title : $getTitle;?>"></td>
</tr>
<tr>
<td bgcolor="#D1E7B1">氏名 （ローマ字）</td>
<td colspan="3" bgcolor="#E8FCCD"><input name="氏名（ローマ字）" type="text" class="shimei" value=""></td>
</tr>
<tr>
<td bgcolor="#D1E7B1">氏名 （ふりがな）</td>
<td colspan="3" bgcolor="#E8FCCD"><input name="氏名（ふりがな）" type="text" class="shimei" value=""></td>
</tr>
<tr>
<td bgcolor="#D1E7B1">氏名 （漢字） （任意）</td>
<td colspan="3" bgcolor="#E8FCCD"><input name="氏名（漢字）" type="text" class="shimei" value=""></td>
</tr>
<tr>
<td bgcolor="#D1E7B1">性別</td>
<td bgcolor="#E8FCCD"><input type="radio" name="性別" value="男" class="radio">
  男 　
    <input type="radio" name="性別" value="女" class="radio">
    女
</td>
<td bgcolor="#D1E7B1">配偶者</td>
<td bgcolor="#E8FCCD">
<input type="radio" name="配偶者" value="有" class="radio">
  有 　
    <input type="radio" name="配偶者" value="無" class="radio">
    無
</td>
</tr>
<tr>
<td bgcolor="#D1E7B1" rowspan="2">国籍</td>
<td bgcolor="#E8FCCD" rowspan="2"><input name="国籍" type="text" class="nationality" value=""></td>
<td bgcolor="#D1E7B1">生年月日</td>
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
<td bgcolor="#D1E7B1">学部・クラス</td>
<td bgcolor="#E8FCCD"><input name="学部・クラス" type="text" class="school2" value=""></td>
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
<tr>
<td bgcolor="#D1E7B1">携帯番号</td>
<td bgcolor="#E8FCCD"><input name="携帯番号" type="text" class="tel" value=""></td>
<td bgcolor="#D1E7B1" nowrap="nowrap">携帯メール<br>アドレス</td>
<td bgcolor="#E8FCCD"><input name="携帯メール" type="text" class="email" value="">
  </td>
</tr>
<tr>
<td bgcolor="#D1E7B1">TEL（自宅） （任意）</td>
<td bgcolor="#E8FCCD"><input name="TEL（自宅）" type="text" class="tel" value=""></td>
<td bgcolor="#D1E7B1">E-mail<br>（パソコン）</td>
<td bgcolor="#E8FCCD"><input name="E-mail" type="text" class="email" value=""></td>
</tr>
</table>

<br>

<table width="590" cellpadding="7" cellspacing="1" class="text" style="table-layout:fixed;">
<tr>
<td bgcolor="#B7B7D3"><strong><big>質問事項</big></strong></td>
<td colspan="3" bgcolor="#B7B7D3"><strong>※ホストファミリーとの組合せで大切な質問です。<br>
※正確に全部に記入してください（特に健康面の問題・ペット・食べられない物）</strong></td>
</tr>




<!-- ========================================================= -->


<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q1．</strong>今回の研修会についてどのように知りましたか？（複数回答可）</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">
<input type="checkbox" name="今回の研修会についてどのように知りましたか[]" value="学校掲示ポスター" class="check">学校掲示ポスター
　
<input type="checkbox" name="今回の研修会についてどのように知りましたか[]" value="当財団ホームページ" class="check">当財団ホームページ
　
<input type="checkbox" name="今回の研修会についてどのように知りましたか[]" value="財団メールマガジン" class="check">財団メールマガジン
　
<input type="checkbox" name="今回の研修会についてどのように知りましたか[]" value="友人" class="check">友人
　
<input type="checkbox" name="今回の研修会についてどのように知りましたか[]" value="寮掲示ポスター" class="check">寮掲示ポスター
<br>
<input type="checkbox" name="今回の研修会についてどのように知りましたか[]" value="その他" class="check">その他
　
<input name="今回の研修会についてどのように知りましたか[]" type="text" class="etc" value=""></td>
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
<td colspan="4" bgcolor="#D9D9F5"><strong>Q4．</strong>日本に留学に来た理由</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">
<input name="日本に留学に来た理由" type="text" class="free" value=""></td>
</tr>

<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q5．</strong>専門分野は何ですか？</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF"><input name="専門分野" type="text" class="free" value=""></td>
</tr>


<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q6．</strong>将来なりたい職業は何ですか？</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF"><input name="将来なりたい職業" type="text" class="free" value=""></td>
</tr>

<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q7．</strong>ホームステイをした経験はありますか？</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">
<input type="radio" name="ホームステイをした経験" value="ある" class="radio">ある
　
<input type="radio" name="ホームステイをした経験" value="ない" class="radio">ない
</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">「ある」を選んだ方のみ ⇒ホームステイ先をご記入ください。<br>
<input name="ホームステイ先" type="text" class="free" value="<?=$question7_etc?>"></td>
</tr>

<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q8．</strong>あなたの趣味は何ですか？</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF"><input name="あなたの趣味" type="text" class="free" value=""></td>
</tr>


<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q9．</strong>日本語能力試験についてお答えください。</td>
</tr>
<tr>
<td bgcolor="#EEEEFF">＊話すこと</td>
<td colspan="3" bgcolor="#EEEEFF">
<input type="radio" name="話すこと" value="大変良い" class="radio">大変良い
　
<input type="radio" name="話すこと" value="良い" class="radio">良い
　
<input type="radio" name="話すこと" value="ふつう" class="radio">ふつう
　
<input type="radio" name="話すこと" value="すこし" class="radio">すこし
　
<input type="radio" name="話すこと" value="できない" class="radio">できない
</td>
</tr>
<tr>
<td bgcolor="#EEEEFF">＊聞くこと</td>
<td colspan="3" bgcolor="#EEEEFF">
<input type="radio" name="聞くこと" value="大変良い" class="radio">大変良い
　
<input type="radio" name="聞くこと" value="良い" class="radio">良い
　
<input type="radio" name="聞くこと" value="ふつう" class="radio">ふつう
　
<input type="radio" name="聞くこと" value="すこし" class="radio">すこし
　
<input type="radio" name="聞くこと" value="できない" class="radio">できない
</td>
</tr>
<tr>
<td bgcolor="#EEEEFF">＊読むこと</td>
<td colspan="3" bgcolor="#EEEEFF">
<input type="radio" name="読むこと" value="大変良い" class="radio">大変良い
　
<input type="radio" name="読むこと" value="良い" class="radio">良い
　
<input type="radio" name="読むこと" value="ふつう" class="radio">ふつう
　
<input type="radio" name="読むこと" value="すこし" class="radio">すこし
　
<input type="radio" name="読むこと" value="できない" class="radio">できない
</td>
</tr>
<tr>
<td bgcolor="#EEEEFF">＊書くこと</td>
<td colspan="3" bgcolor="#EEEEFF">
<input type="radio" name="書くこと" value="大変良い" class="radio">大変良い
　
<input type="radio" name="書くこと" value="良い" class="radio">良い
　
<input type="radio" name="書くこと" value="ふつう" class="radio">ふつう
　
<input type="radio" name="書くこと" value="すこし" class="radio">すこし
　
<input type="radio" name="書くこと" value="できない" class="radio">できない
</td>
</tr>

<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q10．</strong>母国語</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF"><input name="母国語" type="text" class="free" value=""></td>
</tr>
<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q11．</strong>他に出来る言語 （任意）</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF"><input name="他に出来る言語" type="text" class="free" value=""></td>
</tr>

<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q12．</strong>宗教を持っていますか？</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">
<input type="radio" name="宗教を持っていますか" value="はい" class="radio">はい
　
<input type="radio" name="宗教を持っていますか" value="いいえ" class="radio">いいえ
</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">「はい」を選んだ方のみ ⇒宗教名をご記入ください。<br>
<input name="宗教名" type="text" class="free" value=""></td>
</tr>

<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q13．</strong>宗教上の理由や、その他の理由で食べられないものがありますか？</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">
<input type="radio" name="宗教上の理由、その他の理由で食べられないものがありますか" value="はい" class="radio">はい
　
<input type="radio" name="宗教上の理由、その他の理由で食べられないものがありますか" value="いいえ" class="radio">いいえ
</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">「はい」を選んだ方のみ ⇒ それは何ですか？具体的に詳しく書いて下さい<br>
<input name="食べられないもの" type="text" class="free" value=""></td>
</tr>

<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q14．</strong>お酒を飲みますか？</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">
<input type="radio" name="お酒を飲みますか" value="はい" class="radio">はい
　
<input type="radio" name="お酒を飲みますか" value="少し飲む" class="radio">少し飲む
　
<input type="radio" name="お酒を飲みますか" value="いいえ" class="radio">いいえ
</td>
</tr>

<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q15．</strong>タバコをすいますか？</td>
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
<td colspan="4" bgcolor="#D9D9F5"><strong>Q16．</strong>ホームステイ先やホテルで、同居人がタバコをすうことを気にしますか？</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">
<input type="radio" name="ホームステイ先やホテルで同居人がタバコをすうことを気にしますか" value="気にします" class="radio">気にします
　
<input type="radio" name="ホームステイ先やホテルで同居人がタバコをすうことを気にしますか" value="気にしません" class="radio">気にしません
　
<input type="radio" name="ホームステイ先やホテルで同居人がタバコをすうことを気にしますか" value="場所を限定していれば気にしない" class="radio">場所を限定していれば気にしない
</td>
</tr>

<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q17．</strong>健康面に何か問題がありますか？</td>
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
<td colspan="4" bgcolor="#D9D9F5"><strong>Q18．</strong>家庭に小さい子供がいても大丈夫ですか？</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">
<input type="radio" name="家庭に小さい子供がいても大丈夫ですか" value="はい" class="radio">はい
　
<input type="radio" name="家庭に小さい子供がいても大丈夫ですか" value="いいえ" class="radio">いいえ
</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">いいえの場合、何歳以上なら大丈夫ですか？
　
<input name="いいえの場合、何歳以上なら大丈夫ですか" type="text" class="question18_etc" value="<?=$question18_etc?>" size="3" maxlength="2">
歳</td>
</tr>

<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q19．</strong>ホストファミリーの家にペット（犬・ねこ等）がいても大丈夫ですか？</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">
<input type="radio" name="ホストファミリーの家にペット（犬・ねこ等）がいても大丈夫ですか" value="はい" class="radio">はい
　
<input type="radio" name="ホストファミリーの家にペット（犬・ねこ等）がいても大丈夫ですか" value="いいえ" class="radio">いいえ
</td>
</tr>

<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q20．</strong>何かアレルギーを持っていますか？（食べ物・動物・薬のアレルギーなど）</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">
<input type="radio" name="何かアレルギーを持っていますか" value="はい" class="radio">はい
　
<input type="radio" name="何かアレルギーを持っていますか" value="いいえ" class="radio">いいえ
</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">「はい」を選んだ方のみ ⇒ それは何ですか？具体的に詳しく書いて下さい<br>
<input name="アレルギーは何ですか" type="text" class="free" value=""></td>
</tr>

<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q21．</strong>あなたがこの研修会で一番楽しみにしていることはなんですか？</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF"><textarea name="あなたがこの研修会で一番楽しみにしていること" class="free" rows="4"></textarea></td>
</tr>






<!-- ========================================================= -->


















<!-- <tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q15．</strong>ホストファミリーの家で体験したい農作業はどれですか？ <br>
　　　　体験してみたい順に（ ）に1～3の数字を入れて下さい。</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">


パイナップル農家族（
<input name="体験したい農作業（パイナップル農家族）" type="text" class="" value="" size="1" maxlength="1">

マンゴー農家族（
<input name="体験したい農作業（マンゴー農家族）" type="text" class="" value="" size="1" maxlength="1">

シークヮーサー農家族（
<input name="体験したい農作業（シークヮーサー農家族）" type="text" class="" value="" size="1" maxlength="1">
</td>
</tr> -->


<!-- <tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q16．</strong>体験してみたい文化・生活体験はどれですか？<br>
　　　　体験してみたい順に（　）に１～３までの数字を入れてください。</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF">


沖縄料理体験（
<input name="体験してみたい文化・生活体験（沖縄料理体験）" type="text" class="" value="" size="1" maxlength="1">

三線体験（
<input name="体験してみたい文化・生活体験（三線体験）" type="text" class="" value="" size="1" maxlength="1">

クラフト体験（
<input name="体験してみたい文化・生活体験（クラフト体験）" type="text" class="" value="" size="1" maxlength="1">

</td>
</tr> -->









<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>Q22．</strong>ホストファミリーに聞きたいことや、メッセージを書いてください。</td>
</tr>
<tr>
<td colspan="4" bgcolor="#EEEEFF"><textarea name="ホストファミリーに聞きたいことや、メッセージ" class="free" rows="4"></textarea></td>
</tr>



<tr>
<td colspan="4" bgcolor="#D9D9F5"><strong>◆</strong>留学生は在留カード両面コピー（スキャンデータ）・顔写真を添付してください。<br>
<strong>◆</strong>日本人学生は学生証両面コピー（スキャンデータ）・顔写真を添付してください。</td>
</tr>
<tr>
<td colspan="4" align="right" bgcolor="#EEEEFF">
［添付可能ファイル形式： doc, docx, ppt, pptx, xls, xlsx, pdf, jpg］</td>
</tr>
<tr>
<td bgcolor="#EEEEFF">在留カード（表面）のコピー<br />
学生証（表面）のコピー<br>
（2MB以内） </td>
<td colspan="3" bgcolor="#EEEEFF"><input type="file" name="upfile[]" id="upfile01" /></td>
</tr>
<tr>
<td bgcolor="#EEEEFF">在留カード（裏面）のコピー<br />
学生証（裏面）のコピー<br>
（2MB以内） </td>
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
住所： 〒101-0021　東京都千代田区外神田 2-17-3　アヤベビル 4F<br>
TEL： 03-5295-0205<br>
受付時間： 9:00～17:00 （土日祝日・年末年始を除く）</dd>
</dl>
</div>
<div class="agree"><input type="checkbox" name="個人情報の取り扱いについて" value="同意します" class="check" id="agree_check">上記個人情報の取り扱いについて同意します</div>

<div class="kiyaku">
<dl>
<dt>【お申し込み条件】</dt>
<dd>
<ol>
<li>年齢、資格、その他の条件が当財団の指定する条件に合致しない場合、もしくは、慢性疾患をお持ちの方、現在健康を損なわれている方、障害をお持ちの方は、現地事情や関係機関等の状況等により、研修会の安全かつ円滑な実施のためにご参加をお断りさせていただく場合がございます。</li>
<li>研修会のお申し込み時に、妊娠中の方はご参加をお断りさせていただきます。（お申し込み後、研修会前日までに妊娠が発覚した場合は参加費を返金いたしません。）</li>
<li>みなさんが研修会中に疾病、障害、その他事由により、医師の診断または加療を必要とすると当財団が判断した場合は、研修会の円滑な実施を図るため必要な措置をとらせていただきます。</li>
<li>このプログラムは研修会であり、ホームステイや地域交流を通じて日本文化を理解していただくための研修会です。観光目的での参加、主催者の指示に従わない場合は、補助金の返金を請求すると共に、研修会の途中でもお帰りいただくことがあります。なお、帰る際の交通費は自己負担となります。</li>
<li>このプログラムは研修会なので課題が出ます。この課題を当財団が指定する期限内に提出しない場合は、補助金の返金を請求いたします。</li>
<li>研修会中に撮影した写真等は、当財団ホームページ・出版物等に掲載させて頂く場合がございます。</li>
</ol>
</dd>
<dd class="msg">1～6について了承の場合、下記にチェックしお申し込みください。</dd>
<dd>私は、このプログラムの目的を十分に理解し、主催者の指示に従い積極的に研修会活動に協力することを誓うとともに、期間中の事故によるいかなる損 傷や障害に対して、主催者に一切の責任がないことを承認し、ここに同意致します。</dd>
</dl>
</div>
<div class="agree">
<input type="checkbox" name="お申し込み条件" value="同意します" class="check" id="agree_check2">上記お申込み条件について同意します
</div>

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
