<?php 
include 'inc/header.php';
?>
<link rel="stylesheet" type="text/css" href="./css/product.css">
  <div class="promo">
    <span>Get 30% off while using the code "336633"!!</span>
  </div>

  <header class="header">

    <nav class="nav container">
      <div class="navigation d-flex">
        <div class="hamburger">
          <i class="bx bx-menu"></i>
        </div>
        

        <div class="menu">
          <div class="top">
            <span class="close">close <i class="bx bx-x"></i></span>
          </div>

          <ul class="nav-list d-flex">
            <li class="nav-item">
             <a href="index.php" class="nav-link active"><b>Home</b></a>
            </li>
            <li class="nav-item">
              <a href="shop.php" class="nav-link"><b>Shop</b></a>
            </li>
            <li class="nav-item">
              <a href="about.php" class="nav-link"><b>About</b></a>
            </li>
            <li class="nav-item">
                <a href="contact.php" class="nav-link"><b>Contact</b></a>
              </li>
              <li class="nav-item">
                <a href="login.php" class="nav-link"><b>Login</b></a> 
              
          </ul>
        </div>

        <div class="icons d-flex">
          <div><i class="bx bx-search"></i></div>
          <div><i class="bx bx-user"></i></div>
          <div><i class="bx bx-heart"></i></div>
          <div>
            <i class="bx bx-shopping-bag"></i>
            <span class="align-center">0</span>
          </div>
        </div>
      </div>
    </nav>
<main class="container">
 
  <!-- Left Column / Headphones Image -->
  <div class="left-column">
    <img data-image="red" class="active" src="./img/product4.jpg" alt="">
  </div>
 
 
  <!-- Right Column -->
  <div class="right-column">
 
    <!-- Product Description -->
    <div class="product-description">
      <span>Smartphone</span>
      <h1>Iphone</h1>
      <p>Ky celular vjen me ekran me prekje 4.7”, që shfaq imazhe me rezolucion 1334 x 750 pixel. Si pjesë përbërëse, ky celular ka pjesë harduerike të kualitetit të lartë të cilat mundësojnë operim dhe performancë të shpejtë e pandërprerje. Të gjitha proceset bazohen në procesorin gjashtë bërthamësh Apple A13 Bionic, i kombinuar me memorien e brendshme për ruajtjen e të dhënave të çfarëdoshme me kapacitet 64GB. Poashtu, Apple iPhone SE 2020, ka edhe dy kamera me të cilat shkrep e incizon imazhe me kualitet superior, një të pasme 12MP dhe një të përparme 7MP, të kombinuara edhe me senzor dhe fokus. Apple iPhone SE 2020 vjen me sistem operativ të instaluar Apple iOS, si dhe mundësi për lidhje me teknologjitë si Wi-Fi, Bluetooth, NFC, 4G LTE e GPS. Gjithashtu, posedon sensorët: Busull dixhital (sensori magnetik), sensori i dritës, sensor afërsije, sensori i lëvizjes, xhiroskop, dhe barometër. Vjen me ngjyrë të bardhë</p>
    </div>
 
   
 
    <!-- Product Pricing -->
    <div class="product-price">
      <span>600$</span>
      <a href="#" class="cart-btn">Add to cart</a>
    </div>
  </div>
</main>

       


  
  <!-- Footer -->
  <?php include 'inc/footer.php'; ?>

  <!-- Script -->
  <script src="js/product.js"></script>
  <script >

    $(document).ready(function() {
 
  $('.color-choose input').on('click', function() {
      var headphonesColor = $(this).attr('data-image');
 
      $('.active').removeClass('active');
      $('.left-column img[data-image = ' + headphonesColor + ']').addClass('active');
      $(this).addClass('active');
  });
 
});

  </script>
</body>

</html>