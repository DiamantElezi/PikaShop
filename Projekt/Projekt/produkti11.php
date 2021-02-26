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
    <img data-image="red" class="active" src="./img/cat2.jpg" alt="">
  </div>
 
 
  <!-- Right Column -->
  <div class="right-column">
 
    <!-- Product Description -->
    <div class="product-description">
      <span>Headphones</span>
      <h1>SteelSeries Artics 7</h1>
      <p>SteelSeries Arctis 7 i plotëson të gjitha kërkesat specifike të gamerave. Zëri i përsosur do ju mahnis me pastërtinë e kristaltë dhe fuqinë e shpërndarjes. Falë dizajnit pa kabllo dhe dizajnit të rehatshëm, ato janë shumë të rehatshme për t'u mbajtur pa i lënduar veshët tuaj për orë të tëra. Dhe, poashtu, ajo është pajisur me një mikrofon të cilin mund ta hiqni.<br>
      Zë i përsosur 7.1 Surround Sound

Dizajni elegant dhe mahnitës i SteelSeries Arctis 7 ju mundëson të rehatoni kufjet ashtu siç i dëshironi me ndërtimin e ramit lëvizës dhe praktik. Pos kësaj, teknologjia 3D Surround Sound 7.1 do ju mundësoj të dëgjoni muzikën e zërit kristal të pastër ashtu si gjithmonë që i keni menduar. Lëshojeni muzikën, mbyllni sytë dhe nuk do të dini dallimin ndërmjet dhomës tuaj të ditës dhe koncertit. Kufjet funksionojnë nën frekuencat 20 - 20,000 Hz.<br>
Nuk do i vëresh që i ke vendosur

Dizajni praktik dhe i veçantë i kufjeve SteelSeries Arctis 7 me sfungjer të butë do ju ofroj rehati maksimale pa e vërejtur që i keni vendosur për një kohë të gjatë.
Mikrofon praktik<br>

SteelSeries Arctis 7 janë të pajisura me mikrofonin praktik dhe të kualitetit të lartë që do ju mundësoj të përcjellni zërin tuaj përsosshmërisht përgjatë video konferencave.

Lidhje pa kabllo (wireless)<br>

Kufjet mund t'i lidhni me kompjuter, laptop dhe pajisje të tjera nëpërmjet lidhjes pa kabllo ( wireless) dhe mund të qëndroni larg tyre deri në 12 metra, por mund t'i lidhni edhe përmes kabllos me konektor jack 3.5mm. Pos kësaj, kufjet ju mundësojnë të kontrolloni volumin direkt në padin e anës së djathtë.</p>
    </div>
    <br>
    <br>
    <br>
    <br>
 
   
    <!-- Product Pricing -->
    <div class="product-price">
      <span>179$</span>
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