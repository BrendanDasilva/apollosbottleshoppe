<?php
include 'store.php';

$productIndex = $_GET['productIndex'] ?? null;
$selectedProduct = $products[$productIndex] ?? null;

if (!$selectedProduct) {
    die("Product not found");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Product Page</title>
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="styles.css" />
	<script src="script.js"></script>
</head>

<body>
	<header>
		<div class="logo-container">
				<img src="assets/images/apollologo.png" alt="Apollo's Logo" class="logo" />
		</div>
		<h1>Apollo's Bottle Shoppe</h1>
</header>
<nav>
	<div class="left">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="notes.php">NOTES</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</div>
	<div class="right">
		<a href="checkout.php" id="cart-icon">
		<img src="assets/images/shopping-cart.png" class="cart-image" alt="Shopping Cart" />
		<span id="cart-count"><a href="checkout.php"></span>
		</a>
	</div>
</nav>

<main>
<div class="product-container">
	<div class="product-image">
		<img src="<?php echo htmlspecialchars($selectedProduct["image_url"]); ?>" alt="<?php echo htmlspecialchars($selectedProduct["name"]); ?>">
	</div>
	<div class="product-info">
		<h2><?php echo htmlspecialchars($selectedProduct["name"]); ?></h2>
			<p class="product-description"><?php echo htmlspecialchars($selectedProduct["description"]); ?></p>
			<p class="detailed-description"><?php echo htmlspecialchars($selectedProduct["detailed_description"]); ?></p>
				
			<?php
				if ($selectedProduct["on_sale"]) {
					echo '<p class="price">On Sale: <span class="sale-price">$' . number_format($selectedProduct["sale_price"], 2) . '</span> <span class="regular-price"><s>$' . number_format($selectedProduct["regular_price"], 2) . '</s></span></p>';
				} else {
					echo '<p class="price">Price: $' . number_format($selectedProduct["price"], 2) . '</p>';
				}

				if ($selectedProduct["quantity_available"] > 0) {
					echo '<p>Quantity Available: ' . $selectedProduct["quantity_available"] . '</p>';
					echo '<label for="quantity">Quantity:</label>';
					echo '<input type="number" id="quantity" name="quantity" min="1" max="' . $selectedProduct["quantity_available"] . '" value="1"><br>';	
					echo '<input type="checkbox" id="addToCart" name="addToCart">';
					echo '<label for="addToCart">Add to Cart</label>';
				} else {
					echo '<p>Out of Stock</p>';
				}            
			?>

			<!-- QR Code Display -->
		<div class="qr-code">
			<?php
			// Include the QR code library
			include 'assets/qrcode/phpqrcode/qrlib.php';

			// Define the URL to the current product detail page
			$productDetailURL = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

			// Generate a QR code with the product detail page URL
			QRcode::png($productDetailURL, 'assets/qrcode/product_qr.png');

			// Display the QR code image
			echo '<img src="assets/qrcode/product_qr.png" alt="Product QR Code" />';
			?>
		</div>
	</div>
</main>

<?php include 'footer.php'; ?>