<div id="footer">
	<div id="footer_menu">
		<ul>
			<li><a onclick="userlogin1()" class="cursor" data-toggle="modal">MY ACCOUNT</a></li>
			<li><a href="#">INFORMATION</a></li>
			<li><a href="#">CUSTOMER SERVICE</a></li>
			<li><a href="#">EXTRAS</a></li>
		</ul>	
	</div>	
	<div id="copyright">
		Beyond Pink | Unique Women Clothing &copy 2013.
	</div>	
</div>

<script type="text/javascript">	
	var isLoggedin = 
	<?php if(isset($_SESSION['email'])){
			echo "1";
		}
		else{
			echo "0";
		}	
	?> ;
	function userlogin1(){

		if(isLoggedin=="0"){
			$('#login_box').modal('show');
		}
		else{
			window.location.href = "profile.php" ;
		}
		

	}

	function set_email(email){

	}


	function signin(){
		var inputUsername = $.trim($("#inputEmail").val());
		var inputPasswd = $.trim($("#inputPassword").val());
		
		$.ajax({
			type:"POST",
			url:"../backend/login.php",
			data:"email="+inputUsername+"&passwd="+inputPasswd,
			success:function(json){
				$('#login_box').modal('hide');
				var jobj = JSON.parse(json);
				alert("Login successful");
				isLoggedin = "1";
			}
		});
	}

	
	
	
</script>