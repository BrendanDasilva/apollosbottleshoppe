<?php
$products = array(
  array(
      "name" => "Mount Binx Mineral Water",
      "price" => 2.99,
      "description" => "Only the best, most crispy H2o. Simply Refreshing.",
      "detailed_description" => "This mineral water is sourced from the pristine mountains, ensuring the highest quality of purity and taste. It’s rich in essential minerals that are beneficial for health.",
      "image_url" => "assets/images/binxmineralwater.png",
      "on_sale" => true,
      "regular_price" => 2.99,
      "sale_price" => 1.99,
      "quantity_available" => 10,
  ),
  array(
      "name" => "Apollo's Blue Moonshine",
      "price" => 24.99,
      "description" => "This stuff is gauranteed to make you scream.",
      "detailed_description" => "Apollo's Blue Moonshine is crafted from a secret recipe, guaranteed to invigorate your senses. Distilled to perfection, it offers a robust flavor profile.",
      "image_url" => "assets/images/apollosblue.png",
      "on_sale" => false,
      "regular_price" => 24.99,
      "sale_price" => 19.99,
      "quantity_available" => 0, // Out of Stock
  ),
  array(
      "name" => "Chippy's Malt Liquor",
      "price" => 4.00,
      "description" => "Sassy but smooth.",
      "detailed_description" => "Chippy's Malt Liquor delivers a blend of premium ingredients and classic taste. It's the perfect drink for those who appreciate the elegance of simplicity and a smooth finish.",
      "image_url" => "assets/images/chippysmalt.png",
      "on_sale" => false,
      "regular_price" => 34.99,
      "sale_price" => 29.99,
      "quantity_available" => 5,
  ),
  array(
      "name" => "Dr. Ruby Diet Soda",
      "price" => 2.99,
      "description" => "Same great Dr. Ruby formula without the sugar!",
      "detailed_description" => "Enjoy the same great taste of Dr. Ruby with zero sugar. It's the perfect beverage for those looking to enjoy our signature flavor while maintaining a healthy lifestyle.",
      "image_url" => "assets/images/drrubydiet.png",
      "on_sale" => false,
      "regular_price" => 2.99,
      "sale_price" => 1.99,
      "quantity_available" => 15,
  ),
  array(
      "name" => "Dr. Ruby Cherry Soda",
      "price" => 3.99,
      "description" => "Sweet cherry-cola made with science, by Dr. Ruby.",
      "detailed_description" => "Dr. Ruby Soda offers a symphony of flavor, blending cherry and cola for an unforgettable taste. Every sip promises a burst of sweetness and refreshment.",
      "image_url" => "assets/images/drrubysoda.png",
      "on_sale" => true,
      "regular_price" => 3.99,
      "sale_price" => 2.99,
      "quantity_available" => 8,
  ),
  array(
      "name" => "Mount Binx Sparkling Water: Lemon",
      "price" => 1.99,
      "description" => "Bubbly Water with a hint of lemon.",
      "detailed_description" => "A sparkling fusion of pure water and a hint of lemon, delivering a refreshing experience. Every sip is a dance of flavors, making it a favorite choice for refreshment.",
      "image_url" => "assets/images/mountbinxlemon.png",
      "on_sale" => false,
      "regular_price" => 1.99,
      "sale_price" => 1.49,
      "quantity_available" => 20,
  ),
  array(
      "name" => "Project CAT Secret Sauce",
      "price" => 69.99,
      "description" => "We can't tell you what this is, its a secret",
      "detailed_description" => "Shrouded in mystery, Project CAT Secret Sauce is a blend of undisclosed ingredients producing an unparalleled flavor. It’s not just a beverage, it’s an experience.",
      "image_url" => "assets/images/projectCAT.png",
      "on_sale" => true,
      "regular_price" => 99.99,
      "sale_price" => 69.99,
      "quantity_available" => 3,
  ),
  array(
      "name" => "Berkley Brand Super Smoothie: Great Green",
      "price" => 9.99,
      "description" => "For those who are always standing and walking this blend is sure to keep you going.",
      "detailed_description" => "A power-packed blend of nutrients and flavors, Great Green is your companion for an energy-filled day. Made with select ingredients to offer both taste and health.",
      "image_url" => "assets/images/berkleygreen.png",
      "on_sale" => false,
      "regular_price" => 9.99,
      "sale_price" => 6.99,
      "quantity_available" => 12,
  ),
  array(
      "name" => "Berkley Brand Super Smoothie: Peanut Butter and Banana",
      "price" => 9.99,
      "description" => "Creamy, nutricious, and full of deliciousness.",
      "detailed_description" => "A creamy blend of peanut butter and banana, mixed to perfection to offer a smoothie that’s both nutritious and delicious. It’s a meal and a treat, rolled into one.",
      "image_url" => "assets/images/berkleypbandbanana.png",
      "on_sale" => false,
      "regular_price" => 94.99,
      "sale_price" => 89.99,
      "quantity_available" => 7,
  ),
  array(
      "name" => "Mount Binx Sparkling Water",
      "price" => 1.99,
      "description" => "Who doesn't like a little pep in their water. ",
      "detailed_description" => "Mount Binx Sparkling Water offers the purest water, carbonated to perfection. Each sip is a refreshing experience, making it a popular choice for every occasion.",
      "image_url" => "assets/images/mountbinxsparkling.png",
      "on_sale" => false,
      "regular_price" => 1.99,
      "sale_price" => 1.49,
      "quantity_available" => 9,
  ),
  array(
      "name" => "Apollo Lite",
      "price" => 4.99,
      "description" => "A smooth refreshing lager",
      "detailed_description" => "Apollo Lite is a testament to the art of brewing. A lager that delivers a smooth yet robust flavor, it's the choice for those who appreciate the finer things in life.",
      "image_url" => "assets/images/apollolite.png",
      "on_sale" => false,
      "regular_price" => 114.99,
      "sale_price" => 109.99,
      "quantity_available" => 2,
  ),
  array(
      "name" => "Apollo Blanc",
      "price" => 9.99,
      "description" => "A Belgin style brew for fancy occassions.",
      "detailed_description" => "Apollo Blanc offers an exquisite blend of flavors, crafted for the connoisseur. Every sip is a journey through a world of taste, making every occasion special.",
      "image_url" => "assets/images/apolloblanc.png",
      "on_sale" => false,
      "regular_price" => 9.99,
      "sale_price" => 9.49,
      "quantity_available" => 5,
  ),
);

// Seperate the on-sale products into a seperate container
$on_sale_products = array_filter($products, function($product) {
  return $product["on_sale"] === true;
});
$not_on_sale_products = array_filter($products, function($product) {
  return $product["on_sale"] === false;
});

// Generate product display
function display_products($products) {
    foreach ($products as $index => $product) {
      echo '<div class="product';
      if ($product["on_sale"]) {
          echo ' on-sale"><div class="sale-ribbon">Sale</div>';
      } else {
          echo '">';
      }
      echo '<img src="' . $product["image_url"] . '" alt="' . $product["name"] . '" />';
      echo '<h2><a href="product-page.php?productIndex=' . $index . '">' . $product["name"] . '</a></h2>';
      echo '<p class="product-description">' . $product["description"] . '</p>';
  
      if ($product["on_sale"]) {  
          echo '<p class="price">On Sale: <span class="sale-price">$' . number_format($product["sale_price"], 2) . '</span> <span class="regular-price"><s>$' . number_format($product["regular_price"], 2) . '</s></span></p>';
      } else {
          echo '<p class="price">Price: $' . number_format($product["price"], 2) . '</p>';
      }
  
      if ($product["quantity_available"] > 0) {  
          echo '<p>Quantity Available: ' . $product["quantity_available"] . '</p>';
          echo '<label for="quantity' . $index . '">Quantity:</label>';  // Added $index to make id unique
          echo '<input type="number" id="quantity' . $index . '" name="quantity" min="1" max="' . $product["quantity_available"] . '" value="1"><br>';	// Added $index to make id unique
          echo '<input type="checkbox" id="addToCart' . $index . '" name="addToCart">';  // Added $index to make id unique
          echo '<label for="addToCart' . $index . '">Add to Cart</label>';  // Added $index to make id unique
      } else {
          echo '<p>Out of Stock</p>';
      }  
      echo '</div>';
    }
  }
  
  

?>