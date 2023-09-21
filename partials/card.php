<?php foreach ($products as $product) { ?>
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?php echo $product->getName() ?></h5>
      <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $product->getPrice() ?></h6>
      <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $product->getCategory()->getName() ?></h6>
      <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $product->getCategory()->getIcon() ?></h6>
    </div>
  </div>
<?php
} ?>