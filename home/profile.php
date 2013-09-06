<html language="en">
	<head>
		<?php include_once("head.php"); ?>
		<link href="profile.css" rel="stylesheet">
		<script type="text/javascript">
		$(function() {
			$("li").click(function(e) {
			  e.preventDefault();
			  $("li").removeClass("active");
			  $(this).addClass("active");
			});
		});
		</script>
	</head>

	<body>

		<div id="profile_header">
			<div id="profile_header1">
				<span class="profile_header"><a href="#"><span style="font-size:20px;color:white">]</span> PROFILE <span style="font-size:20px">[</span></a></span>
				<span class="profile_header"><a href="#">HOME</a></span>
			</div>	
		</div>	

		<div id="profile_tabs">
				<ul class="tabs group">
					<li><a href="#">Wardrobe</a></li>
					<li><a href="#">Uploads</a></li>
					<li class="active"><a href="#">Favourites</a></li>
				</ul>	
		</div>	

		<div id="profile_body">
		<table width="100%" border="0">
			<tr class="td">
				<td id="col_left">
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
		</table>	
	</div>

	<?php include_once("footer.php");?>

	</body>
</html>