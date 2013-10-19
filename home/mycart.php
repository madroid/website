<?php
if(session_id() == '') {
    session_start();
}
?><html language="en">
	<head>
		<?php include_once("head.php"); ?>		
		<link href="mycart_css.css" rel="stylesheet">
		
		<script type="text/javascript">
			$(document).ready(function(){
				
				var mycart = <?php (include_once('../backend/get_cart_elements.php')); ?>;

				for(var i=0;i<mycart.length;i++){
					$('#container').append('<div class="cart_item"><div id="'+mycart[i]['pid']+'" class="cart_image"><img src ="../img/large/'+mycart[i]['pname']+'"></div><div class="cart_price">Rs. <span>'+moneyString(mycart[i]['price'])+'</span></div><div class="cart_specs">size <span class="size">'+mycart[i]['size']+'</span> | quantity <span class="quantity">'+mycart[i]['qty']+'</span></div><div class="cart_edit">EDIT</div></div>');
				}
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
			<div class="head2">
				<img href="#" src="../img/logo/logo2.png">
			</div>	
			<?php include_once("menu.php"); ?>
			
			</div>	
		</div>

		<div id="lines">	
		</div>	

		<div id="container">
				




		</div>	

		<script type="text/javascript">
			$(function(){
				$(".cart_edit").on('click',function(e){
									
					var elem = $(this).parent().children('.cart_image');
					var arr_elem = elem.children(".layer");
					if(arr_elem.length==0){
						elem.append('<div class="cart_edit_hover1 layer"></div>	<div class="layer cart_edit_hover2"><div class="cart_edit_option"><div><select id="select_size"><option>S</option><option>M</option><option>L</option><option>X</option></select>	</div><div><select id="select_qty"><option>1</option><option>2</option><option>3</option><option>4</option></select>	</div><div class="buttons"><div class="hover_button1 cursor" > Done</div><div class="hover_button2 cursor" > Cancel</div></div>	</div></div>');
						elem.children('.cart_edit_hover2').hide();
						elem.children('.cart_edit_hover2').slideDown(800,'easeOutExpo');

						var done = elem.children('.layer').children('.cart_edit_option').children('.buttons').children('.hover_button1');
						var cancel = elem.children('.layer').children('.cart_edit_option').children('.buttons').children('.hover_button2');

						var val_size = $(this).parent().children(".cart_specs").children(".size");
						var val_qty  = $(this).parent().children(".cart_specs").children(".quantity");

						var layer_val_size = elem.children(".cart_edit_hover2").children(".cart_edit_option").children("div").children("#select_size");
						var layer_val_qty = elem.children(".cart_edit_hover2").children(".cart_edit_option").children("div").children("#select_qty");

						layer_val_size.val(val_size.html());
						layer_val_qty.val(val_qty.html());
						
						done.on('click',function(){
							val_size.html(layer_val_size.val());
							val_qty.html(layer_val_qty.val());
							edit_cart(elem.attr('id'),layer_val_size.val(),layer_val_qty.val());
							cancel.click();
						});

						cancel.on('click',function(){
							elem.children(".cart_edit_hover1").remove();
							elem.children('.cart_edit_hover2').slideUp(function(){
								$(this).remove();
							});
						});			


					}

				});

			});

			function edit_cart(cart_item_id,cart_item_size,cart_item_qty){
				
				
					$("#select_size").val("Select size");
					$("#select_qty").val("Select quantity");
					$.ajax({
						type:'POST',
						url:'session.php',
						data:'item_id='+cart_item_id+"&item_size="+cart_item_size+"&item_qty="+cart_item_qty,
						success:function(html){
							
						}
					});	
				
			}

		</script>
	</body>	
</html>	