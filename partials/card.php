<?php foreach ($products as $product) { ?>
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?php echo $product->get_name() ?></h5>
      <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $product->get_price() ?></h6>
      <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $product->get_categ_name() ?></h6>
      <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $product->get_categ_icon() ?></h6>
      <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $product->get_type() ?></h6>
    </div>
  </div>
<?php
} ?>