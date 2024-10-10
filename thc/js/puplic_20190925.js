// TAB GROUP

$("#js-forcus label").click(function() {
	$("#js-forcus").find("label").removeClass("is--active");
	$(this).addClass("is--active");
	var txt = $(".is--active").text();
	$("#js-title").text(txt);
});


$(document).ready(function () {

	function load__content(value) {

		var showData = $('#show-data');
		$.getJSON('js/data.json', function (data) {

		var  group = data.group_01;

		if (value=="group_01") group = data.group_01;
		if (value=="group_02") group = data.group_02;
		if (value=="group_03") group = data.group_03;
		if (value=="group_04") group = data.group_04;
		if (value=="group_05") group = data.group_05;
		if (value=="group_06") group = data.group_06;
		if (value=="group_07") group = data.group_07;
		if (value=="group_08") group = data.group_08;
		if (value=="group_09") group = data.group_09;

		var items = group.map(function (item) {
			return '<figure><img src="' + item.image + '" alt=""></figure>'
			 + '<ol><li class="typography--path">' + item.erea + '</li><li class="typography--path">' + item.path + '</li></ol>' 
			 + '<h3 class="typography__title--resort">' + item.title + '</h3>'
			 + '<div class="align__leftright"><p class="typography__describe--resort">' + item.describe + '</p>'
			 + '<div class="graphic__line--resort"><p class="layout--line typography--lineheight"><em>' + item.information + '</em><small>' + item.detail + '</small></p>'
			 + '<p class="layout--line"><strong class="typography__big--resort">' + item.price + '</strong></p></div>'
			 + '<p class="layout__button--art"><a href="' + item.link 	+ '&bcid=C06" target="_blank" class="graphic__button--art sp-btn2">' + item.btn + '</a></p></div>'
			 + '<p class="align--center"><a href="' + item.link2 + '" target="_blank" class="graphic__button--next">宿の詳細はコチラ</a></p>'
			 + '<div class="caption-des"><p>宿の詳細ページから本プランのご予約は致しかねます。<br>必ず上記「空室状況を表示する」よりご予約ください。</p></div>';
		});

		showData.empty();
		if (items.length) {
			var content = '<article class="layout__float graphic--resort"><div class="graphic__border--resort">' + items.join('</div></article><article class="layout__float graphic--resort"><div class="graphic__border--resort">') + '</div></article>';
			var list = $('<article class="layout--col2 clearfix" />').html(content);
			showData.append(list);	
		}
		});
		// showData.text('読み込んでいる・・・');
	};

	$(document).ready(function() {load__content("group_01"); });


	$('#js-group_01').click(function () {
		load__content("group_01");
	});
	$('#js-group_02').click(function () {
		load__content("group_02");
	});
	$('#js-group_03').click(function () {
		load__content("group_03");
	});
	$('#js-group_04').click(function () {
		load__content("group_04");
	});
	$('#js-group_05').click(function () {
		load__content("group_05");
	});
	$('#js-group_06').click(function () {
		load__content("group_06");
	});
	$('#js-group_07').click(function () {
		load__content("group_07");
	});
	$('#js-group_08').click(function () {
		load__content("group_08");
	});
	$('#js-group_09').click(function () {
		load__content("group_09");
	});

});


