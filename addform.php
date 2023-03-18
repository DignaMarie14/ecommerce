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
<form action="add.php" method="POST">
	<label>Product Name</label>
	<input type="text" required="" name="item_name" class="data-insert">
	<label>Item Price</label>
	<input type="number" required="" name="item_price" class="data-insert">
	<input type="submit" name="submit" class="sub-btn" value="Submit">

	
</form>