<?php
require 'database/dbconfig.php';
include 'inc/head.php';
include 'inc/navbar.php';

$products = $connection -> query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="product-center container">
      <div class="product">
        <div class="img-cover">
          <img src="./img/<?php echo $row ["image"]; ?>" alt="" />
        </div>
        <p><?php echo $row ["title"] ?></p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bx-star"></i>
        </div>
        <div class="price"><?php echo $row ["price"];?></div>
      </div>
</div>