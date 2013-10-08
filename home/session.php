<?php
if(session_id() == '') {
    session_start();
}


if( isset($_POST['item_id']) && isset($_POST['item_price']) && isset($_POST['item_size']) && isset($_POST['item_qty']) && isset($_POST['item_name'])){
	$i11 = 0 ;
	$check = 0;
	$id = $_POST['item_id'];
	for($i11;$i11<sizeof($_SESSION['cart']);$i11++){
		if($id==$_SESSION['cart'][$i11]['item_id']){
			$check = 1;
			break;
		}
	}
	if($check==0){
		$arr = array();
		$arr['item_id'] = $_POST['item_id'];
		$arr['item_price'] = $_POST['item_price'];
		$arr['item_size'] = $_POST['item_size'];
		$arr['item_qty'] = $_POST['item_qty'];
		$arr['item_name'] = $_POST['item_name'];
		array_push($_SESSION['cart'],$arr);
		echo "success";
	}
	else{
		echo "Not added ".$_SESSION['cart'][0]['item_id']."   ".$id;
	}
}

else if( isset($_POST['item_id']) && isset($_POST['item_list']) ){
	
	$_SESSION['item_id'] = $_POST['item_id'];
	$_SESSION['item_list'] = $_POST['item_list'];
}

else if(isset($_POST['item_id'])){
	$_SESSION['item_id'] = $_POST['item_id'];
}

?>