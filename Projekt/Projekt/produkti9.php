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
    <img data-image="red" class="active" src="./img/cat3.jpg" alt="">
  </div>
 
 
  <!-- Right Column -->
  <div class="right-column">
 
    <!-- Product Description -->
    <div class="product-description">
      <span>Smartphone</span>
      <h1>Samsung</h1>
      <p>Ky celular përmban tipare të përkyera teknologjike dhe fizike për performancë të shkëlqyer. Ka ekran SAMOLED me madhësi 6.5 inç dhe ofron rezolucion fantastik 2400 x 1080 pikselë. Mbështet teknologjinë HDR10+. Është i pajisur me procesor të fuqishëm Exynos 990 (2x2.73 GHz / 2x2.50 GHz / 4x2.0 GHz) që përmban 8 bërthama. Memoria RAM ka kapacitet 6GB ndërsa për të dhëna ka në dispozicion 128GB. Kamera e pasme është me rezolucion 12 + 12 +8 MPX ndërsa kamera e përparme 32 MPX. Përfshin stabilizim elektronik dhe optik të imazhit. Rezolucioni i videos është 7680 × 4320 pikselë (8K). Ka edhe përshpejtues grafik Mali G77 MP11 si dhe mbështet standardet GSM, LTE, UMTS. Lidhet përmes konektorit USB tipi C ose Bluetooth 5.0. Ndër veçori të avancuara përfshin Dual SIM, lexues të shenjave të gishtave, OTG, karikim me wireless, busullë digjitale, sensor të dritës, afërsisë, lëvizjes dhe gjiroskop, navigues Beidou, Galileo, GPS, Glonass dhe mbështetje NFC. Bateria ka kapacitet 4500 mAh. Shkalla e mbrojtjes është IP68. Sistemi operativ është Google Android. Vjen me ngjyrë të portokalltë.</p>
    </div>
 
    
 
    <!-- Product Pricing -->
    <div class="product-price">
      <span>1110$</span>
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