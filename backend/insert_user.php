<?php

class USER_UPDATE{
	
	
	function __construct() {
        // connecting to database
		
    }
	
	function connectDB(){
		require_once('connect.php');
		$db = new DB_CONNECT();
	}
	
	public function personal($email,$fname,$lname,$mobile){
		require_once('connect.php');
		$db = new DB_CONNECT();
		$response = array();
		$query = "UPDATE user SET firstname='$fname', lastname='$lname', mobile='$mobile' WHERE email='$email'";
		$result = mysql_query($query);
		if($result>0){
			$response['success'] = 1;
			$response['message'] = "personal info updated succesfully!";
		}
		else{
			$response['success'] = 0;
			$response['message'] = "personal info updation failed!";
		}
		return json_encode($response);
	}
	
	public function changepwd($email,$old,$new){
		require_once('connect.php');
		$db = new DB_CONNECT();
		
		$response = array();
		$query1 = "SELECT passwd FROM user WHERE email='$email'";
		$result1 = mysql_query($query1);
		if(empty($result1)){
			$response['success'] = 0;
			$response['message'] = "Got empty result";
		}
		else{
		
			if(mysql_num_rows($result1)>0){
				$arr = mysql_fetch_assoc($result1);
				
				if($old == $arr['passwd']){
					
					$query = "UPDATE user SET passwd='$new' WHERE email = '$email'";
					$result = mysql_query($query);
					if($result>0){
						$response['success'] = 1;
						$response['message'] = "Password changed succesfully";
					}
					else{
						$response['success'] = 4;
						$response['message'] = "Failed to change password";
					}
				}
				else{
					$response['success'] = 3;
					$response['message'] = "Incorrect old password!";
				}
			}
			else{
				$response['success'] = 2;
				$response['message'] = "No such user exists";
			}
		}
		return json_encode($response);
	}
	
	public function address($email,$recipient_name, $address,$city,$state,$country,$postal){
		require_once('connect.php');
		$db = new DB_CONNECT();
		
		$query = "UPDATE user SET recipient_name='$recipient_name', address='$address', city='$city', state='$state', country='$country', postal_code='$postal', isset_address=1 WHERE email='$email'";
		$result = mysql_query($query) or die(mysql_error());
		$response = array();
		if($result>0){
			$response['success'] = 1;
			$response['message'] = "Address updated successfully!";
		}
		else{
			$response['success'] = 0;
			$response['message'] = "Address updation failed";
		}
		
		return json_encode($response);
	}
	
	public function add_item($email,$pid,$col){
		require_once('connect.php');
		$db = new DB_CONNECT();
		$pid1 = $pid."#";
		$query = "UPDATE user SET $col=IFNULL(CONCAT($col,'$pid1'),'$pid1') WHERE email='$email'";
		$result = mysql_query($query);
		if($result>0){
			$response['success'] = 1;
			$response['message'] = "Item added successfully!";
		}
		else{
			$response['success'] = 0;
			$response['message'] = "Addition of item failed";
		}
		return json_encode($response);
	}
	
	public function add_favlist($email,$pid){
		return $this->add_item($email,$pid,"fav_list");
	}
	
	public function add_wardrobe($email,$pid){
		return $this->add_item($email,$pid,"wardrobe");
	}
	
	public function remove_item($email,$pid,$col){
		require_once('connect.php');
		$db = new DB_CONNECT();
		$pid1 = $pid."#";
		$query = "UPDATE user SET $col=REPLACE($col,'$pid1','') WHERE email='$email'";
		$result = mysql_query($query);
		if($result>0){
			$response['success'] = 1;
			$response['message'] = "Item removed successfully!";
		}
		else{
			$response['success'] = 0;
			$response['message'] = "removal of item failed";
		}
		return json_encode($response);
	}
	
	public function remove_favlist($email,$pid){
		return $this->remove_item($email,$pid,'fav_list');
	}
	
	public function remove_wardrobe($email,$pid){
		return $this->remove_item($email,$pid,'wardrobe');
	}
	
	public function subscribe($email,$bool){
		require_once('connect.php');
		$db = new DB_CONNECT();
		$query ="";
		if($bool){
			$query = "UPDATE user SET isset_subscribe=1 WHERE email='$email'";
			$result = mysql_query($query);
			if($result>0){
				$response['success'] = 1;
				$response['message'] = "Subscribed successfully!";
			}
			else{
				$response['success'] = 0;
				$response['message'] = "Subscription failed";
			}
		}
		else{
			$query = "UPDATE user SET isset_subscribe=0 WHERE email='$email'";
			$result = mysql_query($query);
			if($result>0){
				$response['success'] = 1;
				$response['message'] = "Unsubscribed successfully!";
			}
			else{
				$response['success'] = 0;
				$response['message'] = "Unsubscription Failed";
			}
		}
		
		return json_encode($response);
	}
}

// require_once('insert_user.php');
	// $insert= new USER_UPDATE();
	// $res = $insert-> subscribe("abc@gmail.com",0);
	// echo "<br>";
	// echo "$res";

?>