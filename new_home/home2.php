<html language="en">
	<head>
		<?php include_once("head.php");?>
		<link href="home_css.css" rel="stylesheet">
		<script type="text/javascript">
			$(document).ready(function(){
				$("#dress").width($("#main_pic").width()-10);
			});
		</script>
	</head>

	<body>
		
			<div class="row-fluid ">
				<div class="span7 top_padding">

					<div id="logo" class="logo">
						<img src="../layout/logo.png" alt="BeyondPink Logo"/>
					</div>

					<div id="menu" class="menu">
						<ul>	
							<li><a href="#">Women</a></li>
							<li><a href="#">Bottom</a></li>
							<li><a href="#">Jumpsuites</a></li>
							<li><a href="#">Footwears</a></li>
							<li><a href="#">Bellerinas</a></li>
							<li><a href="#">Winter Wear</a></li>
							<li><a href="#">Special Requests</a></li>
						</ul>
					</div>

				</div>
				
				<div class="span5"  id="main_pic">
					<img id="dress"  src="../layout/3.png" alt="Dress of the month"/>
				</div>

			</div>	


		
	<?php include_once("footer.php");?>

<!-----------------------------------------------Main gallery starts now ------------------------------------------------------------->
	
<!------------------------------------------------------------------------------------------------------------------------------------>
	<script type="text/javascript"></script>
	</body>
</html>