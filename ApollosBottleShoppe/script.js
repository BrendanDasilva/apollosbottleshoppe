// Event listener to execute when the DOM content is fully loaded
document.addEventListener("DOMContentLoaded", function () {
  // Element to display the cart count
  const cartCount = document.getElementById("cart-count");

  // Retrieving cart items from local storage or initializing an empty array if none found
  let cartItems = JSON.parse(localStorage.getItem("cart")) || [];

  // Calculating the total number of items in the cart
  let cartTotal = cartItems.reduce((total, item) => total + item.quantity, 0);

  // Function to update the displayed cart count
  const updateCartCount = () => {
    if (cartCount) {
      cartCount.textContent = `Check-Out (${cartTotal})`;
    }
  };

  // Function to update the cart when an item is added or removed
  const updateCart = (checkbox) => {
    const productElement = checkbox.closest(".product, .product-info");
    const quantity = parseInt(
      productElement.querySelector('input[type="number"]').value,
      10
    );
    const name = productElement.querySelector("h2, h2 a").textContent.trim();
    const priceElement = productElement.querySelector(".price");
    const price = parseFloat(priceElement.textContent.replace(/[^0-9.]/g, ""));
    const imageUrl = productElement
      .closest(".product, .product-container")
      .querySelector("img").src;

    if (checkbox.checked) {
      cartItems.push({
        name,
        quantity,
        price,
        subtotal: price * quantity,
        image_url: imageUrl,
      });
      cartTotal += quantity;
    } else {
      const index = cartItems.findIndex((item) => item.name === name);
      if (index > -1) {
        cartTotal -= cartItems[index].quantity;
        cartItems.splice(index, 1);
      }
    }

    // Updating the cart count and saving updated cart items to local storage
    updateCartCount();
    localStorage.setItem("cart", JSON.stringify(cartItems));
  };

  // Initial call to display the correct cart count when the page loads
  updateCartCount();

  // Adding event listeners to all checkbox elements to handle changes (item added/removed from cart)
  document.querySelectorAll('input[type="checkbox"]').forEach((checkbox) => {
    checkbox.addEventListener("change", () => updateCart(checkbox));
    const quantityInput = checkbox
      .closest(".product, .product-info")
      .querySelector('input[type="number"]');
    quantityInput.addEventListener("input", () => {
      if (checkbox.checked) {
        updateCart(checkbox);
      }
    });
  });
});

// Checkout function to display cart items on the checkout page
document.addEventListener("DOMContentLoaded", function () {
  // Element to insert cart items into
  const cartItemsContainer = document.getElementById("cart-items");

  if (!cartItemsContainer) {
    return;
  }

  // Retrieving cart items from local storage or setting an empty array if none found
  const cartItems = JSON.parse(localStorage.getItem("cart")) || [];

  // Display message if cart is empty, otherwise render cart items
  if (cartItems.length === 0) {
    cartItemsContainer.innerHTML = "<p>Your cart is empty.</p>";
    return;
  }

  // Iterate through cart items and create HTML structure
  let rows = "";
  let total = 0;

  cartItems.forEach((item) => {
    const subtotal = item.quantity * item.price;
    total += subtotal;

    rows += `
      <tr>
        <td><img src="${item.image_url}" alt="Product Image" width="50"></td>
        <td>${item.name}</td>
        <td>$${item.price.toFixed(2)}</td>
        <td>${item.quantity}</td>
        <td>$${subtotal.toFixed(2)}</td>
      </tr>
    `;
  });

  cartItemsContainer.innerHTML = rows;

  // Calculate and display tax and total cost
  const taxRate = 0.13;
  const taxAmount = total * taxRate;
  const finalTotal = total + taxAmount;

  const tableFooter = document.querySelector("table tfoot");

  if (tableFooter) {
    tableFooter.innerHTML += `
      <tr>
        <td colspan="4">Tax</td>
        <td>$${taxAmount.toFixed(2)}</td>
      </tr>
      <tr>
        <td colspan="4">Total</td>
        <td>$${finalTotal.toFixed(2)}</td>
      </tr>
    `;
  }
});

// Functionality to clear the cart when the "Clear Cart" button is clicked
document.addEventListener("DOMContentLoaded", function () {
  // Element for the clear cart button
  const clearCartButton = document.getElementById("clear-cart");

  if (clearCartButton) {
    clearCartButton.addEventListener("click", function () {
      // Remove cart items from local storage and update the UI
      localStorage.removeItem("cart");
      const cartItemsContainer = document.getElementById("cart-items");
      if (cartItemsContainer) {
        // If cart items container is found, update it to show the cart is empty
        cartItemsContainer.innerHTML = "<p>Your cart is empty.</p>";
      }

      const cartCount = document.getElementById("cart-count");
      if (cartCount) {
        // Update the cart count to zero if the cart count element is found
        cartCount.textContent = "Check-Out (0)";
      }

      // Remove tax and total rows
      const taxRow = document.querySelector("table tfoot tr:nth-child(1)");
      const totalRow = document.querySelector("table tfoot tr:nth-child(2)");

      // Remove tax and total rows
      const footerRows = document.querySelectorAll("table tfoot tr");
      if (footerRows.length > 0) {
        footerRows.forEach((row) => row.remove());
      }
    });
  }
});
