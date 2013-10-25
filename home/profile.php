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
			
	
<div id="container1">
				<div id="filter_div">
					<!-- Code for filter element. -->
				</div>
				<div id="col_left_big">
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

					<div id="col_left" class="column">

					</div>
				</div>
				<div id="col_middle" class="column">
				</div>
				<div id="col_right" class="column">
				</div>
				<br>
			<!--	<div id="loadmore" style="display:block"><center><div id="button_load"><button id="loadmoreitems" class="btn btn-normal" style="font-family:'our_font';color:#6E6E6E;font-size:14.5px;" onclick="more()">...More...</button><div id="gif_loader"><img src="../img/ajax_loader.gif"><div></div></center></div> -->
				<br>
	</div>
	<script type="text/javascript">
	function addItem(pid,pcolor,pname,plikes,pdescription){
					var str = '<div id="img1" class="item"><div><a href="item.php" onclick="set_session_elements('+pid+')"><div id="to_append_'+pid+'"></div></a></div><div class="color_like"><div class="colors"><div class="available_colors">';

					var arr = pcolor.split(",");
					for(var j1=0;j1<arr.length-1;j1++){
						str += '<div class="circle" style="background-color:'+arr[j1]+'"></div>&nbsp;';
					}
					str +=	'</div></div>';
					str+= '<div class="like"><div class="heart"><img src="../layout/heart.png"/></div><div>'+plikes+' People like this</div></div></div><div class="description">'+pdescription+'</div>	</div>';

					$('<img id="img_'+pid+'" src="../img/large/'+pname+'" class="img">').load(function(){
						var left_ht = $("#col_left_big").height();
						var mid_ht = $("#col_middle").height();
						var right_ht = $("#col_right").height();
						if(left_ht<=mid_ht && left_ht<=right_ht){
							$(str).appendTo("#col_left");
							$(this).appendTo("	#to_append_"+pid).hide().fadeIn(560);
						}
						else if(mid_ht<=left_ht && mid_ht<=right_ht){
							$(str).appendTo("#col_middle");
							$(this).appendTo("#to_append_"+pid).hide().fadeIn(560);
						}
						else{
							$(str).appendTo("#col_right");
							$(this).appendTo("#to_append_"+pid).hide().fadeIn(560);
						}
						
					});
					
	}

	var data = <?php 
						include_once("../backend/insert_user.php");
						  $insert1= new USER_UPDATE();
						  $res = $insert1-> getFavList($_SESSION['email']);
						  echo "$res";
					 ?>;


	function loadItems(){
		$("#button_load").hide();
		$("#gif_loader").show();
		var y1 = 0;
		for(y1=0;y1<data.data.length;y1++){
			addItem(data.data[y1]['pid'],data.data[y1]['color'],data.data[y1]['pname'],data.data[y1]['likes'],data.data[y1]['description']);
		}
		$("#button_load").show();
		$("#gif_loader").hide();		
	}
	
	loadItems();

	</script>
	</body>
</html>