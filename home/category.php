<html language="en">
	<head>
	
		<?php include_once("head.php");?>		
		<link href="category.css" rel="stylesheet">
		<script type="text/javascript">	
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
		<div id="top">
			<div id="logo" class="logo">
					<img src="../layout/logo.png" alt="BeyondPink Logo"/>
				</div>
				<div id="menu" class="menu">
					<ul>	
						<li><a href="#">Women</a></li>.
						<li class="dropdown"><a href="#">Bottom</a>
							<ul class="sub_menu">
								<li><a href="#">Pant</a></li>
								<li><a href="#">Shorts</a></li>
								<li><a href="#">Skirts</a></li>
							</ul>	
						</li>.
						<li><a href="#">Jumpsuite</a></li>.
						<li><a href="#">Footwear</a></li>.
						<li><a href="#">Bellerinas</a></li>.
						<li class="dropdown"><a href="#">Winter Wear</a>
							<ul class="sub_menu">
								<li><a href="#">Cardigan</a></li>
								<li><a href="#">Jacket</a></li>
								<li><a href="#">Sweater</a></li>
							</ul>	
						</li>.
						<li><a href="#">Special Requests</a></li>.
					</ul>
				</div>
			</div>
		

		<div id="cat_body">
			<div id="filter">
				<h4>Filter Your Items</h4>
				<div class="accordion" id="accordion2">
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne"> [ <span class="sign"> - </span> ] &nbsp;&nbsp;&nbsp; Price</a>
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
						<div id="img1" class="item">
							<div>
								<img src="../img/small/image3.jpg" class="img">
							</div>	
							<div class="title">
								<img src="../layout/heart.png"/>
							</div>
							<hr>
							<div class="description">
								<div class="colors">
									<div class="circle" style="background-color:#F26836"></div>
									<div class="circle" style="background-color:#95948F"></div>
									<div class="circle" style="background-color:#F86FED"></div>
									<div class="circle" style="background-color:#E4E13F"></div>
								</div>
							</div>	
						</div>


					<div id="img2" class="item">
						<div>
							<img src="../img/small/image2.jpg" class="img">
						</div>	
						<div class="title">
							<img src="../layout/heart.png"/>
						</div>
						<hr>
						<div class="description">
							<div class="colors">
								<div class="circle" style="background-color:#F26836"></div>
								<div class="circle" style="background-color:#95948F"></div>
								<div class="circle" style="background-color:#F86FED"></div>
								<div class="circle" style="background-color:#E4E13F"></div>
							</div>
						</div>	
					</div>
				</div>
				<div id="cat_middle" class="column">
					<div id="img1" class="item">
						<div>
							<img src="../img/small/image1.jpg" class="img">
						</div>	
						<div class="title">
							<img src="../layout/heart.png"/>
						</div>
						<hr>
						<div class="description">
							<div class="colors">
								<div class="circle" style="background-color:#F26836"></div>
								<div class="circle" style="background-color:#95948F"></div>
								<div class="circle" style="background-color:#F86FED"></div>
								<div class="circle" style="background-color:#E4E13F"></div>
							</div>
						</div>	
					</div>

					<div id="img0" class="item">
							<div>
								<img src="../img/small/image4.jpg" class="img">
							</div>	
							<div class="title">
								<img src="../layout/heart.png"/>
							</div>
							<hr>
							<div class="description">
								<div class="colors">
									<div class="circle" style="background-color:#F26836"></div>
									<div class="circle" style="background-color:#95948F"></div>
									<div class="circle" style="background-color:#F86FED"></div>
									<div class="circle" style="background-color:#E4E13F"></div>
								</div>
							</div>	
						</div>
				</div>
				<div id="cat_right" class="column">
											<div id="img0" class="item">
							<div>
								<img src="../img/small/image4.jpg" class="img">
							</div>	
							<div class="title">
								<img src="../layout/heart.png"/>
							</div>
							<hr>
							<div class="description">
								<div class="colors">
									<div class="circle" style="background-color:#F26836"></div>
									<div class="circle" style="background-color:#95948F"></div>
									<div class="circle" style="background-color:#F86FED"></div>
									<div class="circle" style="background-color:#E4E13F"></div>
								</div>
							</div>	
						</div>

				</div>
			</div>	
		</div>	
		<?php   include_once("footer.php");	   ?>
		<?php include_once("login_modal.php"); ?>
	</body>	
