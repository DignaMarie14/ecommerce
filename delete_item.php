<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `products` where item_id='$id'");
	header('location:index.php');
?>