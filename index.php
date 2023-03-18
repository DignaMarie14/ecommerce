<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>MIDTERM</title>
	<link rel="stylesheet"
href="css/bootstrap.css">
 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
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
	.container form .data-insert{
		width: 100%;
		padding: 8px 10px;
		outline: none;
		border-style: solid;
		border-radius: 1px;
		border-color: #111;
		margin: 0px 0px;
	}
	.container form .sub-btn{
		width: 50%;
		padding: 8px 15px;
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
		font-size: 15px;

	}
</style>
</head>
<body>
	<div class="container" >
<h1>New Product</h1>
<form action="product.php" method="POST">
	<label>Product Name</label>
	<input type="text" required="" name="item_name" class="data-insert">
	<label>Item Price</label>
	<input type="number" required="" name="item_price" class="data-insert">
	<input type="submit" name="submit" class="sub-btn" value="Submit">

	
</form>
</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered">
		<!-- <form method="POST" action="add.php">
			<label>Product Name:</label><input type="text" name="item_name"><br>
			<label>Item Price:</label><input type="text" name="item_price">
			<input type="submit" name="add">
		</form> -->

				<thead>
					<tr>
  				<th scope="col">Id</th>
  				<th scope="col">Product Name</th>
  				<th scope="col">Price</th>
  				<th scope="col">Status</th>
  				<th scope="col">Date Added</th>
  				<th scope="col">Action</th>
  			
  					</tr>
  				</thead>
  				
         
  				
  		

		
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `products`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['item_id']; ?></td>
							<td><?php echo $row['item_name']; ?></td>
							<td><?php echo $row['item_price']; ?></td>
							<td><?php echo $row['item_status']; ?></td>
							<td><?php echo $row['date_added']; ?></td>

							<td>
								<a href="edit.php?id=<?php echo $row['item_id']; ?>"<button type="button" class="btn btn-primary">Update</button></a>
								<a href="delete_item.php?id=<?php echo $row['item_id']; ?>"><button type="button"  class="btn btn-danger" name="ID">Delete</button>
						</tr>
						<?php
					}
				?>
			</tbody>
		
</table>
	</div>
		
	</div>
</body>
<script src="js/bootstrap"></script>
</html>