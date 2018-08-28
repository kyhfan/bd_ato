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
			<div class="content sub game skin-selected">
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
									<img src="./images/game_skin_frame_01.jpg" alt="">
								</div>
								<div class="hand" id="hand">
									<img src="./images/game_hand.png" alt="">
								</div>
								<div class="guide-text guide-obj">
									<!-- <div class="pre-count">3</div> -->
									<div class="text">
										제한시간 10초동안<br>
										<b>아토덤 크림을 빠르게 펴발라주면</b><br>
										스킨PT성공! 
									</div>
									<button class="start-btn" id="game-start">
										START
									</button>
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
<?
	include_once "./popup.php";
?>		
<!--		<input type="button" id="sample-btn" data-popup="#pt-pass">-->
		<script type="text/javascript">
			function preloading (imageArray) { var n = imageArray.length; for (var i = 0; i < n; i++) { var img = new Image(); img.src = imageArray[i]; } } preloading([ './images/game_skin_frame_02.jpg', './images/game_skin_frame_03.jpg', './images/game_skin_frame_02.jpg', './images/game_skin_frame_04.jpg', './images/game_skin_frame_05.jpg', './images/game_skin_frame_06.jpg', './images/game_skin_frame_07.jpg' ]);

			var pt_type		= "light";

			$('#game-start').on('click', function() {
				$('.content.game').addClass('started');
				if(!gameController.firstPower) {
					gameController.firstPower = true;
					timer(1000);
				}
			});
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
						$('.frame .bg img').attr('src', './images/game_skin_frame_07.jpg');
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
								$('.frame .bg img').attr('src', './images/game_skin_frame_01.jpg');
							} else if(gameController.point>30 && gameController.point<70) {
								$('.frame .bg img').attr('src', './images/game_skin_frame_02.jpg');	
							} else if(gameController.point>70 && gameController.point<150) {
								$('.frame .bg img').attr('src', './images/game_skin_frame_03.jpg');	
							} else if(gameController.point>150 && gameController.point<190) {
								$('.frame .bg img').attr('src', './images/game_skin_frame_04.jpg');	
							} else if(gameController.point>190 && gameController.point<240) {
								$('.frame .bg img').attr('src', './images/game_skin_frame_05.jpg');	
							} else if(gameController.point>240 && gameController.point<280) {
								$('.frame .bg img').attr('src', './images/game_skin_frame_06.jpg');	
							} else {
								$('.frame .bg img').attr('src', './images/game_skin_frame_07.jpg');
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