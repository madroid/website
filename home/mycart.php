<?php session_start();
?>
<html language="en">
	<head>
		<?php include_once("head.php"); ?>		
		<link href="mycart_css.css" rel="stylesheet">
		<link href="item_common_css.css" rel="stylesheet">
		<script type="text/javascript">
			$(document).ready(function(){
				$(".layer").hide();
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

		<div id="head2" style="padding-left:100px;">
			<div id="id1">
				<div class="head2" style="margin-right:150px">
					<img href="#" src="../img/logo/logo.png">
				</div>	
			</div>
		</div>

		<div id="lines">	
		</div>	

		<div id="container">
			<div class="cart_item">
				<div class="cart_image">
					<img src ="../img/large/BeyondPink_1006_image6.jpg">
					
				</div>
				<div class="cart_price">
					Rs. <span>1,200</span>
				</div>	
				<div class="cart_specs">
					size S | quantity 4
				</div>
				<div class="cart_edit cursor">
					EDIT
				</div>	
			</div>	

			<div id="checkout">
				<div id="proceed">
					PROCEED TO CHECKOUT
				</div>	
			</div>	



		</div>	
	
		<script type="text/javascript">
			$(".cart_edit").on('click',function(){

				var elem = $(this).parent().children('.cart_image');
				elem.append('<div class="layer"><div class="cart_edit_hover1"></div>	<div class="cart_edit_hover2"><div class="cart_edit_option"><div><select id="select_size"><option selected="true" style="display:none;">Select size</option><option>S</option><option>M</option><option>L</option><option>X</option></select>	</div><div><select id="select_qty"><option selected="true" style="display:none;">Select quantity</option><option>1</option><option>2</option><option>3</option><option>4</option></select>	</div><div class="buttons"><div class="hover_button1 cursor" > Done</div><div class="hover_button2 cursor" > Cancel</div></div>	</div></div></div>');

				var done = elem.children('.layer').children('.cart_edit_hover2').children('.cart_edit_option').children('.buttons').children('.hover_button1');
				var cancel = elem.children('.layer').children('.cart_edit_hover2').children('.cart_edit_option').children('.buttons').children('.hover_button2');
				done.on('click',function(){
					alert(1);
				});

				cancel.on('click',function(){
					elem.children('.layer').remove();
				});			

			});
		</script>
	</body>	
</html>	