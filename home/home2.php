<html language="en">
	<head>
		<meta charset="utf-8">
		<title>BeyondPink | Unique Women Clothing</title>
		<link href="home_css.css" rel="stylesheet">
		<link href="../css/bootstrap-responsive.css" rel="stylesheet">
		<script type="text/javascript" src="../js/jquery-2.0.3.min.js"></script>
		<script type="text/javascript">	
			$(document).ready(function(){
			var window_width = $(window).width();
			var window_height = $(window).height();
			$("#top").height(0.95*window_height);
			$("body").width(window_width-10);
		
			$("body").smoothDivScroll({
				mousewheelScrolling: "allDirections",
				manualContinuousScrolling: true,
				autoScrollingMode: "onStart"
			});
		});
	</script>
	</head>

	<body>
		
		<div id="top" class="top">
			<div id="top_left" class="top_left">
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

		<div id="footer">
			<div id="footer_menu">
				<ul>
					<li><a href="#">MY ACCOUNT</a></li>
					<li><a href="#">INFORMATION</a></li>
					<li><a href="#">CUSTOMER SERVICE</a></li>
					<li><a href="#">EXTRAS</a></li>
				</ul>	
			</div>	
			<div id="copyright">
				Beyond Pink | Unique Women Clothing &copy 2013.
			</div>	
		</div>

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