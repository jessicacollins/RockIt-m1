<?php  


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products</title>
	<link rel="stylesheet" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:300|Lobster' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php include 'header.php'; ?>
	<main>
		<?php include 'products.php'; 
		echo $msg . '<br>' . $msg2; ?>
	</main>
	<?php include 'footer.php'; ?>
</body>
</html>