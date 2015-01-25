<?php 
 
$products =[
	'01' => 'mac',
	'02' => 'ubuntu',
	'03' => 'windows'
];

$product_id = '';
$quantity_amount = '';
$msg = '';
$msg2 = '';

if(isset($_GET['prod_id'])) {
	$product_id = $_GET['prod_id'];
	$msg = 'You ordered a ' . $products[$product_id] . '<br>';
}
if(isset($_GET['quantity'])) {
	$quantity_amount = $_GET['quantity'];
	$msg2 = 'You selected a quantity of ' . $quantity_amount;
}

$opts = '';
foreach($products as $prod_id => $prod_name) {
	if($prod_id == $product_id) {
	$opts .= "<option selected value=\"$prod_id\">$prod_name</option>";	
	} else {
	$opts .= "<option value=\"$prod_id\">$prod_name</option>";
	}
}

?>

