<?php
if(isset($_FILES['file']) && isset($_POST['title']) && isset($_POST['color']) && isset($_POST['tags']) && isset($_POST['price'])  && isset($_POST['fabrics']) )
{
	require_once('connect.php');
	$db = new DB_CONNECT();
	
	$query = "SELECT * FROM vars WHERE var_name='product'";
	$result = mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_assoc($result);
	$value = $row['var_value']+1;
	$query = "UPDATE vars SET var_value = '$value' WHERE var_name = 'product'";
	$result = mysql_query($query) or die(mysql_error());

	$fname = "BeyondPink_".$value.'_'.$_FILES["file"]["name"];
	$title = $_POST['title'];
	$color = $_POST['color'];
	if(substr(trim($color," "),-1)!=","){
		$color.=",";
	}
	$tags = $_POST['tags'];
	$price = $_POST['price'];
	$fabrics = $_POST['fabrics'];
	if( $_FILES['file']['name'] != "" )
	{
	   move_uploaded_file($_FILES["file"]["tmp_name"], "../img/large/".$fname);

	   $query = "INSERT INTO product(pid,title,price,color,tags,fabrics,pname)".
			 "VALUES			 ('$value','$title', '$price', '$color', '$tags','$fabrics','$fname')";

		$query_exe = mysql_query($query) or die(mysql_error());

	echo "Product added successfully!";

	}
	else
	{
		echo "Some error occurred 4";
	}
	
	
;}
else{
	echo "Some error occurred 5";
	
}
echo "<br><br>";
echo "<a href='insert_product2.html'>";
echo "Back";
echo "</a>";

?>