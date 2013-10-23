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
		
		<?php 
			if(isset($_SESSION['email'])) {include_once('login_header.php');}
			include_once("../backend/populate.php");
			$populate = new Populate();
			$res = $populate -> getHome();


		?>		
				
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
	
	<div id="container1">
				<div id="filter_div">
					<!-- Code for filter element. -->
				</div>
				<div id="col_left_big">
					<div id="video">
						 <img src="../layout/video.png" alt="Beyond Pink Video"/>
					</div>
					<div id="col_left" class="column">

					</div>
				</div>
				<div id="col_middle" class="column">
				</div>
				<div id="col_right" class="column">
				</div>
				<br>
				<div id="loadmore" style="display:block"><center><div id="button_load"><button id="loadmoreitems" class="btn btn-normal" style="font-family:'our_font';color:#6E6E6E;font-size:14.5px;" onclick="more()">...More...</button><div id="gif_loader"><img src="../img/ajax_loader.gif"><div></div></center></div>
				<br>
	</div>

	<script type="text/javascript">
		$("#gif_loader").hide();
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

				function loadItems(nextX,total){
					$("#button_load").hide();
					$("#gif_loader").show();
					for(i;i<total && i<nextX;i++){
						addItem(data.data[i]['pid'],data.data[i]['color'],data.data[i]['pname'],data.data[i]['likes'],data.data[i]['description']);

					if(i>=n){
						$("#loadmoreitems").addClass("disabled");
					}

					}
					$("#button_load").show();
					$("#gif_loader").hide();

				}

				var data1 = <?php echo json_encode($res); ?>;
				var data = JSON.parse(data1);
				var n = 0;
				if(data.success==1){
					 n = data.data.length;
					var i =0;
					loadItems(i+9,n);
					
				}

				function more(){
						loadItems(i+9,n);
				}	

				function addToFav(id){
					alert(id);
				}

				function set_session_elements(item_id){
					var answer = 0;
					for(var j11=0;j11<n;j11++){
						if(data.data[j11]['pid']==item_id){
							answer = j11;
							break;
						}
					}
					$.ajax({
						type:"POST",
						url: "session.php",
						data:"item_id="+answer+"&item_list="+data1,
						success:function(html){
							//alert(html);
						}
					});
				}


	</script>
	

	</body>
</html>