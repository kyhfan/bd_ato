
$(function(){

	window.bato = {};

	var $win = $(window),
		$doc = $(document),
		$html = $('html'),
		$body = $('body');

	var locationArray = location.href.split('/');
	var currentLocation = locationArray[locationArray.length-1].split('.')[0];



	var agree1 	= "N";
	var agree2 	= "N";

	bato.popup = {
		bind : function(){
			$doc
				.on('click', '[data-popup]', function(e){
				var $this = $(this),
					$html = $('html'),
					val = $this.attr('data-popup');

				if (val.match('@close')){
					bato.popup.close($this.closest('.popup'));
				} else {
					bato.popup.show($(val));
				}

				if ($this.is('a')){
					e.preventDefault();
				}
			})
				.on('click', '[data-popup-close]', function(e){
				var $this = $(this),
					val = $this.attr('data-popup-close');

				bato.popup.close($(val));

				if ($this.is('a')){
					e.preventDefault();
				}
			});
		},
		show : function($popup){
			if ($popup.length){
				var $wrap = $popup.parent(),
					$html = $('html');


				if (!$wrap.hasClass('popup-wrap')){
					$popup.wrap('<div class="popup-wrap"></div>');
					$wrap = $popup.parent();
				}

				if (!$wrap.hasClass('is-opened')){
					$wrap
						.stop().fadeIn(10, function(){
						$popup.trigger('afterPopupOpened', $wrap);
					})
						.addClass('is-opened');
				}

				if (!$html.hasClass('popup-opened')){
					$html.addClass('popup-opened');
				}

				$popup.trigger('popupOpened', $wrap);
			}
		},
		close : function($popup){
			if ($popup.length){
				var $wrap = $popup.parent(),
					$html = $('html');

				$wrap.stop().fadeOut(10, function(){
					$wrap.removeClass('is-opened');

					if (!$('.popup-wrap.is-opened').length){
						$html.removeClass('popup-opened');
					}

					//					$popup.trigger('afterpopupClosed', $wrap);
				});

				$popup.trigger('popupClosed', $wrap);
			}
		}
	};
	bato.popup.bind();

	//	var tap = {
	//		bind: function() {
	//			$(document).on('mouseover', '[data-tap-target]', function() {
	//				tap.show($(this));
	//			});
	//		},
	//		show: function(target) {
	//			var targetIdx = target.data('tap-target');
	//			$("[data-tap-target]").each(function() {
	//				var imgSrcs = $(this).find('img').attr('src').replace('_on', '_off');
	//				$(this).find('img').attr('src', imgSrcs);
	//			});
	//			target.siblings().removeClass('is-active');
	//			$("[data-tap-content]").removeClass('is-active');
	//			
	//			
	//
	//			target.addClass('is-active');
	//			$("[data-tap-content='"+targetIdx+"']").addClass('is-active');
	//			target.find('img').attr('src', './images/tap_btn_'+targetIdx+'_on.png');
	//			
	//			switch (target.data('tapTarget')) {
	//				case 1:
	//					$('.tab._2').css({
	//						background: '#fdf6f7',
	//						background: 'rgba(255, 255, 255, 0.6)'
	//					});
	//					$('.tab._3').css({
	//						background: '#fbeff2',
	//						background: 'rgba(255, 255, 255, 0.3)'
	//					});
	//					break;
	//				case 2:
	//					$('.tab._1').css({
	//						background: '#fdf6f7',
	//						background: 'rgba(255, 255, 255, 0.6)'
	//					});
	//					$('.tab._3').css({
	//						background: '#fbeff2',
	//						background: 'rgba(255, 255, 255, 0.3)'
	//					});
	//					break;
	//				case 3:
	//					$('.tab._1').css({
	//						background: '#fbeff2',
	//						background: 'rgba(255, 255, 255, 0.3)'
	//					});
	//					$('.tab._2').css({
	//						background: '#fdf6f7',
	//						background: 'rgba(255, 255, 255, 0.6)'
	//					});
	//					break;
	//			}
	//			target.css('background-color', '#ffffff');
	//		}
	//	}
	//	tap.bind();

	//	var share = {
	//		bind: function() {
	//			Kakao.init('8bd4e13e1a2a0d80bbd60d994b744ce1');
	//
	//			$(document).on('click', '[data-share-target]', function() {
	//
	//				share.open($(this));
	//			});
	//		},
	//		open: function(target) {
	//			// 공유 로직 들어 가야 함
	//			// console.log(target.data("share-target"));
	//			if (target.data("share-target") == "fb")
	//			{
	//				var newWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent('http://routine.itsskin.com/index.php?media=fb'),'sharer','toolbar=0,status=0,width=600,height=325');
	//
	//				$.ajax({
	//					type   : "POST",
	//					async  : false,
	//					url    : "./main_exec.php",
	//					data:{
	//						"exec"          : "insert_share_info",
	//						"sns_media"     : target.data("share-target")
	//					}
	//				});
	//	
	//			} else if (target.data("share-target") == "ks") {
	//				Kakao.Story.share({
	//					url: 'http://routine.itsskin.com/index.php?media=ks'
	//				});
	//				$.ajax({
	//					type   : "POST",
	//					async  : false,
	//					url    : "./main_exec.php",
	//					data:{
	//						"exec" : "insert_share_info",
	//						"sns_media" : target.data("share-target")
	//					}
	//				});
	//	
	//			}else{
	//				var newWindow = window.open('http://blog.naver.com/LinkShare.nhn?url=http://routine.itsskin.com/index.php?media=blog','sharer','toolbar=0,status=0,width=600,height=325');
	//				$.ajax({
	//					type   : "POST",
	//					async  : false,
	//					url    : "./main_exec.php",
	//					data:{
	//						"exec" : "insert_share_info",
	//						"sns_media" : target.data("share-target")
	//					}
	//				});
	//			}
	//		}
	//	}
	//	share.bind();


	// $(".find-addr").on("click", function(){
	// 	new daum.Postcode({
	// 		oncomplete: function(data) {
	// 			// 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

	// 			// 도로명 주소의 노출 규칙에 따라 주소를 조합한다.
	// 			// 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
	// 			var fullRoadAddr = data.roadAddress; // 도로명 주소 변수
	// 			var extraRoadAddr = ''; // 도로명 조합형 주소 변수

	// 			// 법정동명이 있을 경우 추가한다. (법정리는 제외)
	// 			// 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
	// 			if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
	// 				extraRoadAddr += data.bname;
	// 			}
	// 			// 건물명이 있고, 공동주택일 경우 추가한다.
	// 			if(data.buildingName !== '' && data.apartment === 'Y'){
	// 				extraRoadAddr += (extraRoadAddr !== '' ? ', ' + data.buildingName : data.buildingName);
	// 			}
	// 			// 도로명, 지번 조합형 주소가 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
	// 			if(extraRoadAddr !== ''){
	// 				extraRoadAddr = ' (' + extraRoadAddr + ')';
	// 			}
	// 			// 도로명, 지번 주소의 유무에 따라 해당 조합형 주소를 추가한다.
	// 			if(fullRoadAddr !== ''){
	// 				fullRoadAddr += extraRoadAddr;
	// 			}

	// 			// 우편번호와 주소 정보를 해당 필드에 넣는다.
	// 			// document.getElementById('mb_zipcode').value = data.zonecode; //5자리 새우편번호 사용
	// 			document.getElementById('mb_addr1').value 	= "(" + data.zonecode + ") " + fullRoadAddr;
	// 		}
	// 	}).open();	
	// });

	$(".find-addr").on("click", function(){
		// sample2_execDaumPostcode();
		element_layer = document.getElementById('layer');

		new daum.Postcode({
			oncomplete: function(data) {
				// 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.
	
				// 각 주소의 노출 규칙에 따라 주소를 조합한다.
				// 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
				var fullAddr = data.address; // 최종 주소 변수
				var extraAddr = ''; // 조합형 주소 변수
	
				// 기본 주소가 도로명 타입일때 조합한다.
				if(data.addressType === 'R'){
					//법정동명이 있을 경우 추가한다.
					if(data.bname !== ''){
						extraAddr += data.bname;
					}
					// 건물명이 있을 경우 추가한다.
					if(data.buildingName !== ''){
						extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
					}
					// 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
					fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
				}
	
				zipcode	= data.zonecode;
				addr1		= fullAddr;
				// document.getElementById('mb_zipcode').value = data.zonecode; //5자리 새우편번호 사용
				// document.getElementById('mb_addr1').value = "("+zipcode+") "+addr1;
				// document.getElementById('mb_addr1').value = addr1;
				document.getElementById('mb_addr1').value 	= "(" + data.zonecode + ") " + addr1;
				// document.getElementById('mb_addr1').value 	= addr1;
	
				// iframe을 넣은 element를 안보이게 한다.
				// (autoClose:false 기능을 이용한다면, 아래 코드를 제거해야 화면에서 사라지지 않는다.)
				element_layer.style.display = 'none';
			},
			width : '100%',
			height : '100%'
		}).embed(element_layer);
	
		// iframe을 넣은 element를 보이게 한다.
		element_layer.style.display = 'block';
	
		// iframe을 넣은 element의 위치를 화면의 가운데로 이동시킨다.
		initLayerPosition();
	
	});

});

function closeDaumPostcode() {
	// iframe을 넣은 element를 안보이게 한다.
	element_layer.style.display = 'none';
}

function initLayerPosition(){
	// var width = 300; //우편번호서비스가 들어갈 element의 width
	var width = $(window).width()*0.94; //우편번호서비스가 들어갈 element의 width
	var height = 360; //우편번호서비스가 들어갈 element의 height
	var borderWidth = 5; //샘플에서 사용하는 border의 두께

	// 위에서 선언한 값들을 실제 element에 넣는다.
	element_layer.style.width = width + 'px';
	element_layer.style.height = height + 'px';
	element_layer.style.border = borderWidth + 'px solid';
	// 실행되는 순간의 화면 너비와 높이 값을 가져와서 중앙에 뜰 수 있도록 위치를 계산한다.
	element_layer.style.left = (((window.innerWidth || document.documentElement.clientWidth) - width)/2) + 'px';
	element_layer.style.top = (((window.innerHeight || document.documentElement.clientHeight) - height)/2 - borderWidth) + 60 + 'px';
}


function only_num(obj)
{
	var inText = obj.value;
	var outText = "";
	var flag = true;
	var ret;
	for(var i = 0; i < inText.length; i++)
	{
		ret = inText.charCodeAt(i);
		if((ret < 48) || (ret > 57))
		{
			flag = false;
		}
		else
		{
			outText += inText.charAt(i);
		}
	}

	if(flag == false)
	{
		alert("전화번호는 숫자입력만 가능합니다.");
		obj.value = outText;
		obj.focus();
		return false;
	}
	return true;
}

function chk_numlen(obj, len, num)
{
	if(obj.value.length >= len) {
		// alert("전화번호는 11자를 초과할 수 없습니다.");
		// obj.value = obj.value.slice(0, -(obj.value.length-4));

		if (num == 0)
			$(".blank7").blur();
		else
			$(".blank"+num).focus();
		return false;
	}
	return;
}
function chk_len(obj, len, num)
{
	if(obj.value.length >= len) {
		// alert("전화번호는 11자를 초과할 수 없습니다.");
		// obj.value = obj.value.slice(0, -(obj.value.length-4));

		if (num == 0)
			$("#mb_phone3").blur();
		else
			$("#mb_phone"+num).focus();
		return false;
	}
	return;
}

function chk_strlen(obj, maxByte, num) {
	var ls_str = obj.value;
	var li_str_len = ls_str.length; 
	var li_byte = 0;
	var li_len = 0;
	var ls_one_char = "";
	var ls_str2 = "";

	for ( var i=0; i< li_str_len; i++) {
		ls_one_char = ls_str.charAt(i);

		if (escape(ls_one_char).length > 4) {
			li_byte += 2;
		} else {
			li_byte++;
		}

		if(li_byte <= maxByte) {
			li_len = i + 1;
		}
	}
	if(li_byte > maxByte) {
		ls_str2 = ls_str.substr(0, li_len);
		obj.value = ls_str2;
		chk_strlen(obj, 4000);
	} else {
		if (ls_str == "촉")
			$(".blank"+num).focus();

		// var blank_txt = $(".blank1").val() + $(".blank2").val() + $(".blank3").val() + $(".blank4").val() + $(".blank5").val() + $(".blank6").val() + $(".blank7").val();
		// console.log(blank_txt);
		// if (blank_txt == "촉촉촉촉촉촉촉")
		// {
		// 	$(".quiz-btn").attr({
		// 		"onclick" : "",
		// 		"data-popup-target" : "#popup-input"
		// 	})
		// }
	}
}

function event1(depth){
	// console.log(depth);
	$.ajax({
		url : "http://vtag15.midas-i.com/vat-tag?cmp_no=3565&depth=" + depth,
		dataType : "jsonp",
		async : true, 
		timeout: 500,
		success: function(data) {
			// console.log("1111");
			// location.href=url;
		}, 
		error : function(e) {
			// console.log(e);
			// location.href=url;
		}
	});
	return false;
}

function openWinner() {
	// popup.open("#popup-winner");
	var $popup = $("#popup-winner"),
		$wrap = $popup.parent();

	if($popup.length) {
		if (!$('html').hasClass('popup-opened')){
			setTimeout(function() {
				$wrap.addClass('is-opened');
				$('html').addClass('popup-opened');
			},10);
		}
	}

}
