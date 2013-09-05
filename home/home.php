<html language="en">
	<head>
		<meta charset="utf-8">
		<title>BeyondPink | Unique Women Clothing</title>
		<link rel="stylesheet" href="../css/reset.css">
		<link rel="stylesheet" href="../css/main.css">
		<link href="home_css.css" rel="stylesheet">
		<link href="../css/bootstrap-responsive.css" rel="stylesheet">
		<script type="text/javascript" src="../js/jquery-2.0.3.min.js"></script>
		<script type="text/javascript">	
			$(document).ready(function(){
			var window_width = $(window).width();
			var window_height = $(window).height();
			$("#top").height(0.95*window_height);
		});
	</script>
	</head>

	<body>
		<div id="top" class="top">
			<div id="top_left" class="top_left">
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

		</div>

		<div id="footer">
			<div id="footer_menu">
				<ul>
					<li><a href="#">MY ACCOUNT</a></li>
					<li><a href="#">INFORMATION</a></li>
					<li><a href="#">CUSTOMER SERVICE</a></li>
					<li><a href="#">EXTRAS</a></li>
				</ul>	
			</div>	
			<div id="copyright">
				Beyond Pink | Unique Women Clothing &copy 2013.
			</div>	
		</div>

		<div id="bottom">
			<div id="main" role="main">
	  			<ul id="tiles">
	  				<li class="item"><img src="../img/large/image1.jpg" width="200" ><p>1</p></li>
			        <li class="item"><img src="../img/large/image2.jpg" width="200" ><p>2</p></li>
			        <li class="item"><img src="../img/large/image3.jpg" width="200" ><p>3</p></li>
			        <li class="item"><img src="../img/large/image4.jpg" width="200" ><p>4</p></li>
			        <li class="item"><img src="../img/large/image1.jpg" width="200" ><p>5</p></li>
			        <li class="item"><img src="../img/large/image2.jpg" width="200" ><p>6</p></li>
			        <li class="item"><img src="../img/large/image3.jpg" width="200" ><p>7</p></li>
			        <li class="item"><img src="../img/large/image4.jpg" width="200" ><p>8</p></li>
			        <li class="item"><img src="../img/large/image1.jpg" width="200" ><p>9</p></li>
			        <li class="item"><img src="../img/large/image2.jpg" width="200" ><p>10</p></li>
	  			</ul>	
	  		</div>	
		</div>

  <script src="../js/jquery.imagesloaded.js"></script>
  <script src="../js/jquery.wookmark.js"></script>

  <!-- Once the page is loaded, initalize the plug-in. -->
  <script type="text/javascript">
    (function ($){
      $('#tiles').imagesLoaded(function() {
        // Prepare layout options.
        var options = {
          autoResize: true, // This will auto-update the layout when the browser window is resized.
          container: $('#main'), // Optional, used for some extra CSS styling
          offset: 5, // Optional, the distance between grid items
          outerOffset: 100, // Optional, the distance to the containers border
          itemWidth: 210 // Optional, the width of a grid item
        };

        // Get a reference to your grid items.
        var handler = $('#tiles li');

        // Call the layout function.
        handler.wookmark(options);

        // Capture clicks on grid items.
        handler.click(function(){
          // Randomize the height of the clicked item.
          var newHeight = $('img', this).height() + Math.round(Math.random() * 300 + 30);
          $(this).css('height', newHeight+'px');

          // Update the layout.
          handler.wookmark();
        });
      });
    })(jQuery);
  </script>


	</body>
</html>