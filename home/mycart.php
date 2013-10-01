<?php session_start();
 ?>
<html language="en">
	<head>
		<?php include_once("head.php"); ?>		
		<link href="mycart_css.css" rel="stylesheet">
		<link href="item_common_css.css" rel="stylesheet">
		<script type="text/javascript">
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
					<img src ="../img/large/BeyondPink_1004_image4.jpg">
					<div class="cart_edit_hover">
						<center><div class="cart_edit_option">
							<div>
								<select id="select_size">
									<option>S</option>
									<option>M</option>
									<option>L</option>
									<option>X</option>
								</select>	
							</div>
							<div>
								<select id="select_qty">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>	
							</div>
						</div>
						<div class="buttons">
							<div class="hover_button1" > Done
							</div>
							<div class="hover_button2" > Cancel
							</div>
						</div>	
					</center>
					</div>
				</div>
				<div class="cart_price">
					Rs. <span>1,200</span>
				</div>	
				<div class="cart_specs">
					size S | quantity 4
				</div>
				<div class="cart_edit">
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

			});
		</script>
	</body>	
</html>	