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
    <img data-image="red" class="active" src="./img/product3.jpg" alt="">
  </div>
 
 
  <!-- Right Column -->
  <div class="right-column">
 
    <!-- Product Description -->
    <div class="product-description">
      <span>Smartwatch</span>
      <h1>Smartwatch Technaxx</h1>
      <p>Technaxx Smartwatch (TX-SW5HR) me dizajn të thjesht mbështet teknologjinë Bluetooth verisoni i katërt dhe WiFi si dhe ofron një varg funksionesh sportive, GPS, Galileo, GLONASS dhe Beidou dhe është rezistente ndaj ujit dhe pluhurit. Përveç kësaj, kjo orë ka ekran me diagonale 1.3''. Bateria me kapacitet 220 mAh zgjat deri në 7 ditë me një karikim të vetëm. Për më tepër, ora përputhet me sistemin Android dhe iOS.</p>

      <br>
      <br>
      <br>
      <br>
      <br>
      
  


    </div>
 
    
 
    <!-- Product Pricing -->
    <div class="product-price">
      <span>150$</span>
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