<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add new product</title>
	<style>

		h1
		{
			color:#F48668;
			text-align: center;
			font-family: 'Yanone Kaffeesatz', sans-serif;
			font-size: 34px;
			text-transform: uppercase;
			letter-spacing: 4px;

		}
	</style>
</head>
<body>

	<h1>Add A New Product</h1>
	<form method="post" action="create">
		<label>Name</label>
		<input type="text" name="name"</input>
		<label>Description</label>
		<input type="text" name="description"</input>
		<label>Price</label>
		<input type="text" name="price"></input>
		<input type="submit"value="create"></input>
	</form>
	<a href="#">Go Back</a>
</body>
</html>