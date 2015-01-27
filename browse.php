<?php 
require_once('products.php');
$opts = '';
foreach($products as $prod_id => $prod_name) {
	$opts .= "<option value=\"$prod_id\">$prod_name</option>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:300|Lobster' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php include("header.php"); ?>
	<main>
		<h1>Browse Products</h1>
		<form action="product.php">
			<span>Product: </span>
			<select name="prod_id">
				<?php 
				echo $opts;
				?>
			</select>
			<span>Quantity: </span>
			<input type="text" name="quantity" required>
			<button>Submit</button>
		</form>
	</main>
	<?php include("footer.php"); ?>
</body>
</html>