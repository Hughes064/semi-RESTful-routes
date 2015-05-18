<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show Products</title>
	<style>

	body 
	{
		width: 40%;
		border: 2px solid black;
		margin: 0 auto;
		margin-top: 50px;
	}
		h1
	{
		color:#F48668;
		text-align: center;
		font-family: 'Yanone Kaffeesatz', sans-serif;
		font-size: 34px;
		text-transform: uppercase;
		letter-spacing: 4px;

	}

	p
	{
		text-align: center;
		color: #73A580;
	}
	

	a:hover
	{
		color: #F4A698;
	}

	a 
	{
		margin-left: 15px;
		font-size: 20px;
		text-decoration: none;
		color: #C5C392;

	}
	


	</style>
</head>
<body>
	
	<h1>Product #: <?php echo $id ?></h1>
	<p>Name: <?php echo $name ?></p>
	<p>Description: <?php echo $description ?></p>
	<p>Price: <?php echo $price?></p>
	<a href="/edit/<?php echo $id?>">Edit</a>	
	<a href="/products">Back</a>

</body>
</html>