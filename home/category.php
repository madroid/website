<?php  
if(session_id() == '') {
    session_start();
}
 ?>

<html language="en">
	<head>
	
		<?php include_once("head.php");?>		
		<link href="category.css" rel="stylesheet">
		<script src="../js/jquery.lazyload.min.js" type="text/javascript"></script>
		<script type="text/javascript">	

		function addItem(pid,ptitle,pprice,pcolor,pfabrics,pname){
					var str = '<div id="item_'+pid+'" class="item"><div><a href="item.php" onclick="set_session_elements('+pid+')"><img id="img_'+pid+'" src="../img/large/'+pname+'" class="img"></a></div><div class="title"><img id="fav_'+pid+'" src="../layout/heart.png" class="heart" onclick="addToFav('+pid+')"/></div><hr><div class="description"><div class="colors">';

					var arr = pcolor.split(",");
					for(var j1=0;j1<arr.length-1;j1++){
						str += '<div class="circle" style="background-color:'+arr[j1]+'"></div>&nbsp;';
					}
					str +=	'</div></div></div>';

					return str;
				}



			$(document).ready(function(){

			$(".dropdown").mouseenter(function(){
				$('.sub_menu').stop(false, true).hide();

				var dropdown = $(this).children(".sub_menu");
				
				dropdown.slideDown();

				dropdown.mouseleave(function(){
					dropdown.slideUp();
				});
			});

		});

		</script>

	</head>

	<body>
		<?php 
			include_once("../backend/populate.php");
			$populate = new Populate();
			$res = $populate -> getCategory($_REQUEST['tag']);

		 ?>
		<?php include_once("gen_header.php") ?>		

		<div id="cat_body">
			<div id="filter">
				<h4>Filter Your Items</h4>
				<div class="accordion" id="accordion2">
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne" id="sign1"> [ &nbsp; <span id="price" class="sign"> - </span>&nbsp; ] &nbsp;&nbsp;&nbsp; Price</a>
						</div>
						<div id="collapseOne" class="accordion-body collapse in">	
							<div class="accordion-inner">
								<div id="select">
									<label class="checkbox">
										<input type="checkbox"> Below 1000</input>
									</label>	
									<label class="checkbox">
										<input type="checkbox"> 1000 - 1500</input>
									</label>	
									<label class="checkbox">
										<input type="checkbox"> 1500 - 2000</input>
									</label>	
									<label class="checkbox">
										<input type="checkbox"> Above 2000</input>
									</label>
									<button class="btn btn-primary" type="button">Filter</button>
								</div>	
							</div>	
						</div>	
					</div>	
				</div>	

			</div>

			<div id="container">
				<div id="cat_left" class="column">
				</div>
				<div id="cat_middle" class="column">
				</div>
				<div id="cat_right" class="column">
				</div>
				<br>
				<div id="loadmore" style="display:block"><center><button id="loadmoreitems" class="btn btn-large" onclick="more()">...More...</button></center></div>
				<br>
			</div>	

			<script type="text/javascript">
				var nomore = false;
				
				function loadItems(nextX,total){
					for(i;i<total && i<nextX;i++){
						var left_ht = $("#cat_left").height();
						var mid_ht = $("#cat_middle").height();
						var right_ht = $("#cat_right").height();
						if(left_ht<=mid_ht && left_ht<=right_ht){
							
							$(addItem(data.data[i]['pid'],data.data[i]['title'],data.data[i]['price'],data.data[i]['color'],data.data[i]['fabrics'],data.data[i]['pname'])).appendTo("#cat_left").hide().fadeIn(560);

						}
						else if(mid_ht<=left_ht && mid_ht<=right_ht){
							$(addItem(data.data[i]['pid'],data.data[i]['title'],data.data[i]['price'],data.data[i]['color'],data.data[i]['fabrics'],data.data[i]['pname'])).appendTo("#cat_middle").hide().fadeIn(560);
						}
						else{
							$(addItem(data.data[i]['pid'],data.data[i]['title'],data.data[i]['price'],data.data[i]['color'],data.data[i]['fabrics'],data.data[i]['pname'])).appendTo("#cat_right").hide().fadeIn(560);						}
						
					}

					if(i>=n){
						$("#loadmoreitems").addClass("disabled");
					}


				}

				var data1 = <?php echo json_encode($res); ?>;
				var data = JSON.parse(data1);
				var n = 0;
				if(data.success==1){
					 n =data.data.length;
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
							alert(html);
						}
					});
				}


			</script>
		</div>	
		<?php   include_once("footer.php");	   ?>
		<?php include_once("login_modal.php"); ?>
	</body>	
