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
				
				var mycart = <?php include_once('../backend/get_cart_elements.php'); ?>;

				function addItem(pid,pprice,pname,psize,pqty){
					var str = '<div class="cart_item"><div id="'+pid+'" class="cart_image"></div><div class="cart_price">Rs. <span>'+moneyString(pprice)+'</span></div><div class="cart_specs">size <span class="size">'+psize+'</span> | quantity <span class="quantity">'+pqty+'</span></div><div class="cart_edit">EDIT</div></div>';

					$('<img src ="../img/large/'+pname+'">').load(function(){
						var left_ht = $("#cat_left").height();
						var mid_ht = $("#cat_middle").height();
						var right_ht = $("#cat_right").height();
						if(left_ht<=mid_ht && left_ht<=right_ht){
							$(str).appendTo("#cat_left");
							$(this).appendTo("#"+pid);
						}
						else if(mid_ht<=left_ht && mid_ht<=right_ht){
							$(str).appendTo("#cat_middle");
							$(this).appendTo("#"+pid);
						}
						else{
							$(str).appendTo("#cat_right");
							$(this).appendTo("#"+pid);
						}
					});
				}


				
				for(var i=0;i<mycart.length;i++){
					addItem(mycart[i]['pid'],mycart[i]['price'],mycart[i]['pname'],mycart[i]['size'],mycart[i]['qty']);
				}

			});

			
		</script>
	</head>	

	<body>
		
		<?php if(isset($_SESSION['email'])) {include_once('login_header.php');} ?>		
		
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
				
				<div id="cat_left" class="column">
				</div>
				<div id="cat_middle" class="column">
				</div>
				<div id="cat_right" class="column">
				</div>				
				<div class="checkout_table">
				<table>
					<tr>
						<td>Sub Total</td>
						<td>Rs. <span id="subtotal">9999</span></td>
					</tr>
					<tr>
						<td>Shipping</td>
						<td>*TBD</td>
					</tr>
					<tr rowspan="2">
						<td>Total</td>
						<td>Rs. <span id="total_money">9999</span></td>
					</tr>
				</table>
					
					<div  id="proceed_button"><a href="order.php"><div>
						PROCEED TO CHECKOUT</div></a>
					</a></div>

					
					
					<div id="continue_button">
						<div><a href="category.php?tag=Women">continue shopping</div>
					</div>
					
				</div>


		</div>	

		<!-------------------------------------------------------------------------------->
			<?php include_once("login_modal.php"); ?>
			<?php   include_once("footer.php");	   ?>
		<!-------------------------------------------------------------------------------->


		<script type="text/javascript">
			
		
			 
                    $(document).on('click','.cart_edit',function(){
                    	alert(1);
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