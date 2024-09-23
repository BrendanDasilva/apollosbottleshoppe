<?php include 'header.php'; ?>

<div class="page-wrapper">
  <!-- On Sale Products Container -->
  <div class="products-container on-sale-container">
    <?php echo display_products($on_sale_products); ?>
  </div>

  <!-- Not On Sale Products Container -->
  <div class="products-container not-on-sale-container">
    <?php echo display_products($not_on_sale_products); ?>
  </div>
</div>
<?php include 'footer.php'; ?>