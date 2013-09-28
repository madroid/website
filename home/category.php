<html language="en">
	<head>
	
		<?php include_once("head.php");?>		
		<link href="category.css" rel="stylesheet">
		<script src="../js/jquery.lazyload.min.js" type="text/javascript"></script>
		<script type="text/javascript">	

		function addItem(pid,ptitle,pprice,pcolor,pfabrics,pname){
					var str = '<div id="item_'+pid+'" class="item"><div><img id="img_'+pid+'" src="../img/large/'+pname+'" class="img"></div><div class="title"><img id="fav_'+pid+'" src="../layout/heart.png"/></div><hr><div class="description"><div class="colors">';

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
			</div>	

			<script type="text/javascript">
				
				var data = JSON.parse(<?php echo json_encode($res); ?>);
				if(data.success==1){
					var n =data.data.length;
					var i =0;
					for(i=0;i<n;i++){
						var left_ht = $("#cat_left").height();
						var mid_ht = $("#cat_middle").height();
						var right_ht = $("#cat_right").height();
						if(left_ht<=mid_ht && left_ht<=right_ht){
							$("#cat_left").append(addItem(data.data[i]['pid'],data.data[i]['title'],data.data[i]['price'],data.data[i]['color'],data.data[i]['fabrics'],data.data[i]['pname']));
						}
						else if(mid_ht<=left_ht && mid_ht<=right_ht){
							$("#cat_middle").append(addItem(data.data[i]['pid'],data.data[i]['title'],data.data[i]['price'],data.data[i]['color'],data.data[i]['fabrics'],data.data[i]['pname']));
						}
						else{
							$("#cat_right").append(addItem(data.data[i]['pid'],data.data[i]['title'],data.data[i]['price'],data.data[i]['color'],data.data[i]['fabrics'],data.data[i]['pname']));
						}
					}
					
				}

			</script>
		</div>	
		<?php   include_once("footer.php");	   ?>
		<?php include_once("login_modal.php"); ?>
	</body>	
