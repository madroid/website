<?php
if(session_id() == '') {
    session_start();
}

?>
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
				<span class="profile_header"><a href="home2.php">HOME</a></span>
			</div>	
		</div>	

		<div id="profile_tabs">
				<ul class="tabs group">
					<li><a href="#">Wardrobe</a></li>
					<li><a href="#">Uploads</a></li>
					<li class="active"><a href="#">Favourites</a></li>
				</ul>	
		</div>	
		<?php include_once("new_item.php");?>
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
								<div id="user_name">Sarah Jones</div>	
								<div id="user_gender">Female</div>
								<div id="user_email" style="float:right;margin-top:16px;color:#58D3F7">sarahjones@gmail.com</div>
							</span>		

					</div>						

					<div id="non_video">
						<?php add("image3.jpg") ?>
					</div>	

				</td>
				<td id="col_middle">
					<?php add("image1.jpg") ?>
					<?php add("image4.jpg") ?>
				</td>
				<td id="col_right">
					<?php add("image2.jpg") ?>
					<?php add("image5.jpg") ?>
				</td>
			</tr>
		</table>	
	</div>

	<?php include_once("footer.php");?>

	</body>
</html>