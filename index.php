<!DOCTYPE html>
<html>
<head>
	<title>Kishor Malakar | Web Developer</title>

	<?php require 'meta.php'; ?>

</head>
<body>

	<div class="wrapper home">

		<?php require 'header.php'; ?>
		
		<div class="content">
			
			<section class="home-landing">
				
				<article class="home-landing-img">
					
					<div class="home-landing-img-center"></div>

				</article>

				<article class="home-landing-text">

					<div class="home-landing-text-header">
						
						<h3>KISHOR MALAKAR</h3>

						<h6>Engineer - Web Developer</h6>

					</div>

					<p>My clients always have my undivided attention</p>

					<div class="home-landing-text-link">

						<a class="hire" href="contact/">HIRE ME</a>

						<a class="work" href="work/">MY WORK</a>
						
					</div>					

				</article>

			</section>

		</div>

	</div>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/drawer.js"></script>
	<script type="text/javascript">
		
		$(function(){

			$(window).on('mousemove', function(e){

				var mouseX = e.pageX;
				var mouseY = e.pageY;

				var landing_center_offset = $('.home-landing-img-center').offset();

				var landing_center_offset_top = landing_center_offset.top;
				var landing_center_offset_left = landing_center_offset.left;

				var delta_x = +mouseX - +landing_center_offset_left;
				var delta_y = +landing_center_offset_top - +mouseY;
				
				// ratio of perpendicular and base
				var tan_ratio = delta_y/delta_x;

				// 1. Get angle in radian with Math.atan
				// 2. Convert that angle to degree
				// 3. Make degree angle always positive
				var absolute_angle_deg = Math.abs((180 * Math.atan(tan_ratio))/3.145);

				var quadrant;
				var angle;

				if(delta_x > 0 && delta_y > 0){
					quadrant = 1;
					angle = 0 + +absolute_angle_deg;
				}

				if(delta_x < 0 && delta_y > 0){
					quadrant = 2;
					angle = 180 - +absolute_angle_deg;
				}

				if(delta_x < 0 && delta_y < 0){
					quadrant = 3;
					angle = 180 + +absolute_angle_deg;
				}

				if(delta_x > 0 && delta_y < 0){
					quadrant = 4;
					angle = 360 - +absolute_angle_deg;
				}

				var photo_hover = $('.home-landing-img').is(':hover');

				if(angle < 22.5 || angle > 337.5 && photo_hover == false){

					$('.home-landing-img').css({'background-position': '-2700px'});

				}

				if(angle >= 22.5 && angle <= 67.5 && photo_hover == false){

					$('.home-landing-img').css({'background-position': '-2400px'});

				}

				if(angle > 67.5 && angle < 112.5 && photo_hover == false){

					$('.home-landing-img').css({'background-position': '-2100px'});

				}

				if(angle >= 112.5 && angle <= 157.5 && photo_hover == false){

					$('.home-landing-img').css({'background-position': '-1800px'});

				}

				if(angle > 157.5 && angle < 202.5 && photo_hover == false){

					$('.home-landing-img').css({'background-position': '-1500px'});

				}

				if(angle >= 202.5 && angle <= 247.5 && photo_hover == false){

					$('.home-landing-img').css({'background-position': '-1200px'});

				}

				if(angle > 247.5 && angle < 292.5 && photo_hover == false){

					$('.home-landing-img').css({'background-position': '-900px'});

				}

				if(angle >= 292.5 && angle <= 337.5 && photo_hover == false){

					$('.home-landing-img').css({'background-position': '-600px'});

				}

				if(photo_hover == true){

					$('.home-landing-img').css({'background-position': '-300px'});

				}

				console.log("delta_x: "+delta_x+"\ndelta_y : "+delta_y+"\nQuadrant : "+quadrant+"\nAngle : "+angle)

			});

			$('.home-landing-img').click(function(){

				$('.home-landing-img').css({'background-position': '0px'});

			})

		});

	</script>

</body>
</html>