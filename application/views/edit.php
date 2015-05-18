<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

	<title>Edits</title>
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
	form 
	{
		position: relative;
		width: 740px;
		height: 498px;
		margin: 0 auto;

	}
	a 
	{
		font-size: 20px;
		text-decoration: none;
	}

	a:hover
	{
		color: #F4A698;
	}
		a 
	{
		color: #C5C392;

	}
	
	a {
		position: relative;
		left: 740px;
		bottom: 250px;
		padding: 25px;
	}

	fieldset 
	{
		position: relative;
		left: 120px;
	}
	.pure-button 
	{
		background-color: #F48668;
	}

</style>
</head>

<h1> Update Product</h1>
<form class="pure-form pure-form-aligned" method="post" action="/update">
    <fieldset>
        <div class="pure-control-group">
            <label>Name</label>
            <input name="name" type="text" placeholder="Name" value="<?php echo $name; ?>">
        </div>
        <div class="pure-control-group">
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" value="<?php echo $description ?>">
        </div>
        <div class="pure-control-group">
            <label>Price</label>
            <input type="text" name="price" placeholder="Price"value="<?php echo $price ?>">
        </div>
        <div class="pure-controls">
        	<input type = "hidden" name='id' value="<?= $id ?>">
            <button type="submit" class="pure-button pure-button-primary">Update</button>
        </div>
    </fieldset>
</form>
	<a href="/show/<?= $id ?>">Show</a>
	<a href="/">Back</a>
</body>
</html>