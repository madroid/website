<?php
session_start();

if(isset($_POST['item_id']) && $_POST['item_list']){
	
	$_SESSION['item_id'] = $_POST['item_id'];
	$_SESSION['item_list'] = $_POST['item_list'];
}
else if(isset($_POST['item_id'])){
	$_SESSION['item_id'] = $_POST['item_id'];
}

?>