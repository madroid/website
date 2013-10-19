<?php
if(session_id() == '') {
    session_start();
}
?>
<html language="en">
	<head>
		<?php include_once("head.php"); ?>		
		<link href="home_css.css" rel="stylesheet">
	
		<script type="text/javascript" src="../js/login.js"></script>
		<script type="text/javascript" src="../js/common.js"> </script>

		<script type="text/javascript">	
			$(document).ready(function(){
			var window_width = $(window).width();
			var window_height = $(window).height();
			$("#top").height(window_height-40);
			$(function(){
			$(".dropdown").mouseenter(function(){
				$('.sub_menu').stop(false, true).hide();

				var dropdown = $(this).children(".sub_menu");
				
				dropdown.slideDown();

				dropdown.mouseleave(function(){
					dropdown.slideUp();
				});
			});
		});
			


		});

			

	</script>

	</head>

	<body>
		
		<div id="profile_header">
			<div id="profile_header1">
				<span class="profile_header"><a href="#">Home</a></span>
				<div class="separator">&nbsp;</div>
				<span class="profile_header"><a href="#">Profile</a></span>
			</div>
		</div>
				
		<div id="top" class="top">
			<div id="top_left" class="top_left boundary">
				<div id="logo" class="logo">
					<img src="../img/logo/logo2.png" alt="BeyondPink Logo"/>
				</div>
				<?php include_once('menu.php'); ?>
			</div>

		</div>



<!-------------------------------------------------------------------------------->
		<?php include_once("login_modal.php"); ?>
		<?php   include_once("footer.php");	   ?>
<!-------------------------------------------------------------------------------->
	
	<div id="bottom">
		<table width="100%" border="0">
			<tr class="td">
				<td id="col_left">
					<div id="video">
						<img src="../layout/video.png" alt="Beyond Pink Video"/>
					</div>
					<div id="non_video">
						<div id="img1" class="item">
							<div>
								<img src="../img/small/image3.jpg" class="img">
							</div>	
							<div class="title">
								<img src="../layout/heart.png"/>
							</div>
							<hr>
							<div class="description">
								<div class="colors">
									<div class="circle" style="background-color:#F26836"></div>
									<div class="circle" style="background-color:#95948F"></div>
									<div class="circle" style="background-color:#F86FED"></div>
									<div class="circle" style="background-color:#E4E13F"></div>
								</div>
							</div>	
						</div>
					</div>	

				</td>
				
				<td id="col_middle">
					<div id="img1" class="item">
						<div>
							<img src="../img/small/image1.jpg" class="img">
						</div>	
						
						<div class="color_like">
							<div class="colors">
								<div class="available_colors">
									Available colors
								</div>
								<div>
									<div class="circle" style="background-color:#F26836"></div>
									<div class="circle" style="background-color:#95948F"></div>
									<div class="circle" style="background-color:#F86FED"></div>
									<div class="circle" style="background-color:#E4E13F"></div>
								</div>
							</div>
							<div class="like">
								<div class="heart">
									<img src="../layout/heart.png"/>
								</div>
								<div>
									99 People like this
								</div>
							</div>
						</div>
						
						<div class="description">
							<div class="price">
								Rs. 1,000
							</div>
							<div class="title">
								Sexylady Part 1 ;)
							</div>

						</div>	
					</div>

						<div id="img0" class="item">
							<div>
								<img src="../img/small/image4.jpg" class="img">
							</div>	
							<div class="title">
								<img src="../layout/heart.png"/>
							</div>
							<hr>
							<div class="description">
								<div class="colors">
									<div class="circle" style="background-color:#F26836"></div>
									<div class="circle" style="background-color:#95948F"></div>
									<div class="circle" style="background-color:#F86FED"></div>
									<div class="circle" style="background-color:#E4E13F"></div>
								</div>
							</div>	
						</div>

				</td>
				
				<td id="col_right">
					
					<div id="img2" class="item">
						<div>
							<img src="../img/small/image2.jpg" class="img">
						</div>	
						<div class="title">
							<img src="../layout/heart.png"/>
						</div>
						<hr>
						<div class="description">
							<div class="colors">
								<div class="circle" style="background-color:#F26836"></div>
								<div class="circle" style="background-color:#95948F"></div>
								<div class="circle" style="background-color:#F86FED"></div>
								<div class="circle" style="background-color:#E4E13F"></div>
							</div>
						</div>	
					</div>

					<div id="img0" class="item">
							<div>
								<img src="../img/small/image5.jpg" class="img">
							</div>	
							<div class="title">
								<img src="../layout/heart.png"/>
							</div>
							<hr>
							<div class="description">
								<div class="colors">
									<div class="circle" style="background-color:#F26836"></div>
									<div class="circle" style="background-color:#95948F"></div>
									<div class="circle" style="background-color:#F86FED"></div>
									<div class="circle" style="background-color:#E4E13F"></div>
								</div>
							</div>	
						</div>

				</td>
			</tr>	
		<table>	
	</div>
	

	</body>
</html>