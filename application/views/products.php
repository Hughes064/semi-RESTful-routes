<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
	<title>Products</title>
	<style>
	h1
	{
		color:#F48668;
		text-align: center;
		font-family: 'Yanone Kaffeesatz', sans-serif;
		font-size: 74px;
		text-decoration: underline;
		text-transform: uppercase;
		letter-spacing: 4px;

	}

	table, th, td 
	{
		border: 1px solid #DD614A;
	}

	table 
	{
		border-collapse: collapse;
	}

	table 
	{
		width: 55%;
		margin: 0 auto;
	}

	th 
	{
		height: 50px;
		text-align: left;
		background-color:#C5C392;
		color: white;
		letter-spacing: 2px;
		font-weight: lighter;
	}

	td 
	{
		height: 50px;
		vertical-align: bottom;
		padding: 15px;
	}
	
	a
	{
		color:#F48668;
		text-decoration: none;
	}
	a.add_new
	{
		color: #F48668;
		font-size: 20px;
		text-decoration: none;
		text-transform: uppercase;
		letter-spacing: 2px;
		font-weight: bold;

	}

	a:hover
	{
		color: #73A580;
	}

	a.add_new
	{
		position: relative;
		left: 760px;
		top: 15px;
	}

	</style>
</head>
<body>
	<h1>Products</h1>
	<table class="pure-table pure-table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Actions</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
<?php 

$query = "SELECT * FROM products";
$products = $this->db->query($query)->result_array();
foreach ($products as $product) {
?>
        <tr>
            <td><?php echo $product['name'] ?></td>
            <td><?php echo $product['description'] ?></td>
            <td><?php echo $product['price'] ?></td>
            <td><a href="/show/<?php echo $product['id'] ?>">Show</a></td>
            <td><a href="/edit/<?php echo $product['id'] ?>">Edit</a></td>
            <td><a href="/destroy/<?php echo $product['id'] ?>">Delete</a></td>

        </tr>
<?php 
}
 ?>
    </tbody>
</table>
<a href="addProduct" class="add_new"> Add a new product</a>
</body>
</html>