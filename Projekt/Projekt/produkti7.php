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
                 <li class="nav-item">
                <a href="produkti.php" class="nav-link"><b>product</b></a> 
              </li>
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
    <img data-image="red" class="active" src="./img/product7.jpg" alt="">
  </div>
 
 
  <!-- Right Column -->
  <div class="right-column">
 
    <!-- Product Description -->
    <div class="product-description">
      <span>Smartwatch</span>
      <h1>U Watch U8</h1>
      <p>Ora e mençur U Watch U8 me rrip gome dhe sistem rezistent ndaj shiut, pikave të ujit apo spërkatjes dhe vjen me shumë funksione operative. Është pajisje shumë funksionale e cila përdoret nga njerëz që duan ti kenë të gjitha gjërat në një vend. Pajisja ka ekran LCD touchscreen 1.48'' dhe ka të integruar teknologjinë Bluetooth 4.0, ka MicroUSB, mikrofon, matës të shpejtësisë, kompas, GPS, altoparlant dhe 512 MB ram. Ndërsa për rezultate më të mira lidhet me telefonin tuaj Android, në të cilin edhe jep mundësi për qasje në të dhënat e aktivitetit tuaj. Pajisja shpenzon shumë pak bateri gjatë funksionimit, ka jetëgjatësi të baterisë dy deri pesë ditë, ka të integruar teknologjinë Bluetooth dhe ka ngjyrë elegante të kuqe.</p>
    </div>
    <br>
    <br>
    <br>
 
    
    <!-- Product Pricing -->
    <div class="product-price">
      <span>55$</span>
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