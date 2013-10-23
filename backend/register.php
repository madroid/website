<?php
if(session_id() == '') {
    session_start();
}


$response = array();
if(isset($_POST['email']) && isset($_POST['passwd'])){
	$email = $_POST['email'] ;
	$passwd = sha1(md5($_POST['passwd'])) ;
	
	require_once('connect.php');
	$db = new DB_CONNECT();
	
	$query_check_emailID = "SELECT email FROM user WHERE email='$email'";
	$result = mysql_query($query_check_emailID);
	$isExists = false ;
	if(!empty($result)){
		if(mysql_num_rows($result)>0){
			$isExists = true ;
		}
	}
	if(!$isExists){
		$query_create_new_user = "INSERT INTO user (email,passwd)".
								 "VALUES('$email','$passwd')" ;

		$result_iscreated_new_user = mysql_query($query_create_new_user) ;
		if($result_iscreated_new_user){
			$response['success'] = 1 ;
			$response['message'] = "New User created successfully!";
			$response['name'] = null ;
			$_SESSION['email'] = $email;
			$_SESSION['cart'] = array();
		}
		else{
			$response['success'] = 2 ;
			$response['message'] = "Insertion failed due to some reason ";
		}
	}
	else{
			$response['success'] = 3 ;
			$response['message'] = "User already exists!";
	}	
}
else{
	$response['success'] = 4 ;
	$response['message'] = "Required fields Not available";
}

echo json_encode($response);
?>