<html>
<?php 

include_once "dblecture_conn.php";
if (isset($_GET['id'])) {
  $id=$_GET['id'];
  $delete=mysqli_query($conn, "DELETE FROM `products` WHERE `item_id`='$id'");
}

$select="select * from products";
$query=mysqli_query($conn, $select);
?>

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet"
href="css/bootstrap.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>


<body>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
  				<th scope="col">Id</th>
  				<th scope="col">Product Name</th>
  				<th scope="col">Price</th>
  				<th scope="col">Status</th>
  				<th scope="col">Date Added</th>
  				<th scope="col">Action</th>
  				<th scope="col"></th>
  					</tr>
  				</thead>
  				<?php 
  					require ('dblecture_conn.php');
  					
  					$sql = "SELECT item_id, item_name, item_price, item_status, date_added from products";
		$result = $conn-> query($sql);

		
			while($row = $result-> fetch_assoc()){



  				 ?>
  				 <tr>
  				 	
  				 	<td><?php echo $row['item_id']; ?></td>
  				 	<td><?php echo $row['item_name']; ?></td>
  				 	<td><?php echo $row['item_price']; ?></td>
  				 	<td><?php echo $row['item_status']; ?></td>
  				 	<td><?php echo $row['date_added']; ?></td>
            <td><a href="product.php"><button type="button" class="btn btn-primary">Insert</button></a></td>
  				 	<td><a href="update_item.php?id=$row['item_id']"><button type="button" class="btn btn-primary">Update</button></a></td>
  					<td> <a href="index.php?id=$row['item_id']"><button type="button"  class="btn btn-danger" name="ID">Delete</button></a></td>

  				 </tr>
  				<?php } ?>
  				<tbody>
  					
  				</tbody>

			</table>

		</div>

	</div>
	</body>
	<script src="js/bootstrap"></script>
	</html>