$(function(){
  
  //必須チェック
  
  
  //学生会館のお問い合わせフォーム
  $('#gakuseikaikan_submitbtn').click(function(){
                   
    var error = 0;
    var error2 = 0;
    var item_name;
    $('div.error').remove();

    
    
    item_name = 'お名前';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    
    item_name = 'フリガナ';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    item_name = '国籍';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    
    
    
    item_name = '学校名';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    item_name = '学年';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    item_name = '最寄り駅';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    item_name = 'キャンパス';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    
    if($('[name="問い合わせされた方[]"]:checked').length == 0){
      $('[name="問い合わせされた方[]"]').closest('td').append('<div class="error">問い合わせされた方を選択して下さい</div>');
      error++;
    }
    if($('[name="当財団の学生会館を知ったきっかけ[]"]:checked').length == 0){
      $('[name="当財団の学生会館を知ったきっかけ[]"]').closest('td').append('<div class="error">当財団の学生会館を知ったきっかけを選択して下さい</div>');
      error++;
    }
    if($('[name="ご希望の寮[]"]:checked').length == 0){
      $('[name="ご希望の寮[]"]').closest('td').append('<div class="error">ご希望の寮を選択して下さい</div>');
      error++;
    }
    
    item_name = 'ご希望の入館時期';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    item_name = '問い合わせ内容';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    item_name = 'E-mail1';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">E-mailを入力して下さい</div>');
      error++;
    }
    
    // item_name = 'Tel';
    // if($('[name="'+item_name+'"]').val() == ''){
    //   $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
    //   error++;
    // }


    if(error == 0 && $('#agree_check').prop('checked') != true){
      $('div#agree').append('<div class="error" style="background:none;">個人情報の取り扱いについて同意頂く必要があります</div>');
      alert('個人情報の取り扱いについて同意頂く必要があります');
      return false;
    }
    
    
    
    if(error > 0){
      $("html,body").animate({scrollTop:$('.error').closest("tr").offset().top});
      return false;
    }else{
      $('div.error').remove();
      return true;
    }
    
  });
  
  
  
  //アジア体験コンテストウェブ申込みフォーム(asia/)
  
  $('#asia_submitbtn').click(function(){
                   
    var error = 0;
    var error2 = 0;
    var item_name;
    $('div.error').remove();
    
    item_name = '氏名';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    
    // item_name = '氏名（漢字）';
    // if($('[name="'+item_name+'"]').val() == ''){
    //   $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
    //   error++;
    // }

    // item_name = '他に出来る言語';
    // if($('[name="'+item_name+'"]').val() == ''){
    //   $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
    //   error++;
    // }



    item_name = 'ニックネーム';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    item_name = '性別';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }
    
    if($('[name="生年月日[][年]"]').val() == '' || $('[name="生年月日[][月]"]').val() == '' || $('[name="生年月日[][日]"]').val() == ''){
      $('[name="生年月日[][年]"]').closest("td").append('<div class="error">生年月日を入力して下さい</div>');
      error++;
    }

    // var erra = document.getElementById('15a');
    // var errb = document.getElementById('15b');
    // var errc = document.getElementById('15c');
    // var errd = document.getElementById('15d');
    // var erre = document.getElementById('15e');
    // if( erra.value == "" || errb.value == "" || errc.value == "" || errd.value == "" || erre.value == "" ){
    //   $('[name="体験したい活動はどれですか[][　]"]').closest("td").append('<div class="error">nhập vào</div>');
    //   error++;
    // }



    if($('[name="郵便番号[][-]"]').val() == '' || $('[name="郵便番号[][]"]').val() == ''){
      $('[name="郵便番号[][-]"]').closest("td").append('<div class="error">郵便番号を入力して下さい</div>');
      error++;
    }
    item_name = 'ご住所';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    item_name = '携帯番号';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    // item_name = '郵便番号';
    // if($('[name="'+item_name+'"]').val() == ''){
    //   $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
    //   error++;
    // }


    // item_name = 'Tel';
    // if($('[name="'+item_name+'"]').val() == ''){
    //   $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
    //   error++;
    // }


    item_name = 'E-mail';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    item_name = '学校名';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    item_name = '研究科・専攻/学部学科';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    item_name = '学年[][年]';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">学年を入力して下さい</div>');
      error++;
    }
      
    item_name = '年齢[][歳]';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">年齢を入力して下さい</div>');
      error++;
    }
      
      
    item_name = '企画のタイトル';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    
    
    if($('[name="今回選んだ体験[]"]:checked').length == 0){
      $('[name="今回選んだ体験[]"]').closest('td').append('<div class="error">今回選んだ企画テーマを選択して下さい</div>');
      error++;
    }
    if($('[name="今回応募した企画を実施する国[]"]:checked').length == 0){
      $('[name="今回応募した企画を実施する国[]"]').closest('td').append('<div class="error">今回応募した企画を実施する国を選択して下さい</div>');
      error++;
    }
//    if($('#kikaku_term01').val() == '' || $('#kikaku_term02').val() == '' || $('#kikaku_term03').val() == '' || $('#kikaku_term04').val() == '' || $('#kikaku_term05').val() == '' || $('#kikaku_term06').val() == ''){
//      $('#kikaku_term01').closest("td").append('<div class="error">企画実施予定期間を入力して下さい</div>');
//      error++;
//    }
    if($('[name="何をご覧になってご応募いただきましたか[]"]:checked').length == 0){
      $('[name="何をご覧になってご応募いただきましたか[]"]').closest('td').append('<div class="error">何をご覧になってご応募いただいたかを選択して下さい</div>');
      error++;
    }
    
    
    if($('#upfile01').val() == ''){
      $('#upfile01').closest("td").append('<div class="error">企画書を添付して下さい</div>');
      error++;
    }
    if($('#upfile02').val() == ''){
      $('#upfile02').closest("td").append('<div class="error">学生証を添付して下さい</div>');
      error++;
    }
    if($('#upfile03').val() == ''){
      $('#upfile03').closest("td").append('<div class="error">顔写真を添付して下さい</div>');
      error++;
    }
    
    if(error == 0 && $('#agree_check').prop('checked') != true){
      $('div#agree').append('<div class="error" style="background:none;">個人情報の取り扱いについて同意頂く必要があります</div>');
      alert('個人情報の取り扱いについて同意頂く必要があります');
      return false;
    }
    
    if(error > 0){
      $("html,body").animate({scrollTop:$('.error').closest("tr").offset().top});
      return false;
    }else{
      $('div.error').remove();
      return true;
    }
    
  });
  
  //ホームステイ研修会予約フォーム(homestay/)
  $('#homestay_submitbtn').click(function(){
                   
    var error = 0;
    var error2 = 0;
    var item_name;
    $('div.error').remove();
    
    item_name = '氏名（ローマ字）';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    
    item_name = '氏名（フリガナ）';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }

    // item_name = '氏名（漢字）';
    // if($('[name="'+item_name+'"]').val() == ''){
    //   $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
    //   error++;
    // }

    item_name = '氏名（カタカナ）';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }

    item_name = 'ニックネーム';
     if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    item_name = '性別';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }
    item_name = '配偶者';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }
    item_name = '携帯メール';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }

    item_name = 'メールアドレス';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }

    item_name = '国籍';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }


    if($('[name="生年月日[][年]"]').val() == '' || $('[name="生年月日[][月]"]').val() == '' || $('[name="生年月日[][日]"]').val() == ''){
      $('[name="生年月日[][年]"]').closest("td").append('<div class="error">生年月日を入力して下さい</div>');
      error++;
    }

  
  

    
    item_name = '学校名';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    item_name = '学部・クラス';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    item_name = '学年[][年]';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">学年を入力して下さい</div>');
      error++;
    }
    item_name = '年齢[][歳]';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">年齢を入力して下さい</div>');
      error++;
    }
      
    if($('[name="郵便番号[][-]"]').val() == '' || $('[name="郵便番号[][]"]').val() == ''){
      $('[name="郵便番号[][-]"]').closest("td").append('<div class="error">郵便番号を入力して下さい</div>');
      error++;
    }
    item_name = 'ご住所';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    item_name = '携帯番号';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    item_name = '携帯番号';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    item_name = 'E-mail';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    // item_name = 'Tel';
    // if($('[name="'+item_name+'"]').val() == ''){
    //   $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
    //   error++;
    // }
    if($('[name="今回の研修会についてどのように知りましたか[]"]:checked').length == 0){
      $('[name="今回の研修会についてどのように知りましたか[]"]').closest('td').append('<div class="error">選択して下さい</div>');
      error++;
    }
    if($('[name="日本滞在期間[0][年]"]').val() == '' || $('[name="日本滞在期間[1][月～]"]').val() == '' || $('[name="日本滞在期間[2][年]"]').val() == '' || $('[name="日本滞在期間[3][月]"]').val() == ''){
      $('[name="日本滞在期間[0][年]"]').closest("td").append('<div class="error">日本滞在期間を入力して下さい</div>');
      error++;
    }
    
   
    item_name = '接種した回数は[1]';

    if($('[name="新型コロナウイルスのワクチンは接種しましたか"]:checked').val() == "はい"){
      if($('[name="'+item_name+'"]:checked').length == 0){
        $('[name="'+item_name+'"]').closest('td').append('<div class="error error-up1">接種した回数はを選択して下さい。</div>');
        error++;
      }
    }
    item_name = '接種した回数は[2]';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error error-up2">接種回数に間違いはありませんか。</div>');
      error++;
    }

    item_name = 'なぜこの研修会に参加したいと思ったのですか';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'</div>');
      error++;
    }

    item_name = '宿泊先のオーナーご夫婦にメッセージを書いてください';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'</div>');
      error++;
    }


    item_name = '日本語能力試験';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }
    
    item_name = '日本に留学に来た理由';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    item_name = '専門分野';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    item_name = '将来なりたい職業';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }

    // item_name = '他に出来る言語';
    // if($('[name="'+item_name+'"]').val() == ''){
    //   $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
    //   error++;
    // }

    item_name = 'ホームステイをした経験';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }
    item_name = 'ホームステイ先';
    if($('[name="ホームステイをした経験"]:checked').val() == "ある"){
      if($('[name="'+item_name+'"]').val() == ''){
        $('[name="'+item_name+'"]').closest('td').append('<div class="error">ホームステイ先をご記入ください。</div>');
        error++;
      }
    }

    item_name = 'あなたの趣味';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    
    item_name = '話すこと';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }
    item_name = '聞くこと';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }
    item_name = '読むこと';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }
    item_name = '書くこと';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }
    
    item_name = '母国語';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    
    item_name = '宗教を持っていますか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }

    item_name = '宗教名';
    if($('[name="宗教を持っていますか"]:checked').val() == "はい"){
      if($('[name="'+item_name+'"]').val() == ''){
        $('[name="'+item_name+'"]').closest('td').append('<div class="error">宗教名</div>');
        error++;
      }
    }


    item_name = '宗教上の理由、その他の理由で食べられないものがありますか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }

    item_name = '食べられないもの';
    if($('[name="宗教上の理由、その他の理由で食べられないものがありますか"]:checked').val() == "はい"){
      if($('[name="'+item_name+'"]').val() == ''){
        $('[name="'+item_name+'"]').closest('td').append('<div class="error">具体的に詳しく書いて下さい</div>');
        error++;
      }
    }


    item_name = '新型コロナウイルスのワクチンは接種しましたか';
   if($('[name="'+item_name+'"]:checked').val() == "いいえ"){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">新型コロナウイルスのワクチンを接種しましたか。<br>本研修会は、新型コロナウイルス感染症ワクチンを2回以上接種済みの方のみ、<br>お申し込みが可能です。</div>');
      error++;
    }else {
      if($('[name="'+item_name+'"]:checked').length == 0){
        $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
        error++;
      }
    }


    item_name = '北海道に行ったことはありますか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }

    item_name = 'お酒を飲みますか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }
    item_name = 'タバコをすいますか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }


    /*  Q16-Q19 */
    item_name = '靴のサイズは何cmですか';
      if($('[name="'+item_name+'"]').val() == ''){
       $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
       error++;
    }
    item_name = '身長は何cmですか';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }


  var errsize18 = document.getElementById('errsize18');
  item_name = 'アウターのサイズは何ですか[]';

  if(errsize18 != null){
    if(errsize18.value == '') {
       if( $('[name="'+item_name+'"]:checked').length == 0){
          $('[name="'+item_name+'"]').closest('td').append('<div class="error">アウターのサイズは何ですかを選択して下さい</div>');
          error++;
        }
    }
  }
    
  var errsize19 = document.getElementById('errsize18');
  item_name = 'ズボンのサイズは何ですか[]';
  if(errsize19 != null){
    if(errsize19.value == '') {
       if( $('[name="'+item_name+'"]:checked').length == 0){
          $('[name="'+item_name+'"]').closest('td').append('<div class="error">ズボンのサイズは何ですかを選択して下さい</div>');
          error++;
        }
    }
  }


  

    if($('[name="体験してみたい文化・生活体験（沖縄料理体験）"]').val() == '' || $('[name="体験してみたい文化・生活体験（三線体験）"]').val() == '' || $('[name="体験してみたい文化・生活体験（クラフト体験）"]').val() == ''){
      $('[name="体験してみたい文化・生活体験（沖縄料理体験）"]').closest("td").append('<div class="error">体験してみたい文化・生活体験の体験してみたい順を入力して下さい</div>');
      error++;
    }

    item_name = 'ホームステイ先やホテルで同居人がタバコをすうことを気にしますか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }

    item_name = 'ホストファミリーが喫煙することを気にしますか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }



    item_name = 'ホームステイ先やホテルにて、喫煙者と同室になることを気にしますか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }

    item_name = '健康面に何か問題がありますか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }

    item_name = '健康面の問題';
    if($('[name="健康面に何か問題がありますか"]:checked').val() == "はい"){
      if($('[name="'+item_name+'"]').val() == ''){
        $('[name="'+item_name+'"]').closest('td').append('<div class="error">具体的に詳しく書いて下さい</div>');
        error++;
      }
    }


    var erra = document.getElementById('15a');
    var errb = document.getElementById('15b');
    var errc = document.getElementById('15c');
    var errd = document.getElementById('15d');
    var erre = document.getElementById('15e');

    if(erra != null){
      if( erra.value == "" || errb.value == "" || errc.value == "" || errd.value == "" || erre.value == "" ){
        $('[name="体験したい活動はどれですか[][　]"]').closest("td").append('<div class="error">ホストファミリーの家で体験したい活動はどれですかを入力して下さい</div>');
        error++;
      }
    }
    item_name = '家庭に小さい子供がいても大丈夫ですか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }

    item_name = 'ホームステイ先に小さい子供がいても大丈夫ですか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }

    item_name = 'ホストファミリーについて何か希望することや聞きたいことはありますか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }

    item_name = 'ホストファミリーにメッセージを書いてください';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }

    item_name = 'ホームステイ先にペット（犬・猫など）がいても大丈夫ですか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }

    

    item_name = 'いいえの場合、何歳以上なら大丈夫ですか';
    if($('[name="ホームステイ先に小さい子供がいても大丈夫ですか"]:checked').val() == "いいえ"){
      if($('[name="'+item_name+'"]').val() == ''){
        $('[name="'+item_name+'"]').closest('td').append('<div class="error">何歳以上なら大丈夫ですか。ご入力して下さい。</div>');
        error++;
      }
    }

    item_name = 'ホストファミリーの家にペット（犬・ねこ等）がいても大丈夫ですか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }

    item_name = 'ホストファミリーの家にペット';
    if($('[name="ホストファミリーの家にペット（犬・ねこ等）がいても大丈夫ですか"]:checked').val() == "いいえ"){
      if($('[name="'+item_name+'"]').val() == ''){
        $('[name="'+item_name+'"]').closest('td').append('<div class="error">それは何ですか</div>');
        error++;
      }
    }

    item_name = '何かアレルギーを持っていますか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }

    if($('[name="何かアレルギーを持っていますか"]:checked').val() == "はい"){
      if(($('[name="どんなアレルギーですか[1]"]').val() == '') && ($('[name="どんなアレルギーですか[2]"]').val() == '') && ($('[name="どんなアレルギーですか[3]"]').val() == '')){
        $('[name="どんなアレルギーですか[3]"]').closest('td').append('<div class="error error-up1">何のアレルギーですか？具体的に詳しく書いて下さい</div>');
        error++;
      }
    }




    item_name = 'ホストファミリーについて何か希望はありますか';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }

    item_name = 'ホストファミリーについて何か希望することや聞きたいこと';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }

    item_name = 'ホストファミリーに何か聞きたいこと';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }

    // item_name = 'その他、気になる点がある場合';
    // if($('[name="'+item_name+'"]').val() == ''){
    //   $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
    //   error++;
    // }

    item_name = 'ホストファミリーに聞きたいことや、メッセージ';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }

    // item_name = 'ホストファミリーについて何か希望することや聞きたいことはありますか';
    // if($('[name="'+item_name+'"]').val() == ''){
    //   $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'</div>');
    //   error++;
    // }

    

    item_name = 'ホストファミリーと一緒に標津町でやりたいこと';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }

    item_name = 'あなたがこの研修会で一番楽しみにしていること';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }

    if($('#upfile01').val() == ''){
      $('#upfile01').closest("td").append('<div class="error">在留カード、学生証のコピー（表面）を添付して下さい</div>');
      error++;
    }
    if($('#upfile02').val() == ''){
      $('#upfile02').closest("td").append('<div class="error">在留カード、学生証のコピー（裏面）を添付して下さい</div>');
      error++;
    }
    if($('#upfile03').val() == ''){
      $('#upfile03').closest("td").append('<div class="error">顔写真を添付して下さい</div>');
      error++;
    } 
    
    if($('#agree_check').prop('checked') != true){
      $('#agree_check').closest("div.agree").append('<div class="error" style="background:none;">個人情報の取り扱いについて同意頂く必要があります</div>');
      
      $("html,body").animate({scrollTop:$('.error').offset().top});
      //alert('個人情報の取り扱いについて同意頂く必要があります');
      error2++;
    }
    if($('#agree_check2').prop('checked') != true){
      $('#agree_check2').closest("div.agree").append('<div class="error" style="background:none;">お申し込み条件・注意事項について同意頂く必要があります</div>');
      $("html,body").animate({scrollTop:$('.error').offset().top});
      //alert('お申し込み条件・注意事項について同意頂く必要があります');
      error2++;
    }

    if(error2 > 0){
      return false;
    }

    if(error > 0){
      $("html,body").animate({scrollTop:$('.error').closest("tr").offset().top});
      return false;
    }else{
      $('div.error').remove();
      return true;
    }
    
  });
  
  
  //ホームステイ研修会予約フォーム(homestay2/)
  $('#homestay_kushiro_submitbtn').click(function(){
                   
    var error = 0;
    var error2 = 0;
    var item_name;
    $('div.error').remove();
    
    item_name = '氏名（ローマ字）';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
   
    item_name = '氏名（フリガナ）';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }

    // item_name = '氏名（漢字）';
    // if($('[name="'+item_name+'"]').val() == ''){
    //   $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
    //   error++;
    // }

    item_name = '氏名（カタカナ）';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    item_name = 'ニックネーム';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    item_name = '性別';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }
    item_name = '配偶者';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }
   

      
    item_name = '携帯メール';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }
    item_name = 'メールアドレス';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }

    item_name = '国籍';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }


    if($('[name="生年月日[][年]"]').val() == '' || $('[name="生年月日[][月]"]').val() == '' || $('[name="生年月日[][日]"]').val() == ''){
      $('[name="生年月日[][年]"]').closest("td").append('<div class="error">生年月日を入力して下さい</div>');
      error++;
    }
    
   
    item_name = '学校名';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    item_name = '学部・クラス';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    item_name = '学年[][年]';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">学年を入力して下さい</div>');
      error++;
    }
      
      
    item_name = '年齢[][歳]';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">年齢を入力して下さい</div>');
      error++;
    }
      
      
      
    if($('[name="郵便番号[][-]"]').val() == '' || $('[name="郵便番号[][]"]').val() == ''){
      $('[name="郵便番号[][-]"]').closest("td").append('<div class="error">郵便番号を入力して下さい</div>');
      error++;
    }
    item_name = 'ご住所';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    item_name = '携帯番号';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    //  item_name = '郵便番号';
    // if($('[name="'+item_name+'"]').val() == ''){
    //   $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
    //   error++;
    // }
    item_name = 'E-mail1';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">E-mailを入力して下さい</div>');
      error++;
    }
    // item_name = 'Tel';
    // if($('[name="'+item_name+'"]').val() == ''){
    //   $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
    //   error++;
    // }
    
    if($('[name="今回の研修会についてどのように知りましたか[]"]:checked').length == 0){
      $('[name="今回の研修会についてどのように知りましたか[]"]').closest('td').append('<div class="error">選択して下さい</div>');
      error++;
    }
    if($('[name="日本滞在期間[0][年]"]').val() == '' || $('[name="日本滞在期間[1][月～]"]').val() == '' || $('[name="日本滞在期間[2][年]"]').val() == '' || $('[name="日本滞在期間[3][月]"]').val() == ''){
      $('[name="日本滞在期間[0][年]"]').closest("td").append('<div class="error">日本滞在期間を入力して下さい</div>');
      error++;
    }
    
    
    
    item_name = '日本に留学に来た理由';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }

    item_name = '専門分野';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }

    item_name = 'ホームステイをした経験';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }
    item_name = 'ホームステイ先';
    if($('[name="ホームステイをした経験"]:checked').val() == "ある"){
      if($('[name="'+item_name+'"]').val() == ''){
        $('[name="'+item_name+'"]').closest('td').append('<div class="error">ホームステイ先をご記入ください。</div>');
        error++;
      }
    }

    item_name = 'あなたの趣味';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    item_name = '将来なりたい職業';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }

    // item_name = '他に出来る言語';
    // if($('[name="'+item_name+'"]').val() == ''){
    //   $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
    //   error++;
    // }

    item_name = '接種した回数は[1]';
    
    if($('[name="新型コロナウイルスのワクチンは接種しましたか"]:checked').val() == "はい"){
      if($('[name="'+item_name+'"]:checked').length == 0){
        $('[name="'+item_name+'"]').closest('td').append('<div class="error error-up1">接種した回数はを選択して下さい。</div>');
        error++;
      }
    }

    item_name = '接種した回数は[2]';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error error-up2">接種回数に間違いはありませんか。</div>');
      error++;
    }

    item_name = 'なぜこの研修会に参加したいと思ったのですか';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'</div>');
      error++;
    }

    item_name = '宿泊先のオーナーご夫婦にメッセージを書いてください';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'</div>');
      error++;
    }
 

    item_name = '日本語能力試験';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }

    item_name = '話すこと';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }
    item_name = '聞くこと';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }
    item_name = '読むこと';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }
    item_name = '書くこと';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }
    
    item_name = '母国語';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    
    item_name = '宗教を持っていますか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }
    item_name = '宗教名';
    if($('[name="宗教を持っていますか"]:checked').val() == "はい"){
      if($('[name="'+item_name+'"]').val() == ''){
        $('[name="'+item_name+'"]').closest('td').append('<div class="error">宗教名をご記入ください</div>');
        error++;
      }
    }




    item_name = '宗教上の理由、その他の理由で食べられないものがありますか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }
    item_name = '食べられないもの';
    if($('[name="宗教上の理由、その他の理由で食べられないものがありますか"]:checked').val() == "はい"){
      if($('[name="'+item_name+'"]').val() == ''){
        $('[name="'+item_name+'"]').closest('td').append('<div class="error">具体的に詳しく書いて下さい</div>');
        error++;
      }
    }


    item_name = '新型コロナウイルスのワクチンは接種しましたか';
    if($('[name="'+item_name+'"]:checked').val() == "いいえ"){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">新型コロナウイルスのワクチンを接種しましたか。<br>本研修会は、新型コロナウイルス感染症ワクチンを2回以上接種済みの方のみ、<br>お申し込みが可能です。</div>');
      error++;
    }else {
      if($('[name="'+item_name+'"]:checked').length == 0){
        $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
        error++;
      }
    }


    item_name = '北海道に行ったことはありますか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }

    item_name = 'お酒を飲みますか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }
    item_name = 'タバコをすいますか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }

    /* q16 - 19 */
    item_name = '靴のサイズは何cmですか';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    item_name = '身長は何cmですか';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }



   
    item_name = 'アウターのサイズは何ですか[]';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">アウターのサイズは何ですかを選択して下さい</div>');
      error++;
    }



    item_name = 'ズボンのサイズは何ですか[]';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">ズボンのサイズは何ですかを選択して下さい</div>');
      error++;
    }
    


    
    // if($('[name="体験したい農作業（パイナップル農家族）"]').val() == '' || $('[name="体験したい農作業（マンゴー農家族）"]').val() == '' || $('[name="体験したい農作業（シークヮーサー農家族）"]').val() == ''){
    //   $('[name="体験したい農作業（パイナップル農家族）"]').closest("td").append('<div class="error">体験したい農作業の体験してみたい順を入力して下さい</div>');
    //   error++;
    // }
    if($('[name="体験してみたい文化・生活体験（沖縄料理体験）"]').val() == '' || $('[name="体験してみたい文化・生活体験（三線体験）"]').val() == '' || $('[name="体験してみたい文化・生活体験（クラフト体験）"]').val() == ''){
      $('[name="体験してみたい文化・生活体験（沖縄料理体験）"]').closest("td").append('<div class="error">体験してみたい文化・生活体験の体験してみたい順を入力して下さい</div>');
      error++;
    }
    
    item_name = 'ホームステイ先やホテルで同居人がタバコをすうことを気にしますか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }
    
    item_name = 'ホストファミリーが喫煙することを気にしますか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }

    item_name = 'ホームステイ先やホテルにて、喫煙者と同室になることを気にしますか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }
    item_name = '健康面に何か問題がありますか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }
     item_name = '健康面の問題';
    if($('[name="健康面に何か問題がありますか"]:checked').val() == "はい"){
      if($('[name="'+item_name+'"]').val() == ''){
        $('[name="'+item_name+'"]').closest('td').append('<div class="error">具体的に詳しく書いて下さい</div>');
        error++;
      }
    }

    item_name = '家庭に小さい子供がいても大丈夫ですか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }

    item_name = 'ホームステイ先に小さい子供がいても大丈夫ですか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }

    item_name = 'ホストファミリーについて何か希望することや聞きたいことはありますか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }

    item_name = 'ホストファミリーにメッセージを書いてください';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }

    item_name = 'ホームステイ先にペット（犬・猫など）がいても大丈夫ですか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }

    item_name = 'いいえの場合、何歳以上なら大丈夫ですか';
    if($('[name="ホームステイ先に小さい子供がいても大丈夫ですか"]:checked').val() == "いいえ"){
      if($('[name="'+item_name+'"]').val() == ''){
        $('[name="'+item_name+'"]').closest('td').append('<div class="error">何歳以上なら大丈夫ですか。ご入力して下さい。</div>');
        error++;
      }
    }

    item_name = 'ホストファミリーの家にペット（犬・ねこ等）がいても大丈夫ですか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }
    item_name = 'ホストファミリーの家にペット';
    if($('[name="ホストファミリーの家にペット（犬・ねこ等）がいても大丈夫ですか"]:checked').val() == "いいえ"){
      if($('[name="'+item_name+'"]').val() == ''){
        $('[name="'+item_name+'"]').closest('td').append('<div class="error">それは何ですか</div>');
        error++;
      }
    }

    item_name = '何かアレルギーを持っていますか';
    if($('[name="'+item_name+'"]:checked').length == 0){
      $('[name="'+item_name+'"]').closest('td').append('<div class="error">'+item_name+'を選択して下さい</div>');
      error++;
    }


    if($('[name="何かアレルギーを持っていますか"]:checked').val() == "はい"){
      if( ($('[name="どんなアレルギーですか[1]"]').val() == '') && ($('[name="どんなアレルギーですか[2]"]').val() == '') && ($('[name="どんなアレルギーですか[3]"]').val() == '') ){
        $('[name="どんなアレルギーですか[3]"]').closest('td').append('<div class="error error-up1">何のアレルギーですか？具体的に詳しく書いて下さい</div>');
        error++;
      }
    }

    item_name = 'ホストファミリーについて何か希望はありますか';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }

    item_name = 'ホストファミリーについて何か希望することや聞きたいこと';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }

    item_name = 'ホストファミリーに何か聞きたいこと';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }

    // item_name = 'その他、気になる点がある場合';
    // if($('[name="'+item_name+'"]').val() == ''){
    //   $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
    //   error++;
    // }

    item_name = 'ホストファミリーに聞きたいことや、メッセージ';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }

    // item_name = 'ホストファミリーについて何か希望することや聞きたいことはありますか';
    // if($('[name="'+item_name+'"]').val() == ''){
    //   $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'</div>');
    //   error++;
    // }

    
    
    item_name = 'ホストファミリーと一緒に標津町でやりたいこと';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }
    
    item_name = 'あなたがこの研修会で一番楽しみにしていること';
    if($('[name="'+item_name+'"]').val() == ''){
      $('[name="'+item_name+'"]').closest("td").append('<div class="error">'+item_name+'を入力して下さい</div>');
      error++;
    }

    if($('#upfile01').val() == ''){
      $('#upfile01').closest("td").append('<div class="error">在留カード、学生証のコピー（表面）を添付して下さい</div>');
      error++;
    }
    if($('#upfile02').val() == ''){
      $('#upfile02').closest("td").append('<div class="error">在留カード、学生証のコピー（裏面）を添付して下さい</div>');
      error++;
    }
    if($('#upfile03').val() == ''){
      $('#upfile03').closest("td").append('<div class="error">顔写真を添付して下さい</div>');
      error++;
    }
     
    if($('#agree_check').prop('checked') != true){
      $('#agree_check').closest("div.agree").append('<div class="error" style="background:none;">個人情報の取り扱いについて同意頂く必要があります</div>');
     
      $("html,body").animate({scrollTop:$('.error').offset().top});
       //alert('個人情報の取り扱いについて同意頂く必要があります');
      error2++;
    }
    if($('#agree_check2').prop('checked') != true){
      $('#agree_check2').closest("div.agree").append('<div class="error" style="background:none;">お申し込み条件・注意事項について同意頂く必要があります</div>');
     
      $("html,body").animate({scrollTop:$('.error').offset().top});
      //alert('お申し込み条件・注意事項について同意頂く必要があります');
      error2++;
       
    }

    if(error2 > 0){
      return false;
    }

    if(error > 0){
      $("html,body").animate({scrollTop:$('.error').closest("tr").offset().top});
      return false;
    }else{
      $('div.error').remove();
      return true;
    }
    
  });
  
  
  
  
  
  
  
  
});

//メールアドレス形式チェック（全フォーム共通）
$(function(){
  $("#mainForm").validate({
    rules: {
      "E-mail" :{
        email: true
      }
    },
    messages: {
      "E-mail" :{
        email: '正しいメールアドレスを入力してください'
      }
    }   
  });
});

