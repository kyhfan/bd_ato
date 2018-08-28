<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="./css/reset.css">
		<link rel="stylesheet" href="./css/style.css">
		<script src="./js/snap.svg-min.js"></script>
		<script src="./js/jquery-3.3.1.min.js"></script>
		<script src="./js/jquery-ui.min.js"></script>
		<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
		<script src="./js/main.js"></script>
	</head>
	<body>
		<div id="container">
			<div class="content sub game body-selected">
<?
	include_once "header.php";
?>
				<div class="wrapper">
					<div class="balls"></div>
					<div class="svg-wrapper pink">
						<svg 
							 xmlns="http://www.w3.org/2000/svg"
							 xmlns:xlink="http://www.w3.org/1999/xlink"
							 width="2166.8px" height="1004.8px" id="svg-line-pink" class="svg-line" preserveAspectRatio="none">
							<path fill-rule="evenodd"  stroke="rgb(201, 62, 139)" stroke-width="1.2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none"
								  d="M0.600,750.600 C0.600,750.600 66.530,800.747 149.600,616.600 C232.670,432.452 262.264,274.469 425.600,302.600 C588.936,330.731 652.941,556.025 729.600,665.600 C819.631,794.290 983.456,854.587 1126.600,753.600 C1259.350,659.946 1359.053,516.624 1418.600,330.600 C1478.147,144.576 1531.098,-40.179 1728.600,8.600 C1890.069,48.479 1925.967,153.386 2165.600,187.600 L2164.600,1003.600 L101.600,1003.600 L0.600,750.600 Z"/>
						</svg>
						<!--
<svg 
xmlns="http://www.w3.org/2000/svg"
xmlns:xlink="http://www.w3.org/1999/xlink"
id="svg-line-pink" class="svg-line" viewbox="150 180 2166 1004" preserveAspectRatio="none">
<path fill-rule="evenodd"  stroke="rgb(201, 62, 139)" stroke-width="1.2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none"
d="M0.600,750.600 C0.600,750.600 66.530,800.747 149.600,616.600 C232.670,432.452 262.264,274.469 425.600,302.600 C588.936,330.731 652.941,556.025 729.600,665.600 C819.631,794.290 983.456,854.587 1126.600,753.600 C1259.350,659.946 1359.053,516.624 1418.600,330.600 C1478.147,144.576 1531.098,-40.179 1728.600,8.600 C1890.069,48.479 1925.967,153.386 2165.600,187.600 L2164.600,1003.600 L101.600,1003.600 L0.600,750.600 Z"/>
</svg>
-->
					</div>
					<div class="svg-wrapper blue">
						<svg 
							 xmlns="http://www.w3.org/2000/svg"
							 xmlns:xlink="http://www.w3.org/1999/xlink"
							 width="2069.8px" height="1017.8px" id="svg-line-blue" class="svg-line">
							<path fill-rule="evenodd"  stroke="rgb(23, 106, 193)" stroke-width="1.2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none"
								  d="M0.600,680.600 C0.600,680.600 82.155,757.290 171.600,649.600 C261.045,541.910 280.444,259.368 420.600,256.600 C560.756,253.832 566.897,515.139 630.600,677.600 C686.709,820.696 856.548,870.751 1031.600,804.600 C1176.747,749.750 1434.281,627.135 1475.783,381.813 C1497.025,256.250 1497.677,2.360 1674.600,0.600 C1859.533,-1.239 1914.162,397.679 2058.600,398.600 L2068.600,1016.600 L8.600,1016.600 L0.600,680.600 Z"/>
						</svg>
					</div>
					<div class="visual-wrap">
						<div class="title-group">
							<div class="object">
								<img src="./images/game_obj_clock.png" alt="">
							</div>
							<div class="text">
								제한시간 동안 <b>아토덤으로 피부PT</b> 받으세요
							</div>
						</div>
						<div class="game-container">
							<div class="pre-layer"></div>
							<div class="frame">
								<div class="bg">
									<img src="./images/game_body_frame_01.png" alt="">
								</div>
								<div class="hand" id="hand">
									<img src="./images/game_hand2.png" alt="">
								</div>
								<div class="guide-text guide-obj">
									<div class="pre-count">3</div>
									<div class="text">
										제한시간 10초동안<br>
										<b>아토덤 크림을 빠르게 펴발라주면</b><br>
										스킨PT성공! 
									</div>
								</div>
								<div class="guide-line guide-obj">
									<img src="./images/game_pre_line.png" alt="">
								</div>
								<div class="timer">
									<div class="bg"></div>
									<div id="count">
										<img src="./images/timer_10.png" alt="">
									</div>
								</div>
							</div>
							<div class="gage-wrap">
								<div class="msg-box">
									<span>피부 체력</span>
									<span>강화 지수</span>
								</div>
								<div class="inner">
									<div class="percent">
										<span class="num" id="percent-num">0</span>
										<span>%</span>
									</div>
									<div class="gage-bg">
										<div class="gage" id="gage"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
<?
	include_once "./footer.php";
?>
			</div>
		</div>
		<div class="popup pt-pass" id="pt-pass">
			<button type="button" class="popup-close" data-popup="@close"></button>
			<div class="inner">
				<div class="title-block">
					<img src="./images/popup_title_img_cup.png" alt="">
					<h5>PT에 통과하셨습니다<i>!</i></h5>
					<p>당신에게 맞는 PT크림을 보내드릴게요</p>
				</div>
				<div class="tab-block">
					<div class="tab-wrapper init-state">
						<div class="tab light" data-tab-target="light">
							<div class="gage">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span class="bg"></span>
								<span class="bg"></span>
							</div>
							<div class="text">
								<p>라이트 PT</p>
								<span>Light</span>
							</div>
							<div class="view">
								view
							</div>
						</div>
						<div class="tab medium" data-tab-target="medium">
							<div class="gage">
								<span></span>
								<span></span>
								<span class="bg"></span>
								<span class="bg"></span>
								<span class="bg"></span>
								<span class="bg"></span>
							</div>
							<div class="text">
								<p>미디움 PT</p>
								<span>Medium</span>
							</div>
							<div class="view">
								view
							</div>
						</div>
						<div class="tab heavy" data-tab-target="heavy">
							<div class="gage">
								<span class="bg"></span>
								<span class="bg"></span>
								<span class="bg"></span>
								<span class="bg"></span>
								<span class="bg"></span>
								<span class="bg"></span>
							</div>
							<div class="text">
								<p>헤비 PT</p>
								<span>Heavy</span>
							</div>
							<div class="view">
								view
							</div>
						</div>
					</div>
					<div class="content-opened">
						<div class="tab-wrapper">
							<div class="tab" data-tab-target="light">
								<span>라이트 PT</span>
							</div>
							<div class="tab" data-tab-target="medium">
								<span>미디움 PT</span>
							</div>
							<div class="tab" data-tab-target="heavy">
								<span>헤비 PT</span>
							</div>
						</div>
						<div class="tab-contents">
							<div class="content light">
								<img src="./images/tab_content_light.png" alt="">
							</div>
							<div class="content medium">
								<img src="./images/tab_content_medium.png" alt="">
							</div>
							<div class="content heavy">
								<img src="./images/tab_content_heavy.png" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="check-block">
					<div class="check-wrapper">
						<div class="check is-checked">
							<div class="checkbox"></div>
						</div>
						<div class="check">
							<div class="checkbox"></div>
						</div>
						<div class="check">
							<div class="checkbox"></div>
						</div>
					</div>
				</div>
				<div class="check-guide-msg">
					체크리스트를 확인하고 나에게 맞는 PT 크림을 선택해주세요
				</div>
				<div class="input-block">
					<div class="input-group">
						<div class="guide">
							<span>이름</span>
						</div>
						<div class="input">
							<input type="text">
						</div>
					</div>
					<div class="input-group n3">
						<div class="guide">
							<span>전화번호</span>
						</div>
						<div class="input">
							<input type="tel">
							<span>-</span>
							<input type="tel">
							<span>-</span>
							<input type="tel">
						</div>
					</div>
					<div class="input-group">
						<div class="guide">
							<span>주소</span>
						</div>
						<div class="input">
							<input type="text" id="mb_addr1" readonly style="padding-right: 20px;text-overflow: ellipsis;">
							<button type="button" class="search find-addr"></button>
						</div>
					</div>
					<div class="input-group">
						<div class="guide">
							<span style="color: #ffffff;">주소2</span>
						</div>
						<div class="input">
							<input type="text">
						</div>
					</div>
				</div>
				<div class="input-guide-msg">
					입력하신 정보로 경품이 발송되니 정확하게 입력해주세요<br>
					부정확한 정보 입력으로 경품 미발송은 책임지지 않습니다
				</div>
				<div class="terms-block">
					<div class="terms-group">
						<a class="view-terms" data-popup="#terms1">
							*  개인 정보 수집 및 이용약관보기
							<img src="./images/terms_arrow.png" alt="">
						</a>
						<div class="check">
							<label for="agree1">개인 정보 수집 및 이용에 동의합니다</label>
							<input type="checkbox" class="" id="agree1">
							<span class="checkbox"></span>
							<label for="agree1" class="check-target"></label>
						</div>
					</div>
					<div class="terms-group">
						<a class="view-terms" data-popup="#terms2">
							*  개인 정보 취급 위탁 약관 보기
							<img src="./images/terms_arrow.png" alt="">
						</a>
						<div class="check">
							<label for="agree2">개인 정보 취급 위탁에 동의합니다</label>
							<input type="checkbox" id="agree2">
							<span class="checkbox"></span>
							<label for="agree2" class="check-target"></label>
						</div>
					</div>
				</div>
				<button type="button" class="btn-result">
					PT 결과 보기
				</button>
			</div>
		</div>
		<div class="popup pt-result" id="pt-result">
			<button type="button" class="popup-close" data-popup="@close"></button>
			<div class="inner">
				<div class="title-block custom-border">
					<img src="./images/popup_title_img_medi.png" alt="">
					<div class="wrap">
						<h5>PT 결과</h5>
						<p>
							<span>Crème</span>
							<span>PP Baume</span>
							<span>Intensive Baume</span>
						</p>
					</div>
				</div>
				<div class="text-block">
					<p class="your-status">
						미디움 PT를 선택한 당신은 <b>만성 건성</b>입니다
					</p>
					<p class="need">
						아토덤 PP밤으로 피부 PT가 필요합니다
					</p>
				</div>
				<div class="img-block">
					<img src="./images/popup_atoderm_img.png" alt="">
				</div>
				<div class="table-block custom-border">
					<div class="table">
						<div class="row">
							<div class="col icon _1"></div>
							<div class="col"><span>이름</span></div>
							<div class="col"><span>안 다 영</span></div>
						</div>
						<div class="row">
							<div class="col icon _2"></div>
							<div class="col"><span>선택한 PT</span></div>
							<div class="col"><span>미디움 PT</span></div>
						</div>
						<div class="row">
							<div class="col icon _3"></div>
							<div class="col"><span>현재 상태</span></div>
							<div class="col"><span>만성 건성</span></div>
						</div>
						<div class="row">
							<div class="col icon _4"></div>
							<div class="col"><span>필요한 PT 크림</span></div>
							<div class="col"><span>아토덤 PP밤</span></div>
						</div>
					</div>
					<div class="guide-msg">(선택하신 PT에 맞는 샘플 키트는 다음주에 일괄 배송됩니다)</div>
				</div>
				<div class="caution-block">
					<p>- 부정한 방법으로 이벤트 참여시 당첨 선발에서 제외됩니다.</p>
					<p>- 입력하신 정보로 경품이 발송되오니 부정확한 정보 입력으로 인한 경품 미발송은 책임지지 않습니다.</p>
					<p>- 개인정보취급 및 수집/위탁 약관에 미동의시 이벤트에 참여할 수 없습니다.</p>
					<p>- 이벤트 일정 및 경품은 사정에 따라 변경 될 수 있습니다. 변경 시 홈페이지에서 재공지됩니다.</p>
					<p>- 이벤트 및 경품 문의  dy.ahn@minivertising.kr </p>
					<p>070-4888-3804(평일 10:00~18:00/점심시간 제외 13:00~14:00)</p>
				</div>
			</div>
		</div>
		<div class="popup terms _1" id="terms1">
			<button type="button" class="popup-close" data-popup="@close"></button>
			<div class="inner">
				<img src="./images/popup_terms1_cnt.jpg" alt="">
			</div>
		</div>
		<div class="popup terms _2" id="terms2">
			<button type="button" class="popup-close" data-popup="@close"></button>
			<div class="inner">
				<img src="./images/popup_terms2_cnt.jpg" alt="">
			</div>
		</div>
		<!--		<input type="button" id="sample-btn" data-popup="#pt-pass">-->
		<script type="text/javascript">
			$(window).on('load', function() {
				//				$('#sample-btn').trigger('click');
			});

			$('#pt-pass .check-block .check').on('click', function() {
				var $parent = $(this).parent();
				$parent.find('.check').not(this).removeClass('is-checked');
				$(this).addClass('is-checked');
				//				$('.tab-contents').find('.content').not(tabTarget).hide();
				//				$('.tab-contents').find('.'+tabTarget).show();
				pt_type	= $(this).data("value");
				// 사용자가 선택한 피부타입에 맞는 제품 및 문구 변경
				if (pt_type == "light")
				{
					$(".your-status").html("라이트 PT를 선택한 당신은 <b>계절성 건성</b>입니다");
					$(".need").html("아토덤 크림으로 스킨 PT가 필요합니다");
				}else if (pt_type == "medium"){
					$(".your-status").html("미디움 PT를 선택한 당신은 <b>만성 건성</b>입니다");
					$(".need").html("아토덤 PP밤으로 스킨 PT가 필요합니다");
				}else{
					$(".your-status").html("헤비 PT를 선택한 당신은 <b>문제성 건성</b>입니다");
					$(".need").html("아토덤 인텐시브밤으로 스킨 PT가 필요합니다");
				}
			});

			$('.tab-wrapper .tab').on('click', function() {
				var $parent = $(this).parent();
				var tabTarget = $(this).data('tab-target');
				if($parent.hasClass('init-state')) {
					$('.tab-block .content-opened').show();
					//					$('.tab-contents').find('.content').not(tabTarget).hide();
					//					$('.tab-contents').find.(tabTarget).show();
				}
				$('.tab-contents').find('.content').not(tabTarget).hide();
				$('.tab-contents').find('.'+tabTarget).show();
			})
			$('#hand').draggable({
				axis: "x",
				revert: true,
				revertDuration: 250,
				snap: true,
				snapMode: "inner",
				start: function( event, ui ) {
					if(!gameController.firstPower) {
						gameController.firstPower = true;
						timer(0);
					}
				},
				drag: function( event, ui ) {
					gameController.dragging = true;
					if(gameController.point<=gameController.goalPoint) {
						setTimeout(function() {
							var percentage = Math.floor((gameController.point/gameController.goalPoint)*100);
							gameController.point++;
							$('#percent-num').text(percentage);
							$('#gage').css('height', percentage+'%');
						}, 10);
					} else {
						$('.frame .bg img').attr('src', './images/game_body_frame_07.png');
						//						alert("게임 클리어")
						bato.popup.show($("#pt-pass"));
						gameController.clearFlag = true;
						return false;
					}
				},
				stop: function( event, ui) {
					gameController.dragging = false;
					if(!gameController.clearFlag) {
						gageDown();
					}
				}
			});

			//			수정 안되게
			var gameController = {
				firstPower: false,
				dragging: false,
				clearFlag: false,
				overFlag: false,
				point: 0,
				time: 10,
				goalPoint: 300
			}

			function gageDown() {
				if(!gameController.dragging && gameController.point>0) {
					setTimeout(function() {
						var percentage = Math.floor((gameController.point/gameController.goalPoint)*100);
						gameController.point--;
						$('#percent-num').text(percentage);
						$('#gage').css('height', percentage+'%');
						gageDown();
					}, 30);
				} else {
					return false;
				}
			}

			function timer(time) {
				if(gameController.time>0) {
					if(!gameController.clearFlag && !gameController.overFlag) {
						setTimeout(function() {
							gameController.time--;
							if(gameController.point<30) {
								$('.frame .bg img').attr('src', './images/game_body_frame_01.png');
						    } else if(gameController.point>30 && gameController.point<70) {
								$('.frame .bg img').attr('src', './images/game_body_frame_02.png');	
							} else if(gameController.point>70 && gameController.point<150) {
								$('.frame .bg img').attr('src', './images/game_body_frame_03.png');	
							} else if(gameController.point>150 && gameController.point<190) {
								$('.frame .bg img').attr('src', './images/game_body_frame_04.png');	
							} else if(gameController.point>190 && gameController.point<240) {
								$('.frame .bg img').attr('src', './images/game_body_frame_05.png');	
							} else if(gameController.point>240 && gameController.point<280) {
								$('.frame .bg img').attr('src', './images/game_body_frame_06.png');	
							} else {
								$('.frame .bg img').attr('src', './images/game_body_frame_07.png');
							}
							$('#count img').attr('src', './images/timer_'+gameController.time+'.png');
							timer(1000);
						}, time);
					}
				} else {
					//					time out!
					alert("게임 오버");
					gameController.overFlag = true;
					gameController.point = 0;
					gameController.firstPower = false;
					gameController.dragging = false;
				}
			}
			//			var svg1 = document.getElementById("svg-shape1");
			//			var svg2 = document.getElementById("svg-shape2");
			//			var s1 = Snap(svg1);
			//			var s2 = Snap(svg2);
			//
			//			var svgPath1 = Snap.select('#svg-path1');
			//			var svgPath2 = Snap.select('#svg-path2');
			//
			//			var svg1Points = svgPath1.node.getAttribute('d');
			//			var svg2Points = svgPath2.node.getAttribute('d');
			//
			//			svgPath1.animate({ d: svg2Points }, 1800, mina.easeinout, svgChange(svgPath1, svg2Points));  
			//			svgPath2.animate({ d: svg1Points }, 1800, mina.easeinout, svgChange(svgPath2, svg1Points));  
			//
			//
			//			function svgChange(el, currentPoints) {
			//				var targetPoints = '';
			//				if(currentPoints == svg1Points) {
			//					targetPoints = svg2Points;
			//				} else {
			//					targetPoints = svg1Points;
			//				}
			//				setTimeout(function() {
			//					el.animate({ d: targetPoints }, 1800, mina.easeinout, svgChange(el, targetPoints));
			//				}, 1800);
			//			}
			//
			//			(function($){
			//				var x;
			//				var y;
			//				var waves = $('.wave').each(function(){
			//					this.np = 0;
			//					this.ep = 0;
			//					this.yp = 0;
			//					this.lv = this.getAttribute('data-wave')*1;
			//				});
			//				function move(){
			//					this.ep = this.lv*x;
			//					this.yp = this.lv*y;
			//				}
			//				function loop() {
			//					this.np = this.np + (this.ep - this.np)*0.1;
			//					this.yp = this.yp + (this.yp - this.yp)*0.1;
			//					this.style.transform = "translate("+this.np+'px'+", "+this.yp+'px'+")";
			//					//			this.style.transform = "translate("+this.np+'px'+")";
			//				}
			//				$(window).on('mousemove', function(e){
			//					x = (e.clientX - $(window).width()/2) / 50;
			//					y = (e.clientY - $(window).height()/2) / 50;
			//					waves.each(move);
			//				});
			//
			//				setInterval(function(){
			//					waves.each(loop);
			//				},33);
			//			})(jQuery);

		</script>
	</body>
</html>