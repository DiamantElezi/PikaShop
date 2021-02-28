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
    <img data-image="red" class="active" src="./img/11.jpg" alt="">
  </div>
 
 
  <!-- Right Column -->
  <div class="right-column">
 
    <!-- Product Description -->
    <div class="product-description">
      <span>Security</span>
      <h1>Arlo SmartHubs</h1>
      <p>Kujdesuni për shtëpinë ose biznesin tuaj me këtë set Arlo SmartHubs dhe dy/katër kamera wireless që ruajnë pronën tuaj ditë e natë. Arlo Pro 3 ofron instalim të lehtë brenda pak minutash dhe aftësinë për të parë regjistrimin direkt në telefon. Poashtu, kamerat e përparuara kohët e fundit janë pajisur gjithnjë e më shumë me dritë të integruar. Aktivizohet automatikisht (bazuar në zbulimin e lëvizjes) ose manualisht sa herë që keni nevojë për të. Kamera do të funksionojë kështu si një reflektor me fuqi të mesme dhe drita gjithashtu mund të trembë vizitorët e paftuar. Lidheni me kamerën dhe kontrolloni funksionet e saj përmes asistentëve tuaj të preferuar inteligjentë. Ju mund të përdorni një numër opsionesh. Pajisja punon me teknologjinë Apple Homekit, Amazon Alexa dhe Google Assistant. Përveç kësaj, kamera ofron funksionim të baterisë 3 deri në 6 muaj, duke përfshirë qendrën lidhëse (Arlo SmartHub), me rezolucion 4 Mpix, 2560 x 1440 piksel (2K, 1080p dhe modalitete 720p). Poashtu, kamera mbështet kodimin dhe gjurmim automatik, HDR, H.264 dhe H.265 dhe posedon ndërfaqet: WiFi 802.11 b / g / n. Ka përmasat 89mm x 52mm x 78.4mm dhe peshon 316g.</p>
    </div>
    <br>
    <br>
    
 
   
 
    <!-- Product Pricing -->
    <div class="product-price">
      <span>148$</span>
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