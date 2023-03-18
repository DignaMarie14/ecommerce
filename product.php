<?php
	include('conn.php');
	
	$item_name=$_POST['item_name'];
	$item_price=$_POST['item_price'];
		
	mysqli_query($conn,"insert into `products` (item_name,item_price) values ('$item_name','$item_price')");
	header('location:index.php');
	
?>