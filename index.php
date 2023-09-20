<?php
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Category.php';

$cane = new Category("Cane", '<i class="fa-solid fa-dog"></i>');
$gatto = new Category("Gatto", '<i class="fa-solid fa-cat"></i>');

$cuccia = new Product('Cuccia', "70.90€", $cane, "House furniture for dogs");
$gioco = new Product('Pallina di gomma', "2.50€", $gatto, "Red toy ball for cats");
$cibo = new Product('Croccantini Cani Adulti', "10.50€", $cane, "Food for adult dogs");

$products = [];

array_push($products, $cuccia);
array_push($products, $gioco);
array_push($products, $cibo);
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