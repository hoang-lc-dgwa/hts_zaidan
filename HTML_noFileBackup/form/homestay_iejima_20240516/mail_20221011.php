<?php header("Content-Type:text/html;charset=utf-8"); ?>
<?php //error_reporting(E_ALL | E_STRICT);
##-----------------------------------------------------------------------------------------------------------------##
#
#  PHPメールプログラム【Mail05】　ファイル添付版　要PHP5以上
#　改造や改変は自己責任で行ってください。
#
#  今のところ特に問題点はありませんが、不具合等がありましたら下記までご連絡ください。
#  MailAddress: info@php-factory.net
#  name: K.Numata
#  HP: http://www.php-factory.net/
#
#  重要！！サイトでチェックボックスを使用する場合のみですが。。。
#  チェックボックスを使用する場合はinputタグに記述するname属性の値を必ず配列の形にしてください。
#  例　name="当サイトをしったきっかけ[]"  として下さい。
#  nameの値の最後に[と]を付ける。じゃないと複数の値を取得できません！
#
##-----------------------------------------------------------------------------------------------------------------##
if (version_compare(PHP_VERSION, '5.1.0', '>=')) {//PHP5.1.0以上の場合のみタイムゾーンを定義
	date_default_timezone_set('Asia/Tokyo');//タイムゾーンの設定（日本以外の場合には適宜設定ください）
}

/*-------------------------------------------------------------------------------------------------------------------
* ★以下設定時の注意点　
* ・値（=の後）は数字以外の文字列（一部を除く）はダブルクオーテーション「"」、または「'」で囲んでいます。
* ・これをを外したり削除したりしないでください。後ろのセミコロン「;」も削除しないください。
* ・また先頭に「$」が付いた文字列は変更しないでください。数字の1または0で設定しているものは必ず半角数字で設定下さい。
* ・メールアドレスのname属性の値が「Email」ではない場合、以下必須設定箇所の「$Email」の値も変更下さい。
* ・name属性の値に半角スペースは使用できません。
*以上のことを間違えてしまうとプログラムが動作しなくなりますので注意下さい。
-------------------------------------------------------------------------------------------------------------------*/


//---------------------------　必須設定　必ず設定してください　-----------------------

//サイトのトップページのURL　※デフォルトでは送信完了後に「トップページへ戻る」ボタンが表示されますので
$site_top = "https://www.kif-org.com";

// 管理者メールアドレス ※メールを受け取るメールアドレス(複数指定する場合は「,」で区切ってください 例 $to = "aa@aa.aa,bb@bb.bb";)



// EMAIL
$to = "kif-info@dormy.co.jp";



//フォームのメールアドレス入力箇所のname属性の値（name="○○"　の○○部分）
$Email = "E-mail1";

/*------------------------------------------------------------------------------------------------
以下スパム防止のための設定　
※有効にするにはこのファイルとフォームページが同一ドメイン内にある必要があります
------------------------------------------------------------------------------------------------*/

//スパム防止のためのリファラチェック（フォームページが同一ドメインであるかどうかのチェック）(する=1, しない=0)
$Referer_check = 0;

//リファラチェックを「する」場合のドメイン ※以下例を参考に設置するサイトのドメインを指定して下さい。
$Referer_check_domain = "kif-org.com";

//---------------------------　必須設定　ここまで　------------------------------------


//---------------------- 任意設定　以下は必要に応じて設定してください ------------------------


// 管理者宛のメールで差出人を送信者のメールアドレスにする(する=1, しない=0)
// する場合は、メール入力欄のname属性の値を「$Email」で指定した値にしてください。
//メーラーなどで返信する場合に便利なので「する」がおすすめです。
$userMail = 1;

// Bccで送るメールアドレス(複数指定する場合は「,」で区切ってください 例 $BccMail = "aa@aa.aa,bb@bb.bb";)



// BCC MAIL
//$BccMail = "aoki-yoshimi@dormy.co.jp,shibata-a@dormy.co.jp";



// 管理者宛に送信されるメールのタイトル（件名）
$subject = "【".@$_POST['研修会名']."】ホームステイ研修会予約フォーム";

// 送信確認画面の表示(する=1, しない=0)
$confirmDsp = 1;

// 送信完了後に自動的に指定のページ(サンクスページなど)に移動する(する=1, しない=0)
// CV率を解析したい場合などはサンクスページを別途用意し、URLをこの下の項目で指定してください。
// 0にすると、デフォルトの送信完了画面が表示されます。
$jumpPage = 1;

// 送信完了後に表示するページURL（上記で1を設定した場合のみ）※httpから始まるURLで指定ください。
$thanksPage = "./thanks.html";

// 必須入力項目を設定する(する=1, しない=0)
$requireCheck = 1;

/* 必須入力項目(入力フォームで指定したname属性の値を指定してください。（上記で1を設定した場合のみ）
値はシングルクォーテーションで囲み、複数の場合はカンマで区切ってください。フォーム側と順番を合わせると良いです。
配列の形「name="○○[]"」の場合には必ず後ろの[]を取ったものを指定して下さい。*/
$require = array('氏名（ローマ字）','氏名（フリガナ）','E-mail1');//JSでチェックしていますがスパム対策のため併用しています。


//----------------------------------------------------------------------
//  自動返信メール設定(START)
//----------------------------------------------------------------------

// 差出人に送信内容確認メール（自動返信メール）を送る(送る=1, 送らない=0)
// 送る場合は、フォーム側のメール入力欄のname属性の値が上記「$Email」で指定した値と同じである必要があります
$remail = 1;

//自動返信メールの送信者欄に表示される名前　※あなたの名前や会社名など（もし自動返信メールの送信者名が文字化けする場合ここは空にしてください）
$refrom_name = "";

// 差出人に送信確認メールを送る場合のメールのタイトル（上記で1を設定した場合のみ）
$re_subject = "送信ありがとうございました";

//フォーム側の「名前」箇所のname属性の値　※自動返信メールの「○○様」の表示で使用します。
//指定しない、または存在しない場合は、○○様と表示されないだけです。あえて無効にしてもOK
$dsp_name = '氏名（ローマ字）';

//自動返信メールの冒頭の文言 ※日本語部分のみ変更可
$remail_text = <<< TEXT

ホームステイ研修会のお申込みありがとうございました。
早急にご返信致しますので今しばらくお待ちください。

送信内容は以下になります。

TEXT;


//自動返信メールに署名（フッター）を表示(する=1, しない=0)※管理者宛にも表示されます。
$mailFooterDsp = 0;

//上記で「1」を選択時に表示する署名（フッター）（FOOTER～FOOTER;の間に記述してください）
$mailSignature = <<< FOOTER

＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
株式会社○○○○　佐藤太郎
〒150-XXXX 東京都○○区○○ 　○○ビル○F　
TEL：03- XXXX - XXXX 　FAX：03- XXXX - XXXX
携帯：090- XXXX - XXXX 　
E-mail:xxxx@xxxx.com
URL: http://www.php-factory.net/
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

FOOTER;


//----------------------------------------------------------------------
//  自動返信メール設定(END)
//----------------------------------------------------------------------

//メールアドレスの形式チェックを行うかどうか。(する=1, しない=0)
//※デフォルトは「する」。特に理由がなければ変更しないで下さい。メール入力欄のname属性の値が上記「$Email」で指定した値である必要があります。
$mail_check = 1;

//全角英数字→半角変換を行うかどうか。(する=1, しない=0)
$hankaku = 0;

//全角英数字→半角変換を行う項目のname属性の値（name="○○"の「○○」部分）
//※複数の場合にはカンマで区切って下さい。（上記で「1」を指定した場合のみ有効）
//配列の形「name="○○[]"」の場合には必ず後ろの[]を取ったものを指定して下さい。
$hankaku_array = array('電話番号','金額');



//----------------------------------------------------------------------
//  添付ファイル処理用設定(BEGIN)
//----------------------------------------------------------------------
//ファイル添付機能を使用する場合は一時ファイルを保存する必要があるため確認画面の表示が必須になります。
$confirmDsp = 1;//確認画面を表示 ※変更不可

/* ----- 重要 ------*/
//ファイルアップ部分のnameの値は必ず配列の形　例　upfile[]　としてください。※添付ファイルが1つでも
//添付ファイルは複数も可能です。

//例1 添付ファイルが1つの場合　
//添付ファイル <input type="file" name="upfile[]" />

//例2 添付ファイルが複数の場合　
//添付ファイル1：<input type="file" name="upfile[]" /> 添付ファイル2：<input type="file" name="upfile[]" />



//添付ファイルのMAXファイルサイズ　※単位バイト　デフォルトは5MB（ただしサーバーのphp.iniの設定による）
$maxImgSize = 5024000;

//添付ファイル一時保存用ディレクトリ ※書き込み可能なパーミッション（777等※サーバによる）にしてください
$tmp_dir_name = './tmp/';

//添付許可ファイル（拡張子）
//※大文字、小文字は区別されません（同じ扱い）のでここには小文字だけでOKです（拡張子を大文字で送信してもマッチします）
$permission_file = array('jpg','jpeg','gif','png','pdf','xls','xlsx','doc','docx','ppt','pptx');

//フォームのファイル添付箇所のname属性の値 <input type="file" name="upfile[]" />の「upfile」部
$upfile_key = 'upfile';

//サーバー上の一時ファイルを削除する(する=1, しない=0)　※バックアップ目的で保存させておきたい場合など
//添付ファイルは確認画面表示時にtmpディレクトリに一旦保存されますが、それを送信時に削除するかどうか。（残す場合サーバー容量に余裕がある場合のみ推奨）
//もちろん手動での削除も可能です。
$tempFileDel = 1;//デフォルトは削除する

//確認画面→戻る→確認画面のページ遷移では最初の一時ファイルはサーバ上に残りますが、1時間後以降の最初の送信時に自動で削除されます。


//メールソフトで添付ファイル名が文字化けする場合には「1」にしてみてください。（ThuderBirdで日本語ファイル名文字化け対策）
//「1」にすると添付ファイル名が0～の連番になります。
$rename = 0;//(0 or 1)


//サーバーのphp.iniの「mail.add_x_header」がONかOFFかチェックを行う(する=1, しない=0)　※PHP5.3以降
//「する」場合、mail.add_x_headerがONの場合確認画面でメッセージが表示されます。
//mail.add_x_headerがONの場合、添付ファイルが正常に添付できない可能性が非常に高いためのチェックです。
//mail.add_x_headerはデフォルトは「OFF」ですが、サーバーによっては稀に「ON」になっているためです。
//mail.add_x_headerがONの場合でも正常に添付できていればこちらは「0」として下さい。メッセージは非表示となります。
$iniAddX = 0;


//カスタマイズ版独自
//添付ファイルのタイトル
$upfileTitle = array('在留カード、学生証のコピー（表面）','在留カード、学生証のコピー（裏面）','顔写真');

//----------------------------------------------------------------------
//  添付ファイル処理用設定(END)
//----------------------------------------------------------------------


/*------------------------------------------------------------------------------------------------
【スパム対策用コード】(START)
※指定のキーワードが含まれていたら強制終了する処理(送信させない)
------------------------------------------------------------------------------------------------*/

//禁止するキーワードを設定下さい（値は'で囲み、カンマで区切って下さい）
$ngwordArr = array();

//文字コードの指定（フォームの文字コードに合わせて下さい）
$targetEncode = 'utf-8';

//キーワードマッチング処理（基本的に変更禁止）
if(!empty($ngwordArr)){
foreach($_POST as $val){
	foreach($ngwordArr as $vv){
		if(!is_array($val) && mb_strpos($val,$vv,0,$targetEncode) !== false) exit('Error');
	}
}
}
/*------------------------------------------------------------------------------------------------
【スパム対策用コード】(END)
------------------------------------------------------------------------------------------------*/


//------------------------------- 任意設定ここまで ---------------------------------------------


// 以下の変更は知識のある方のみ自己責任でお願いします。


//----------------------------------------------------------------------
//  関数実行、変数初期化
//----------------------------------------------------------------------
$encode = "UTF-8";//このファイルの文字コード定義（変更不可）

if(isset($_GET)) $_GET = sanitize($_GET);//NULLバイト除去//
if(isset($_POST)) $_POST = sanitize($_POST);//NULLバイト除去//
if(isset($_COOKIE)) $_COOKIE = sanitize($_COOKIE);//NULLバイト除去//
if($encode == 'SJIS') $_POST = sjisReplace($_POST,$encode);//Shift-JISの場合に誤変換文字の置換実行
$funcRefererCheck = refererCheck($Referer_check,$Referer_check_domain);//リファラチェック実行

//変数初期化
$sendmail = 0;
$empty_flag = 0;
$post_mail = '';
$errm ='';
$header ='';


//----------------------------------------------------------------------
//  添付ファイル処理(BEGIN)
//----------------------------------------------------------------------

if(isset($_FILES[$upfile_key])){
	$file_count = count($_FILES[$upfile_key]["tmp_name"]);
	for ($i=0;$i<$file_count;$i++) {

		if (@is_uploaded_file($_FILES[$upfile_key]["tmp_name"][$i])) {
			if ($_FILES[$upfile_key]["size"][$i] < $maxImgSize) {

				//許可拡張子チェック
				$upfile_name_check = '';
				$upfile_name_array[$i] = explode('.',$_FILES[$upfile_key]['name'][$i]);
				$upfile_name_array_extension[$i] = strtolower(end($upfile_name_array[$i]));
				foreach($permission_file as $permission_val){
				  if($upfile_name_array_extension[$i] == $permission_val){
					  $upfile_name_check = 'checkOK';
				  }
				}
				if($upfile_name_check != 'checkOK'){
				  $errm .= "<p class=\"error_messe\">許可されていない拡張子です。</p>\n";
				  $empty_flag = 1;
				}else{

					  $temp_file_name[$i] = $_FILES[$upfile_key]["name"][$i];
					  $temp_file_name_array[$i] =  explode('.',$temp_file_name[$i]);

					  if(count($temp_file_name_array[$i]) < 2){
						$errm .= "<p class=\"error_messe\">ファイルに拡張子がありません。</p>\n";
						$empty_flag = 1;
					  }else{
						$extension = end($temp_file_name_array[$i]);

						  if(function_exists('uniqid')){
							  if(!file_exists($tmp_dir_name) || !is_writable($tmp_dir_name)){
							  exit("（重大なエラー）添付ファイル一時保存用のディレクトリが無いかパーミッションが正しくありません。{$tmp_dir_name}ディレクトリが存在するか、または{$tmp_dir_name}ディレクトリのパーミッションを書き込み可能（777等※サーバによる）にしてください");
							  }
						  $upFileName[$i] = uniqid('temp_file_').mt_rand(10000,99999).'.'.$extension;
						  $upFilePath[$i] = $tmp_dir_name.$upFileName[$i];

						  }else{
							  exit('（重大なエラー）添付ﾌｧｲﾙ一時ﾌｧｲﾙ用のﾕﾆｰｸIDを生成するuniqid関数が存在しません。<br>PHPのﾊﾞｰｼﾞｮﾝが極端に低い（PHP4未満）ようです。<br>PHPをﾊﾞｰｼﾞｮﾝｱｯﾌﾟするか配布元に相談ください');
						  }
						  move_uploaded_file($_FILES[$upfile_key]['tmp_name'][$i],$upFilePath[$i]);
						  @chmod($upFilePath[$i], 0666);
					  }
				}
			}else{
				  $errm .= "<p class=\"error_messe\">ファイルサイズが大きすぎます。</p>\n";
				  $empty_flag = 1;
			}
		}
	}
}
//----------------------------------------------------------------------
//  添付ファイル処理(END)
//----------------------------------------------------------------------

if($requireCheck == 1) {
	$requireResArray = requireCheck($require);//必須チェック実行し返り値を受け取る
	$errm .= $requireResArray['errm'];
	if($requireResArray['empty_flag'] == 1) $empty_flag = $requireResArray['empty_flag'];
}
//メールアドレスチェック
if(empty($errm)){
	foreach($_POST as $key=>$val) {
		if($val == "confirm_submit") $sendmail = 1;
		if($key == $Email) $post_mail = h($val);
		if($key == $Email && $mail_check == 1 && !empty($val)){
			if(!checkMail($val)){
				$errm .= "<p class=\"error_messe\">【".$key."】はメールアドレスの形式が正しくありません。</p>\n";
				$empty_flag = 1;
			}
		}
	}
}

if(($confirmDsp == 0 || $sendmail == 1) && $empty_flag != 1){

	//差出人に届くメールをセット
	if($remail == 1) {
		$userBody = mailToUser($_POST,$dsp_name,$remail_text,$mailFooterDsp,$mailSignature,$encode);
		$reheader = userHeader($refrom_name,$to,$encode);
		$re_subject = "=?iso-2022-jp?B?".base64_encode(mb_convert_encoding($re_subject,"JIS",$encode))."?=";
	}
	//管理者宛に届くメールをセット
	$adminBody = mailToAdmin($_POST,$subject,$mailFooterDsp,$mailSignature,$encode,$confirmDsp);
	$header = adminHeader($userMail,$post_mail,$BccMail,$to);
	//$subject = "=?iso-2022-jp?B?".base64_encode(mb_convert_encoding($subject,"JIS",$encode))."?=";

	//トラバーサルチェック
	if(isset($_POST['upfilePath'])){
		traversalCheck($tmp_dir_name);
	}

	$result = mb_send_mail($to,$subject,$adminBody,$header,'-f'. $to);

//	if(ini_get('safe_mode')) {
//		$result = mb_send_mail($to,$subject,$adminBody,$header);
//	}else{
//		$result = mb_send_mail($to,$subject,$adminBody,$header,'-f'. $to);
//	}

	//サーバ上の一時ファイルを削除
	$dir = rtrim($tmp_dir_name,'/');
	deleteFile($dir,$tempFileDel);

  if($remail == 1) mail($post_mail,$re_subject,$userBody,$reheader,'-f'. $to);
}
else if($confirmDsp == 1){

/*　▼▼▼送信確認画面のレイアウト※編集可　オリジナルのデザインも適用可能▼▼▼　*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>アジア体験コンテストウェブ申込みフォーム |一般財団法人　共立国際交流奨学財団</title>
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
/* 自由に編集下さい */
table.formTable{
	width:100%;
	margin:0 auto;
	border-collapse:collapse;
}
table.formTable td,table.formTable th{
	border:1px solid #ccc;
	padding:10px;
	font-size:12px;
}
table.formTable th{
	width:30%;
	font-weight:normal;
	background:#efefef;
	text-align:left;
}
p.error_messe{
	margin:5px 0;
	color:red;
}
</style>

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


<!--<h1>アジア体験コンテストウェブ申込みフォーム</h1>-->
<h1>確認画面</h1>


<!-- ▲ Headerやその他コンテンツなど　※自由に編集可 ▲-->

<!-- ▼************ 送信内容表示部　※編集は自己責任で ************ ▼-->
<div id="formWrap">
<?php if($empty_flag == 1){ ?>
<div align="center">
<h4>入力にエラーがあります。下記をご確認の上「戻る」ボタンにて修正をお願い致します。</h4>
<?php echo $errm; ?><br /><br /><input type="button" value=" 前画面に戻る " onClick="history.back()">
</div>
<?php }else{ ?>
<!--<h3>確認画面</h3>-->
<p><strong>入力内容をご確認の上、「送信」ボタンをクリックして下さい。</strong></p>
<?php iniGetAddMailXHeader($iniAddX);//php.ini設定チェック?>
<form action="<?php echo h($_SERVER['SCRIPT_NAME']); ?>" method="POST">
<table class="formTable">
<?php echo confirmOutput($_POST);//入力内容を表示?>
</table>
<p align="center"><input type="hidden" name="mail_set" value="confirm_submit">
<input type="hidden" name="httpReferer" value="<?php echo h($_SERVER['HTTP_REFERER']) ;?>">
<?php
if(isset($_FILES[$upfile_key]["tmp_name"])){
	$file_count = count($_FILES[$upfile_key]["tmp_name"]);
	for ($i=0;$i<$file_count;$i++) {
		if(!empty($_FILES[$upfile_key]["tmp_name"][$i])){
?>
<input type="hidden" name="upfilePath[]" value="<?php echo h($upFilePath[$i]);?>">
<input type="hidden" name="upfileType[]" value="<?php echo h($_FILES[$upfile_key]['type'][$i]);?>">
<input type="hidden" name="upfileOriginName[]" value="<?php echo h($_FILES[$upfile_key]['name'][$i]);?>">
<?php
		}
	}
}
?>

<div id="btn">
<input type="image" src="../common/img/btn_return_rollout.png" value="戻る" onClick="history.back(); return false;">
<input type="image" src="../common/img/btn_send_rollout.png" value="送信する">
</div>


<!--<input type="submit" value="　送信する　">
<input type="button" value="前画面に戻る" onClick="history.back()">-->


</form>
<?php copyright();} ?>
</div><!-- /formWrap -->
<!-- ▲ *********** 送信内容確認部　※編集は自己責任で ************ ▲-->

<!-- ▼ Footerその他コンテンツなど　※編集可 ▼-->


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
<?php
/* ▲▲▲送信確認画面のレイアウト　※オリジナルのデザインも適用可能▲▲▲　*/
}

if(($jumpPage == 0 && $sendmail == 1) || ($jumpPage == 0 && ($confirmDsp == 0 && $sendmail == 0))) {

/* ▼▼▼送信完了画面のレイアウト　編集可 ※送信完了後に指定のページに移動しない場合のみ表示▼▼▼　*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>完了画面</title>
</head>
<body>
<div align="center">
<?php if($empty_flag == 1){ ?>
<h4>入力にエラーがあります。下記をご確認の上「戻る」ボタンにて修正をお願い致します。</h4>
<div style="color:red"><?php echo $errm; ?></div>
<br /><br /><input type="button" value=" 前画面に戻る " onClick="history.back()">
</div>
</body>
</html>
<?php }else{ ?>
送信ありがとうございました。<br />
送信は正常に完了しました。<br /><br />
<a href="<?php echo $site_top ;?>">トップページへ戻る&raquo;</a>
</div>
<?php copyright(); ?>
<!--  CV率を計測する場合ここにAnalyticsコードを貼り付け -->
</body>
</html>
<?php
/* ▲▲▲送信完了画面のレイアウト 編集可 ※送信完了後に指定のページに移動しない場合のみ表示▲▲▲　*/
  }
}
//確認画面無しの場合の表示、指定のページに移動する設定の場合、エラーチェックで問題が無ければ指定ページヘリダイレクト
else if(($jumpPage == 1 && $sendmail == 1) || $confirmDsp == 0) {
	if($empty_flag == 1){ ?>
<div align="center"><h4>入力にエラーがあります。下記をご確認の上「戻る」ボタンにて修正をお願い致します。</h4><div style="color:red"><?php echo $errm; ?></div><br /><br /><input type="button" value=" 前画面に戻る " onClick="history.back()"></div>
<?php
	}else{ header("Location: ".$thanksPage); }
}

// 以下の変更は知識のある方のみ自己責任でお願いします。

//----------------------------------------------------------------------
//  関数定義(START)
//----------------------------------------------------------------------
function checkMail($str){
	$mailaddress_array = explode('@',$str);
	if(preg_match("/^[\.!#%&\-_0-9a-zA-Z\?\/\+]+\@[!#%&\-_0-9a-z]+(\.[!#%&\-_0-9a-z]+)+$/", "$str") && count($mailaddress_array) ==2){
		return true;
	}else{
		return false;
	}
}
function h($string) {
	global $encode;
	return htmlspecialchars($string, ENT_QUOTES,$encode);
}
function sanitize($arr){
	if(is_array($arr)){
		return array_map('sanitize',$arr);
	}
	return str_replace("\0","",$arr);
}
//Shift-JISの場合に誤変換文字の置換関数
function sjisReplace($arr,$encode){
	foreach($arr as $key => $val){
		$key = str_replace('＼','ー',$key);
		$resArray[$key] = $val;
	}
	return $resArray;
}
//送信メールにPOSTデータをセットする関数
function postToMail($arr){
	global $hankaku,$hankaku_array,$upfileTitle;
	$resArray = '';
	foreach($arr as $key => $val){
		$out = '';
		if(is_array($val)){
			foreach($val as $key02 => $item){
				//連結項目の処理
				if(is_array($item)){
					$out .= connect2val($item);
				}else{
					$out .= $item . ', ';
				}
			}
			$out = rtrim($out,', ');

		}else{ $out = $val; }//チェックボックス（配列）追記ここまで
		if(get_magic_quotes_gpc()) { $out = stripslashes($out); }

		if($key == 'x' || $key == 'y') continue;

		//全角→半角変換
		if($hankaku == 1){
			$out = zenkaku2hankaku($key,$out,$hankaku_array);
		}

		if($out != "confirm_submit" && $key != "httpReferer" && $key != "upfilePath" && $key != "upfileType") {

			if($key == "upfileOriginName" && $out !=''){
				$key = '添付ファイル';
			}elseif($key == "upfileOriginName" && $out ==''){
				continue;
			}

			$resArray .= "【 ".$key." 】 ".$out."\n";
		}
	}
	return $resArray;
}
//確認画面の入力内容出力用関数
function confirmOutput($arr){
	global $upFilePath,$upfile_key,$encode,$hankaku,$hankaku_array,$upfileTitle;
	$html = '';
	foreach($arr as $key => $val) {
		$out = '';
		if(is_array($val)){
			foreach($val as $key02 => $item){
				//連結項目の処理
				if(is_array($item)){
					$out .= connect2val($item);
				}else{
					$out .= $item . ', ';
				}
			}
			$out = rtrim($out,', ');

		}else{ $out = $val; }//チェックボックス（配列）追記ここまで
		if(get_magic_quotes_gpc()) { $out = stripslashes($out); }
		$out = nl2br(h($out));//※追記 改行コードを<br>タグに変換
		$key = h($key);

		if($key == 'x' || $key == 'y') continue;

		//全角→半角変換
		if($hankaku == 1){
			$out = zenkaku2hankaku($key,$out,$hankaku_array);
		}

		$html .= "<tr><th>".$key."</th><td>".mb_convert_kana($out,"K", $encode);
		$html .= '<input type="hidden" name="'.$key.'" value="'.str_replace(array("<br />","<br>"),"",mb_convert_kana($out,"K", $encode)).'" />';
		$html .= "</td></tr>\n";

	}

	//添付ファイル表示処理
	if(isset($_FILES[$upfile_key]["tmp_name"])){
		$file_count = count($_FILES[$upfile_key]["tmp_name"]);
		$j = 1;
		for($i=0;$i<$file_count;$i++,$j++) {
			//添付があったらファイル名表示
			if(!empty($upFilePath[$i])){
			  $html .= "<tr><th>".$upfileTitle[$i]."</th><td>{$_FILES[$upfile_key]['name'][$i]}</td></tr>\n";
			}
		}
	}

	return $html;
}
//全角→半角変換
function zenkaku2hankaku($key,$out,$hankaku_array){
	global $encode;
	if(is_array($hankaku_array) && function_exists('mb_convert_kana')){
		foreach($hankaku_array as $hankaku_array_val){
			if($key == $hankaku_array_val){
				$out = mb_convert_kana($out,'a',$encode);
			}
		}
	}
	return $out;
}
//配列連結の処理
function connect2val($arr){
	$out = '';
	foreach($arr as $key => $val){
		if($key === 0 || $val == ''){//配列が未記入（0）、または内容が空のの場合には連結文字を付加しない（型まで調べる必要あり）
			$key = '';
		}elseif(strpos($key,"円") !== false && $val != '' && preg_match("/^[0-9]+$/",$val)){
			$val = number_format($val);//金額の場合には3桁ごとにカンマを追加
		}
		$out .= $val . $key;
	}
	return $out;
}
//管理者宛送信メールヘッダ Bcc→Cc改造
function adminHeader($userMail,$post_mail,$BccMail,$to){
	$header = '';

	//メールで日本語使用するための設定
	mb_language("Ja") ;
	mb_internal_encoding("utf-8");

	if($userMail == 1 && !empty($post_mail)) {
		$header="From: $post_mail\n";
		if($BccMail != '') {
		  $header.="Cc: $BccMail\n";
		}
		$header.="Reply-To: ".$post_mail."\n";
	}else {
		if($BccMail != '') {
		  $header="Cc: $BccMail\n";
		}
		$header.="Reply-To: ".$to."\n";
	}

	//----------------------------------------------------------------------
	//  添付ファイル処理(START)
	//----------------------------------------------------------------------
	if(isset($_POST['upfilePath'])){
		$header .= "MIME-Version: 1.0\n";
		$header .= "Content-Type: multipart/mixed; boundary=\"__PHPFACTORY__\"\n";
	}else{
		$header.="Content-Type:text/plain;charset=iso-2022-jp\nX-Mailer: PHP/".phpversion();
	}

	return $header;
}
//管理者宛送信メールボディ
function mailToAdmin($arr,$subject,$mailFooterDsp,$mailSignature,$encode,$confirmDsp){
	global $rename;
	$adminBody = '';
	//----------------------------------------------------------------------
	//  添付ファイル処理(START)
	//----------------------------------------------------------------------
	if(isset($_POST['upfilePath'])){
		$adminBody .= "--__PHPFACTORY__\n";
		$adminBody .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n";
		//$adminBody .= "\n";
	}
	//----------------------------------------------------------------------
	//  添付ファイル処理(END)
	//----------------------------------------------------------------------

	$adminBody .="「".$subject."」からメールが届きました\n\n";
	$adminBody .="＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝\n\n";
	$adminBody .= postToMail($arr);//POSTデータを関数からセット
	$adminBody .="\n＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝\n";
	$adminBody .="送信された日時：".date( "Y/m/d (D) H:i:s", time() )."\n";
	$adminBody .="送信者のIPアドレス：".@$_SERVER["REMOTE_ADDR"]."\n";
	$adminBody .="送信者のホスト名：".getHostByAddr(getenv('REMOTE_ADDR'))."\n";
	if($confirmDsp != 1){
		$adminBody.="問い合わせのページURL：".@h($_SERVER['HTTP_REFERER'])."\n";
	}else{
		$adminBody.="問い合わせのページURL：".@$arr['httpReferer']."\n";
	}
	if($mailFooterDsp == 1) $adminBody.= $mailSignature."\n";

//----------------------------------------------------------------------
//  添付ファイル処理(START)
//----------------------------------------------------------------------

if(isset($_POST['upfilePath'])){

	$default_internal_encode = mb_internal_encoding();
	if($default_internal_encode != $encode){
		mb_internal_encoding($encode);
	}

	$file_count = count($_POST['upfilePath']);

	for ($i=0;$i<$file_count;$i++) {

		if(isset($_POST['upfilePath'][$i])){

		$adminBody .= "--__PHPFACTORY__\n";
		$filePath = h(@$_POST['upfilePath'][$i]);//ファイルパスを指定
		$fileName = h(mb_encode_mimeheader(@$_POST['upfileOriginName'][$i]));
		$imgType = h(@$_POST['upfileType'][$i]);

		//ファイル名が文字化けする場合には連番ファイル名とする
		if($rename == 1){
			$fileNameArray = explode(".",$fileName);
			$fileName = $i.'.'.end($fileNameArray);
		}


		# 添付ファイルへの処理をします。
		$handle = @fopen($filePath, 'r');
		$attachFile = @fread($handle, filesize($filePath));
		@fclose($handle);
		$attachEncode = base64_encode($attachFile);

		$adminBody .= "Content-Type: {$imgType}; name=\"$filePath\"\n";
		$adminBody .= "Content-Transfer-Encoding: base64\n";
		$adminBody .= "Content-Disposition: attachment; filename=\"$fileName\"\n";
		$adminBody .= "\n";
		$adminBody .= chunk_split($attachEncode) . "\n";
		}
	}
		$adminBody .= "--__PHPFACTORY__--\n";
}
//----------------------------------------------------------------------
//  添付ファイル処理(END)
//----------------------------------------------------------------------

	//return mb_convert_encoding($adminBody,"JIS",$encode);
	return $adminBody;
}

//ユーザ宛送信メールヘッダ
function userHeader($refrom_name,$to,$encode){
	$reheader = "From: ";
	if(!empty($refrom_name)){
		$default_internal_encode = mb_internal_encoding();
		if($default_internal_encode != $encode){
			mb_internal_encoding($encode);
		}
		$reheader .= mb_encode_mimeheader($refrom_name)." <".$to.">\nReply-To: ".$to;
	}else{
		$reheader .= "$to\nReply-To: ".$to;
	}
	$reheader .= "\nContent-Type: text/plain;charset=iso-2022-jp\nX-Mailer: PHP/".phpversion();
	return $reheader;
}
//ユーザ宛送信メールボディ
function mailToUser($arr,$dsp_name,$remail_text,$mailFooterDsp,$mailSignature,$encode){
	$userBody = '';
	if(isset($arr[$dsp_name])) $userBody = h($arr[$dsp_name]). " 様\n";
	$userBody.= $remail_text;
	$userBody.="\n＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝\n\n";
	$userBody.= postToMail($arr);//POSTデータを関数からセット
	$userBody.="\n＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝\n\n";
	$userBody.="送信日時：".date( "Y/m/d (D) H:i:s", time() )."\n";
	$userBody.="\n※このメールに対するメールでのご返信・お問い合わせは、受け付けておりません。\n";
	$userBody.="\nご不明な点等がございましたら、お手数ですが、\n";
	$userBody.="\n以下「一般財団法人　共立国際交流奨学財団」にお問い合わせください。\n";
	$userBody.="\n＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝\n";
	$userBody.="\n一般財団法人　共立国際交流奨学財団\n";
	$userBody.="\n〒101-0021　東京都千代田区外神田 2-17-3　アヤベビル 4F\n";
	$userBody.="\nTEL：03-5295-0205　E-MAIL：kif-info@dormy.co.jp\n";
	$userBody.="\n公益企画課 研修会担当（沖縄：湯川）（北海道：鷲田）\n";
	$userBody.="\n＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝\n";
	if($mailFooterDsp == 1) $userBody.= $mailSignature;
	return mb_convert_encoding($userBody,"JIS",$encode);
}
//必須チェック関数
function requireCheck($require){
	$res['errm'] = '';
	$res['empty_flag'] = 0;
	foreach($require as $requireVal){
		$existsFalg = '';
		foreach($_POST as $key => $val) {
			if($key == $requireVal) {

				//連結指定の項目（配列）のための必須チェック
				if(is_array($val)){
					$connectEmpty = 0;
					foreach($val as $kk => $vv){
						if(is_array($vv)){
							foreach($vv as $kk02 => $vv02){
								if($vv02 == ''){
									$connectEmpty++;
								}
							}
						}

					}
					if($connectEmpty > 0){
						$res['errm'] .= "<p class=\"error_messe\">【".h($key)."】は必須項目です。</p>\n";
						$res['empty_flag'] = 1;
					}
				}
				//デフォルト必須チェック
				elseif($val == ''){
					$res['errm'] .= "<p class=\"error_messe\">【".h($key)."】は必須項目です。</p>\n";
					$res['empty_flag'] = 1;
				}

				$existsFalg = 1;
				break;
			}

		}
		if($existsFalg != 1){
				$res['errm'] .= "<p class=\"error_messe\">【".$requireVal."】が未選択です。</p>\n";
				$res['empty_flag'] = 1;
		}
	}

	return $res;
}
//リファラチェック
function refererCheck($Referer_check,$Referer_check_domain){
	if($Referer_check == 1 && !empty($Referer_check_domain)){
		if(strpos(h($_SERVER['HTTP_REFERER']),$Referer_check_domain) === false){
			return exit('<p align="center">リファラチェックエラー。フォームページのドメインとこのファイルのドメインが一致しません</p>');
		}
	}
}
function copyright(){
	echo '';
}
//ファイル添付用一時ファイルの削除
function deleteFile($dir,$tempFileDel){
	global $permission_file;

	if($tempFileDel == 1){
		if(isset($_POST['upfilePath'])){
			foreach($_POST['upfilePath'] as $key => $val){

				foreach($permission_file as $permission_file_val){
					if(strpos(strtolower($val),$permission_file_val) !== false && file_exists($val)){
						if(strpos($val,'htaccess') !== false) exit();
						unlink($val);
						break;
					}
				}

			}
		}

		//ゴミファイルの削除（1時間経過したもののみ）※確認画面→戻る→確認画面の場合、先の一時ファイルが残るため
		if(file_exists($dir) && !empty($dir)){
		$handle = opendir($dir);
		  while($temp_filename = readdir($handle)){
			if(strpos($temp_filename,'temp_file_') !== false ){
				if( strtotime(date("Y-m-d H:i:s",filemtime($dir."/".$temp_filename))) < strtotime(date("Y-m-d H:i:s",strtotime("-1 hour"))) ){
					@unlink("$dir/$temp_filename");
				}
			}
		  }
		}
	}
}
//php.iniのmail.add_x_headerのチェック
function iniGetAddMailXHeader($iniAddX){
	if($iniAddX == 1){
		if(@ini_get('mail.add_x_header') == 1) echo '<p style="color:red">php.iniの「mail.add_x_header」がONになっています。添付がうまくいかない可能性が高いです。htaccessファイルかphp.iniファイルで設定を変更してOFFに設定下さい。サーバーにより設定方法は異なります。詳しくはサーバーマニュアル等、またはサーバー会社にお問い合わせ下さい。正常に添付できていればOKです。このメーッセージはmail.php内のオプションで非表示可能です</p>';
	}
}

//トラバーサル対策
function traversalCheck($tmp_dir_name){
	if(isset($_POST['upfilePath']) && is_array($_POST['upfilePath'])){
		foreach($_POST['upfilePath'] as $val){
			if(strpos($val,$tmp_dir_name) === false || strpos($val,'temp_file_') === false) exit('Warning!! you are wrong..1');//ルール違反は強制終了
			if(substr_count($tmp_dir_name,'/') != substr_count($val,'/') ) exit('Warning!! you are wrong..2');//ルール違反は強制終了
			if(strpos($val,'htaccess') !== false) exit('Warning!! you are wrong..3');
			if(!file_exists($val)) exit('Warning!! you are wrong..4');
			if(strpos(str_replace($tmp_dir_name,'',$val),'..') !== false)  exit('Warning!! you are wrong..5');
		}
	}
}


//----------------------------------------------------------------------
//  関数定義(END)
//----------------------------------------------------------------------
?>