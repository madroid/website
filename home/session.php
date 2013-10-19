<?php
if(session_id() == '') {
    session_start();
}


if( isset($_POST['item_id']) && isset($_POST['item_size']) && isset($_POST['item_qty'])){
	$i11 = 0 ;
	$check = 0;
	$id = $_POST['item_id'];
	for($i11;$i11<sizeof($_SESSION['cart']);$i11++){
		if($id==$_SESSION['cart'][$i11]['item_id']){
			$check = 1;
			$_SESSION['cart'][$i11]['item_size'] = $_POST['item_size'];
			$_SESSION['cart'][$i11]['item_qty'] = $_POST['item_qty'];
			break;
		}
	}
	if($check==0){
		$arr = array();
		$arr['item_id'] = $_POST['item_id'];
		$arr['item_size'] = $_POST['item_size'];
		$arr['item_qty'] = $_POST['item_qty'];		
		array_push($_SESSION['cart'],$arr);
		echo "success";
	}
	else{
		echo "Not added";
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