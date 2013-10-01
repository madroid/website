<?php session_start();
 ?>
<html language="en">
	<head>
		<?php include_once("head.php"); ?>		
		<link href="item_css.css" rel="stylesheet">
		<link href="item_common_css.css" rel="stylesheet">
		<script type="text/javascript">
			var new_item_id;
			var data;
			function moneyString(money){
				var money_len = money.length;
				if(money_len<=3){
					return money;
				}
				else if(money_len==4) {
					return (money.substr(0,1)+","+money.substr(1));
				}
				else{
					return (money.substr(0,2)+","+money.substr(2));
				}
			}

			function loadNewData(){
				$("#main_img").attr('src','../img/large/'+data.data[new_item_id]['pname']);
				$('#title').html(data.data[new_item_id]['title']);
				$('#price').html(moneyString(data.data[new_item_id]['price']));	
			}

			$(document).ready(function(){
				$('body').append('<div class="checkout"><img id="checkout" src="../img/item/cart.png"/></div>');
				var window_width = $(window).width() -  $(".checkout").width();
				var window_height = $(window).height() -  $(".checkout").height();
				$(".checkout").css("top",window_height-145);
				$(".checkout").css("left",window_width-145);
				
				new_item_id = <?php echo $_SESSION['item_id']; ?>;
				data = <?php echo $_SESSION['item_list']; ?>;
				loadNewData();
					
			});

		</script>
	</head>

	<body>
		<div id="profile_header">
			<div id="profile_header1">
				<span class="profile_header"><a href="#">Home</a></span>
				<div class="separator">&nbsp;</div>
				<span class="profile_header"><a href="#">Profile</a></span>
			</div>
		</div>

		<div id="head2">
			<div id="id1">
			<div class="head2" style="margin-right:150px">
				<img href="#" src="../img/logo/logo.png">
			</div>	

			<div class="head2">
				
				<span id="category">Category: </span>
				<select id="cat" style="margin-bottom:0px;width:120px">
					<option>Women</option>
					<option>Pant</option>
					<option>Shorts</option>
					<option>Skirts</option>
					<option>Cardigan</option>
					<option>Jumpsuite</option>
					<option>Sweater</option>
				</select>	
			</div>
			</div>	
		</div>

		<div id="lines">	
		</div>	
		<div id="container">
			<div id="left_arrow">
				<img src="../img/item/arrowL.png"  class="cursor" onclick="leftClick()">
			</div>	
			<div id="products">
				<div id="title">The beautiful blue dress</div>
				<div id="photo">
					<img id="main_img" src="">
				</div>	
			</div>
			<div id="details">	
				<div id="description">
						Dress to impress or keep things casual with this original faux halter dress that’s made from Rayon.
				</div>	
				<div id="right_arrow">
					<img src="../img/item/arrowR.png"  class="cursor" onclick="rightClick()">
				</div>
				<div id="price_div">
					<div id="status">Available</div>
					<div>Rs.<span id="price"></span></div>
				</div>
				<div id="options">
					<select id="select_size" style="margin-bottom:0px;width:120px">
						<option>S</option>
						<option>M</option>
						<option>L</option>
						<option>X</option>
					</select>	
					<select id="select_qty" style="margin-bottom:0px;width:120px">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>	
				</div>	
				<div id="button_add">
					<img src="../img/item/add_to_bag.png" class="cursor" onclick="addToCart()">
				</div>	
			</div>	

		</div>	
		<script type="text/javascript">
			$("#cat").on('change',function(){
				var cat = $("#cat").val();
				$.ajax({
					type:'POST',
					url:'../backend/populate.php',
					data:'category='+cat,
					success:function(json){
						data = JSON.parse(json);
						set_param_session(0,json);
						new_item_id = 0;
						loadNewData();
					}
				});
			});

			function leftClick(){
				if(new_item_id>0){
					new_item_id--;
					set_item_session(new_item_id);
					loadNewData();
				}
			}

			function rightClick(){
				if(new_item_id<data.data.length-1){
					new_item_id++;
					set_item_session(new_item_id);
					loadNewData();
				}
			}

			function set_item_session(item_id){
				$.ajax({
					type:'POST',
					url:'session.php',
					data:'item_id='+item_id
				});
			}

			function set_param_session(item_id,item_list){
				$.ajax({
					type:'POST',
					url:'session.php',
					data:'item_id='+item_id+"&item_list="+item_list
				});
			}

			function addToCart(){
				$('#select_size').tooltip("show");
			}

		</script>
	</body>

</html>		