<?php
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Cuccia.php';
require_once __DIR__ . '/classes/Cibo.php';
require_once __DIR__ . '/classes/Gioco.php';
require_once __DIR__ . '/classes/Cane.php';
require_once __DIR__ . '/classes/Gatto.php';
require_once __DIR__ . '/db/shop.php';

$products = array_map(function($el) {
  return new $el['type']($el['name'], $el['price'], new $el['category']());
}, $rawShop);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href=""> <!--  CSS Custom Link -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <title>Document</title>
</head>

<body>

  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-10">
        <h1 class="my-3">Products:</h1>
        <div class="card-container my-5 d-flex gap-3 flex-wrap">
          <?php
          require_once __DIR__ . '/partials/card.php'
          ?>
        </div>
      </div>
    </div>
  </div>

  <script src=""></script><!--  JS Custom Link -->
</body>

</html>