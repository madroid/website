<!DOCTYPE html>
<html lang="en">
<head>

	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/bootstrap-responsive.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	
	<script type="text/javascript" src="../js/jquery.min.js"></script>	
	<script type="text/javascript" src="../js/jqueryui.min.js"></script>	
	<script type="text/javascript">

			var img_width ;
			var img_height;
			var img_left;
			var img_top;
			var ratio_x ;
			var ratio_y ;
	
	$(document).ready(function() {
			
			$("#normal").mouseenter(function(){
				var parentOffset = $(this).offset(); 
				img_width = $("#normal").width();
			 	img_height = $("#normal").height();
			  	img_left = parentOffset.left;
			 	img_top = parentOffset.top;	

			 	var tint_str = '<div id=\"tintEffect\" class=\"tint\" style=\"width:'+ img_width+'px; height:'+ img_height+'px ;top:'+ img_top+'px; left:'+ img_left+' \"></div>';
			 	$(this).append(tint_str);
			 	$("#tintEffect").animate({opacity:0.2},10,"linear");
			 	
			 	$("#img").append('<div id="zoomed" class="zoomed" style="width:'+img_width+'px;height:'+img_height+'px;top:'+img_top+'px;left:'+(img_width+img_left)+'px ;"><img id="large_image" class="large_image" src="../img/large/image1.JPG" style="position:absolute;max-width:none;"/></3iv>');
			 	// alert(($("#large_image").width()/$("#small_image").width())+" "+($("#large_image").height()/$("#small_image").height()))
			 	var rt = ($("#large_image").width()/$("#small_image").width());	
				$(this).append('<div id="lens" class="lens" style="width:'+img_width/rt+'px;height:'+img_height/rt+'px">'+'<img id="overlay_image" src="../img/small/image1.JPG" width='+img_width+' height='+img_height+' style="position:absolute;max-width:none;top:'+img_top+'px; left:'+img_left+'px;"/>'+'</div3');	 	
			 	$("#lens").css({width:img_width/rt, height:img_height/rt});
			});

			$("#normal").mousemove(function(e){
			   	lens(img_top,img_left,img_height+img_top,img_left+img_width,e.pageX,e.pageY,($("#large_image").width()/$("#small_image").width()));
			});


			$("#normal").mouseleave(function(){
				$("#tintEffect").animate({opacity:0.0},100,"linear");
				$("#lens").remove();
				$("#tintEffect").remove();
				$("#zoomed").remove();
			});
	});



	function lens(top1,left1,bottom1,right1,mouseX,mouseY,ratio){
			var widthby2 = $("#lens").outerWidth() /2;
			var heightby2 = $("#lens").outerHeight()/2;
			var wid = $("#lens").width();
			var ht = $("#lens").height();

			// Checking top and left coordinates of 
		    if((mouseX-widthby2)<=left1){
		   		$("#lens").clearQueue().animate({"left":left1},300,"easeOutQuint");
		   		$("#overlay_image").clearQueue().animate({"left":(wid-widthby2*2)/2},300,"easeOutQuint");
		   		$("#large_image").clearQueue().animate({"left":0},600,"easeOutCirc");
		    }
		    else if((mouseX+widthby2)>=right1){
		    	$("#lens").clearQueue().animate({"left":right1-(widthby2*2)},300,"easeOutQuint");
		    	$("#overlay_image").clearQueue().animate({"left":wid-img_width-(wid-widthby2*2)/2},300,"easeOutQuint");
		    	$("#large_image").clearQueue().animate({"left":-(img_width- widthby2*2)*ratio},600,"easeOutCirc");
		    }
		    else{
		    	$("#lens").clearQueue().animate({"left":mouseX-widthby2},300,"easeOutQuint");
		    	$("#overlay_image").clearQueue().animate({"left":left1+(wid/2)-mouseX},300,"easeOutQuint");
		    	$("#large_image").clearQueue().animate({"left":img_width/2-((mouseX-left1)*ratio)},600,"easeOutCirc");
		    }

		    if((mouseY-heightby2)<=top1){
		    	$("#lens").clearQueue().animate({"top":top1},300,"easeOutQuint");
		    	$("#overlay_image").clearQueue().animate({"top":(ht- heightby2*2)/2},300,"easeOutQuint");
		    	$("#large_image").clearQueue().animate({"top":0},600,"easeOutCirc");
		    }
		    else if((mouseY+heightby2)>=bottom1){
		    	$("#lens").clearQueue().animate({"top":bottom1-(heightby2*2)},300,"easeOutQuint");	
		    	$("#overlay_image").clearQueue().animate({"top":ht-img_height-(ht- heightby2*2)/2},300,"easeOutQuint");
		    	$("#large_image").clearQueue().animate({"top":-(img_height- heightby2*2)*ratio},600,"easeOutCirc");
		    }
		    else{
		    	$("#lens").clearQueue().animate({"top":mouseY-heightby2},300,"easeOutQuint");		
		    	$("#overlay_image").clearQueue().animate({"top":top1+(ht/2)-mouseY},300,"easeOutQuint");
		    	$("#large_image").clearQueue().animate({"top":img_height/2-((mouseY-top1)*ratio)},600,"easeOutCirc");
		    }
		}	</script>

</head>
<body>			
		<div id="img" class="img">
			<div id="normal" class="image-normal">
				<img id="small_image" src="../img/small/image1.JPG">
			</div>
			
		</div>	

		
			
		<script type="text/javascript" src="../js/bootstrap.js"></script>
			
</body>
</html>