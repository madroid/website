<?php  
if(session_id() == '') {
    session_start();
}
 ?>

<html language="en">
	<head>
			
		<?php include_once("head.php");?>		
		<link href="category.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/jquery-ui.css" />
		
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
				$("#all_category").attr("checked",true);
			$(".dropdown").mouseenter(function(){
				$('.sub_menu').stop(false, true).hide();

				var dropdown = $(this).children(".sub_menu");
				
				dropdown.slideDown();

				dropdown.mouseleave(function(){
					dropdown.slideUp();
				});
			});

		});
					$(function() {
					    $( "#slider-range" ).slider({
					      range: true,
					      min: 0,
					      max: 100,
					      values: [ 0, 100 ],
					      animate:"fast",
					      step:1,
					      slide: function( event, ui ) {
					        $("#value_left").html("Rs. "+ui.values[0]*50);
					        $("#value_right").html("Rs. "+ui.values[1]*50);
					       
					      },
					      stop: function (event,ui){
					      	 filter_items();
					      }
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

		 <div id="profile_header">
			<div id="profile_header1">
				<span class="profile_header"><a href="#">Home</a></span>
				<div class="separator">&nbsp;</div>
				<span class="profile_header"><a href="#">Profile</a></span>
			</div>
		</div>
		
		<div id="top">
			<div><a href="home2.php"><img src="../img/logo/logo2.png"></div>
			<div id="cat_menu">
				<?php include_once("menu.php"); ?>
			</div>
		</div>

		<div id="cat_body">
			<div id="filter_table">
				<div class="filter_container">
					<div class="filter_head">
						Price limit
					</div>
					<div class="filter_body" style="padding-top:20px;">
						  <div id="slider-range"></div>
						  <div id="slider-values">
						  		<div id="value_left">Rs. 0</div>
						  		<div id="value_right">Rs. 5000</div>
						  </div>
					</div>
				</div>

				<div id="filter_color" class="filter_container">
					<div class="filter_head">
						Select Color
					</div>
					<div class="filter_body">
						  <div class="single_color">
						  		<div>Red</div>
						  		<div class="color_option"><input class="check" type="checkbox" name="color1"></div>
						  </div>
						  <div class="single_color">
						  		<div>Green</div>
						  		<div class="color_option"><input class="check" type="checkbox" name="color2"></div>
						  </div>
						  <div class="single_color">
						  		<div>Blue</div>
						  		<div class="color_option"><input class="check" type="checkbox" name="color3"></div>
						  </div>
						  <div class="single_color">
						  		<div>Pink</div>
						  		<div class="color_option"><input class="check" type="checkbox" name="color3"></div>
						  </div>
						  <div class="single_color">
						  		<div>Black</div>
						  		<div class="color_option"><input class="check" type="checkbox" name="color3"></div>
						  </div>
						  <div class="single_color">
						  		<div>White</div>
						  		<div class="color_option"><input class="check" type="checkbox" name="color3"></div>
						  </div>
						  <div class="single_color">
						  		<div>Grey</div>
						  		<div class="color_option"><input class="check" type="checkbox" name="color3"></div>
						  </div>
						  <div class="single_color">
						  		<div>Yellow</div>
						  		<div class="color_option"><input class="check" type="checkbox" name="color3"></div>
						  </div>
					</div>
				</div>

				<div id="filter_offers" class="filter_container">
					<div class="filter_head">
						Select Offers
					</div>
					<div class="filter_body">
						  <div> Above: </div>
						  <div id="offers_list">
						  		<div class="single_offer">
						  			<div><input class="radio_" type="radio" name="10"></div>
						  			<div class="offer_val">10%</div>
						  		</div>
						  		<div class="single_offer">
						  			<div><input class="radio_" type="radio" name="20"></div>
						  			<div class="offer_val">20%</div>
						  		</div>
						  		<div class="single_offer">
						  			<div><input class="radio_" type="radio" name="30"></div>
						  			<div class="offer_val">30%</div>
						  		</div>
						  		<div class="single_offer">
						  			<div><input class="radio_" type="radio" name="40"></div>
						  			<div class="offer_val">40%</div>
						  		</div>
						  </div>
					</div>
				</div>

				<div id="filter_category" class="filter_container" style="margin-bottom:0px;">
					<div class="filter_head">
						Select Category
					</div>
					<div class="filter_body">
						  <div style="vertical-align:bottom;margin-bottom:5px;"><div style="display:inline-block;vertical-align:top"><input id="all_category" type="radio" name="all"></div><div style="display:inline-block">&nbsp;&nbsp;All</div></div>
						  <div id="category_list">
						  		<div class="single_category">
						  			<div class="cat_checkbox"><input class="cat_check" type="checkbox" name="Pant"></div>
						  			<div class="cat_name">Pants</div>
						  		</div>
						  		<div class="single_category">
						  			<div class="cat_checkbox"><input class="cat_check" type="checkbox" name="ardigan"></div>
						  			<div class="cat_name">Cardigans</div>
						  		</div>
						  		<div class="single_category">
						  			<div class="cat_checkbox"><input class="cat_check" type="checkbox" name="top"></div>
						  			<div class="cat_name">Tops</div>
						  		</div>
						  		<div class="single_category">
						  			<div class="cat_checkbox"><input class="cat_check" type="checkbox" name="bottom"></div>
						  			<div class="cat_name">Bottoms</div>
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
							//alert(html);
						}
					});
				}

				function selected_colors(){
					var selected_colors_list = new Array();
					$("#filter_color input:checked").each(function(){
						selected_colors_list.push($(this).attr('name'));
					});
					return selected_colors_list ;
				}

				function selected_category(){
					var selected_category_list = new Array();
					$("#category_list input:checked").each(function(){
						selected_category_list.push($(this).attr('name'));
					});
					return selected_category_list ;	
				}

				$(".check").change(function(){
					filter_items();
				});

				$("#all_category").change(function(){
					if($(this).is(":checked")){
						$("#category_list input:checked").each(function(){
							$(this).attr('checked',false);
						});
						filter_items();
					}
				});

				$(".cat_check").change(function(){
					if($(this).is(":checked")){
						$("#all_category").attr("checked",false);
					}
					filter_items();
				});

				function string_price(){
					return ("price>="+$("#slider-range").slider("values",0)*50+" AND price<="+$("#slider-range").slider("values",1)*50);
				}

				function string_color(){
					var color_array = selected_colors();
					if(color_array.length==0){
						return "" ;
					}
					else{
						var return_str = "";
						var i11=0;
						for(i11;i11<color_array.length-1;i11++){
							return_str+= "color LIKE %"+color_array[i11]+"% OR ";
						}
						return_str+= "color LIKE %"+color_array[i11]+"%";

						return return_str;
					}
				}

				function string_category(){
					var category_array = selected_category();
					if(category_array.length==0){
						return "";
					}
					else{
						var return_str = "";
						var i11=0;
						for(i11;i11<category_array.length-1;i11++){
							return_str+= "tags LIKE '%"+category_array[i11]+"%' OR ";
						}
						return_str+= "tags LIKE '%"+category_array[i11]+"%'";

						return return_str;	
					}
				}

				function make_query_string(){
					var query_string = "("+string_price()+")";
					var color_string = string_color();
					var category_string = string_category();
					if(color_string.length>1){
						query_string+=" AND ("+color_string+")";
					}
					if(category_string.length>1){
						query_string+=" AND ("+category_string+")";
					}
					return query_string;
				}

				function filter_items(){
					
					
					$.ajax({
						type:"POST",
						url:"filter_category.php",
						data:"filter_products="+make_query_string(),
						success:function(json){
							data1 = json;
							data = JSON.parse(data1);
							n = 0;
							$("#cat_left").empty();
							$("#cat_middle").empty();
							$("#cat_right").empty();
							if(data.success==1){
								 n =data.data.length;
								 i =0;
								 loadItems(i+9,n);
							}

						}
					});
				}



			</script>
		</div>	
		<?php   include_once("footer.php");	   ?>
		<?php include_once("login_modal.php"); ?>
	</body>	
