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
//			$("body").width(window_width-10);
		
		});
	</script>

	</head>

	<body>
		
		<div id="top" class="top">
			<div id="top_left" class="top_left boundary">
				<div id="logo" class="logo">
					<img src="../layout/logo.png" alt="BeyondPink Logo"/>
				</div>
				<div id="menu" class="menu">
					<ul>	
						<li><a href="#">Women</a></li>
						<li><a href="#">Bottom</a></li>
						<li><a href="#">Jumpsuites</a></li>
						<li><a href="#">Footwears</a></li>
						<li><a href="#">Bellerinas</a></li>
						<li><a href="#">Winter Wear</a></li>
						<li><a href="#">Special Requests</a></li>
					</ul>
				</div>
			</div>

		</div>



<!-------------------------------------------------------------------------------->
		<?php   include_once("footer.php");	   ?>
		<?php include_once("login_modal.php"); ?>
<!-------------------------------------------------------------------------------->


		<div id="bottom">
			<div id="video">
				<img src="../layout/video.png" alt="Beyond Pink Video"/>
			</div>
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
		</div>	
	
	</body>
</html>