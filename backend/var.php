<?php
	
	require_once('connect.php');
	$db = new DB_CONNECT();

	$query = "INSERT INTO vars (var_name,var_value)".
			 "VALUES ('product',1000), ('home',"")";

	$result = mysql_query($query)	or die(mysql_error());

	echo "Success!";


?>