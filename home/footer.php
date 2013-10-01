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
<?php

	function set_email_session($email){

		if(!isset($_SESSION)) { session_start(); }
		$_SESSION['email'] = $email ;
	}

?>
<script type="text/javascript">	
	function userlogin1(){
			$('#login_box').modal('show');
		

	}

	function set_email(email){

	}

	
	
	
</script>