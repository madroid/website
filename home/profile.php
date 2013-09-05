<html language="en">
	<head>
		<meta charset="utf-8">
		<title>BeyondPink | Unique Women Clothing</title>
		<link href="profile_css.css" rel="stylesheet">
		<link href="../css/bootstrap-responsive.css" rel="stylesheet">
		<script type="text/javascript" src="../js/jquery-2.0.3.min.js"></script>
		<script type="text/javascript">	
			$(document).ready(function(){
			var window_width = $(window).width();
			var window_height = $(window).height();
			var left_array = [];
			$("body").width(window_width-10);		

			var body_padding_left = $("#profile_body").css("padding-left").replace("px","");
			var item_margin_left = $(".item").css("margin-left").replace("px","");

			var left1= $("#img1").offset().left- body_padding_left - item_margin_left;
			var left2 = $("#img2").offset().left- body_padding_left - item_margin_left;
			var left3 = left1 - $(".item").width() - item_margin_left - 6;
			
			var parent = $("#img1").css("top");

			$("#img3").css("left",left1);
			$("#img3").css("margin-top");

		});
	</script>
	</head>

	<body>
		
		<div id="profile_header">
			<div id="profile_header1">
				<span class="profile_header"><span style="font-size:20px">]</span> PROFILE <span style="font-size:20px">[</span></span>
				<span class="profile_header">HOME</span>
			</div>	
		</div>	

		<div id="profile_tabs">
			<div id="tabs">
				<span class="tabs_element">Wardrobe</span>
				<span class="tabs_element">Uploads</span>
				<span class="tabs_element">Favourites</span>
			</div>	
		</div>	

		<div id="profile_body">
			
			<div id="user_info">

				<span id="user_pic">
					<div class="user_pic"><img src="../layout/left.png"></div>
					<div class="user_pic"><img src="../layout/profile_pic.png"></div>
					<div class="user_pic"><img src="../layout/right.png"></div>
				</span>	

				<span id="user_name_gender">
					<div id="user_name">NAME</div>	
					<div id="user_gender">GENDER</div>
				</span>		
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

				<div id="img3" class="item">
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