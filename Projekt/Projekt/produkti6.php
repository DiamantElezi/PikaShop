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
    <img data-image="red" class="active" src="./img/product6.jpg" alt="">
  </div>
 
 
  <!-- Right Column -->
  <div class="right-column">
 
    <!-- Product Description -->
    <div class="product-description">
      <span>Headphones</span>
      <h1>Beats Solo 3</h1>
      <p>Beats Solo 3 vijnë në treg me përmirësime të jashtzakonshme, me zërim të qartë dhe të balansuar, jetëgjatësi të baterisë deri në 40 orë dhe me dizajn e formë elegante e moderne që përshtatet me çdo përdorues <br>
      Sistemi i zërimit është i përsosur, me Beats Solo 3, zëri është i qartë, i balansuar dhe kumbues. Çdo këngë, simfoni dhe operë do të ju duket sikurse të ishte reale, e çdo notë do përjetohet deri në fund. <br>
        Beats Solo 3 mund të përdoren lehtësisht nga çdo kush, ju vetëm duhet të ndizni kufjet dhe mbani afër celularin iPhone, Apple Watch, iPad apo Mac dhe në mënyrë automatike të dy pajisjet do sinkronizohen përmes Bluetooth (por që mund të përdoren edhe me pajisje tjera përmes kabllos audio 3.5mm) dhe ju mund të filloni e dëgjoni çfarëdo që dëshironi për 40 orë rresht! Jetëgjatësia e këtyre kufjeve është mundësuar nga një çip i integruar në të W1, i cili jo vetëm që e ruan baterinë por edhe mundëson që të karikohet për vetëm 3 minuta përmes teknologjisë Fast Fuel.<br>
        Kufjet, përpos kualitetit të jashtzakonshëm të zërit, njihen edhe për dizajnin dhe formën elegante e moderne. Veçanti e tyre është se kanë formë ergonomike e cila përshtatet në mënyrë të përkryer më veshët dhe kokën tuaj edhe pas orëve të gjatë dëgjimi, janë pa kabllo dhe palosen tejet lehtë. Po ashtu, kufjet kanë të integruara taste komanduese dhe mikrofon për të kontrolluar volumin e zërit dhe për të pranuar telefonata edhe kur jeni në lëvizje. <br>
        Me Beats Solo 3 cdo gjë përjetohet ndryshe!
      </p>
    </div>
    <br>
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