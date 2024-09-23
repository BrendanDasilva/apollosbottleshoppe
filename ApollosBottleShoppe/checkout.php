<?php
include 'store.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout Page</title>
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
<body>
  
<main>
  <div class="cart-summary">
    <table>
      <thead>
        <tr>
          <th></th>
          <th>Product Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>
      </thead>
      <tbody id="cart-items">
        <!-- Items will be injected here by JavaScript -->
      </tbody>
      <tfoot>
        <tr>
          <td colspan="5" style="text-align: right;">
            <button id="clear-cart">Clear Cart</button>
          </td>
        </tr>
      </tfoot>
    </table>
  </div>
</main>

<?php include 'footer.php' ?>