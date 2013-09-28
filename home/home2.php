<html language="en">
	<head>
	
		<?php include_once("head.php");?>		
		<link href="home_css.css" rel="stylesheet">
	
		<script type="text/javascript" src="../js/login.js"></script>
		<script type="text/javascript" src="../js/common.js"> </script>

		<script type="text/javascript">	
			$(document).ready(function(){
			var window_width = $(window).width();
			var window_height = $(window).height();
			$("#top").height(0.95*window_height);
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

	<body oncontextmenu="return false">
		
		<div id="top" class="top">
			<div id="top_left" class="top_left boundary">
				<div id="logo" class="logo">
					<img src="../layout/logo.png" alt="BeyondPink Logo"/>
				</div>
				<div id="menu" class="menu">
					<ul>	
						<li><a href="#">Women</a></li>.
						<li class="dropdown"><a href="#">Bottom</a>
							<ul class="sub_menu">
								<li><a href="#">Pant</a></li>
								<li><a href="#">Shorts</a></li>
								<li><a href="#">Skirts</a></li>
							</ul>	
						</li>.
						<li><a href="#">Jumpsuites</a></li>.
						<li><a href="#">Footwears</a></li>.
						<li><a href="#">Bellerinas</a></li>.
						<li class="dropdown"><a href="#">Winter Wear</a>
							<ul class="sub_menu">
								<li><a href="#">Cardigan</a></li>
								<li><a href="#">Jacket</a></li>
								<li><a href="#">Sweater</a></li>
							</ul>	
						</li>.
						<li><a href="#">Special Requests</a></li>.
					</ul>
				</div>
			</div>

		</div>



<!-------------------------------------------------------------------------------->
		<?php   include_once("footer.php");	   ?>
		<?php include_once("login_modal.php"); ?>
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