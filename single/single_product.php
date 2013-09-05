<!DOCTYPE html>
<html lang="en">
<head>

	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/bootstrap-responsive.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	
	<script type="text/javascript" src="../js/jquery.js"></script>	
	<script type="text/javascript">
	var div ;
	$(document).ready(function() {
		$("#lens").hide();
		// $("#zoomed").hide();

		// $("#zoomed").css({"top":200,"left":200});
		

		$("#normal1").mousemove(function(e){
		   var parentOffset = $(this).parent().offset(); 
		   var relX = e.pageX-parentOffset.left;
		   var relY = e.pageY-parentOffset.top ;
		   lens(parentOffset.top,parentOffset.left,parentOffset.top+($("#normal1").height()),parentOffset.left+($("#normal1").width()),e.pageX,
		   	e.pageY);		   
		});


		$("#normal1").mouseout(function(){
			$("#lens").hide();
			var parentOffset = $(this).parent().offset(); 
			var ht = $(this).height();
			var wd = $(this).width();
			var x = parentOffset.left + wd/2 ;
			var y = parentOffset.top + ht/2 ;
			$("#zoomed").css({left:x,top:y,width:0,height:0});
			$("#tintEffect").hide("ease");
		});

		$("#normal1").mouseenter(function(){
			var parentOffset = $(this).parent().offset(); 
			var x = parentOffset.left + ($(this).width());
			var y = parentOffset.top;
			var ht = $(this).height();
			var wd = $(this).width();
			var x1 = parentOffset.left;
			$("#zoomed").css({left:x,top:y,width:wd,height:ht});
			$("#lens").show();
		});	


	});	

		function lens(top1,left1,bottom1,right1,mouseX,mouseY){
			var widthby2 = $("#lens").outerWidth() /2;
			var heightby2 = $("#lens").outerHeight()/2;

			// Checking top and left coordinates of 
		    if((mouseX-widthby2)<=left1){
		   		$("#lens").animate({"left":left1},0,"ease");
		    }
		    else if((mouseX+widthby2)>=right1){
		    	$("#lens").animate({"left":right1-(widthby2*2)},0,"ease");
		    }
		    else{
		    	$("#lens").animate({"left":mouseX-widthby2},0,"ease");
		    }

		    if((mouseY-heightby2)<=top1){
		    	$("#lens").animate({"top":top1},0,"ease");
		    }
		    else if((mouseY+heightby2)>=bottom1){
		    	$("#lens").animate({"top":bottom1-(heightby2*2)},0,"ease");	
		    }
		    else{
		    	$("#lens").animate({"top":mouseY-heightby2},0,"ease");		
		    }
		}
	</script>

</head>
<body>	
		<div id="img" class="img">
			

			<div id="zoomed" class="zoomed">
				<img src="../img/AAP_216.JPG" width="">
			</div>

			<div id="normal" class="image-normal">
				<img id="normal1" src="../img/AAP_216.JPG">
			</div>


		</div>

		
		<script type="text/javascript" src="../js/bootstrap.js"></script>
			
</body>
</html>