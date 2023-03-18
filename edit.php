<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `products` where item_id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<style type="text/css">
	{
		padding: 0;
		margin: 0;
		box-sizing: border-box;
		font-family: sans-serif;
	}
	body{
		width: 100%;
		height: 100vh;
		display: flex;
		justify-content: center;
	
	}
	.container{
		max-width: 500px;
		width: 100%;
	}
	.container form{
		width: 50%;
		padding: 30px;

		
	

	
	}
	.container form .data-edit{
		width: 100%;
		padding: 8px 10px;
		outline: none;
		border-style: solid;
		border-radius: 1px;
		border-color: #111;
		
		margin-bottom: 15px;
	}
	.container form .sub-btn{
		width: 50%;
		padding: 8px 30px;
		background-color: darkred;
		color: #ffff;
		font-size: 1em;
		outline: none;
		margin-top: 5px;
		text-align: left;
	}
	.container h1{
		padding: 50px 0px 0px 30px;
		margin:0px 0px 0px 0px;
	
		

	}
	label{
		font-size: 20px;

	}
</style>
<head>
<title>midterm</title>
</head>
<body>

		<div class="container" >
<h1>New Product</h1>
<form method="POST" action="update_item.php?id=<?php echo $id; ?> ">
	<label>Product Name</label>
	<input type="text" class="data-edit" value="<?php echo $row['item_name']; ?>" name="item_name">
	<label>Item Price</label>
	<input type="text" class="data-edit" value="<?php echo $row['item_price']; ?>" name="item_price">
	<input type="submit" name="submit" class="sub-btn" value="Submit">

	
</form>




</body>
</html>