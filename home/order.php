<?php session_start();
 ?>
<html language="en">
	<head>
		<?php include_once("head.php"); ?>		
		<link href="order_css.css" rel="stylesheet">
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
			<div id="firstname" class="row1">
				<div class="attr_name">Firstname</div>
				<div class="inputbox"><input name="firstname"></div>
			</div>

			<div id="lastname" class="row1">
				<div class="attr_name">Lastname</div>
				<div class="inputbox"><input name="lastname"></div>
			</div>

			<div id="email" class="row1">
				<div class="attr_name">Email address</div>
				<div class="inputbox"><input name="email"></div>
			</div>

			<div id="mobile" class="row1">
				<div class="attr_name">Mobile</div>
				<div class="inputbox"><input name="mobile"></div>
			</div>

			<hr>

			<div id="address" class="row1">
				<div class="attr_name">Address</div>
				<div class="inputbox"><textarea name="mobile" rows="2" class=""></textarea></div>
			</div>

			<div id="city" class="row1">
				<div class="attr_name">City</div>
				<div class="inputbox"><input name="city"></div>
			</div>

			<div id="country" class="row1">
				<div class="attr_name">Country</div>
				<div class="inputbox">
					<select id="country_select">
						<option>India</option>
					</select>
				</div>
			</div>

			<div id="country" class="row1">
				<div class="attr_name">Country</div>
				<div class="inputbox">
					<select id="country_select">
						<option>Delhi</option>
						<option>Maharashtra</option>
						<option>Madhya Pradesh</option>
						<option>Gujrat</option>
					</select>
				</div>
			</div>

			<div id="pincode" class="row1">
				<div class="attr_name">PIN</div>
				<div class="inputbox"><input name="pincode"></div>
			</div>

			<div id="text_payment">
				Please choose from the following payment option
			</div>
			
		</div>

	</body>
</html>