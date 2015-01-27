<?php  

require_once('products.php');

$quantity = '';
$product_id = '';
$msg = '';

if(isset($_GET['prod_id']) && isset($_GET['quantity'])) {
	$product_id = $_GET['prod_id'];
	$quantity = $_GET['quantity'];

	if($product_id == 1 && $quantity > 7) {
		$msg = 'You can\'t order over 7 ' . $products[$product_id];
	} elseif ($product_id > 3 || $product_id < 1 || $quantity <= 0) {
		$msg = 'Invalid choice';
	} else {
		$msg = 'You ordered ' . $quantity . ' ' . $products[$product_id];
	}	
}	

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products</title>
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:300|Lobster' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php include 'header.php'; ?>
	<main>
		<h1>
			<?php echo $msg; ?>
		</h1>
	</main>
	<?php include 'footer.php'; ?>
</body>
</html>