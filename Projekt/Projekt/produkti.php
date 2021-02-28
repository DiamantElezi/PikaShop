<?php 
include 'inc/header.php';
?>
<link rel="stylesheet" type="text/css" href="./css/product.css">
  <div class="promo">
    <span>Get 30% off while using the code "336633"!!</span>
  </div>

  <header class="header">
<!-- hajdeee moree zooooot ishallaaaa e kryjm oo allaah -->
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
    <img data-image="red" class="active" src="img/cat5.jpg" alt="">
  </div>
 
 
  <!-- Right Column -->
  <div class="right-column">
 
    <!-- Product Description -->
    <div class="product-description">
      <span>Laptop</span>
      <h1>Lenovo i5</h1>
      <p>Shënim: Tastiera te pjesa numerike ka disa simbole çeke. Ndërsa, Microsoft Office është në verzion provues ose nuk është i instaluar fare. Lenovo IdeaPad S540-15IWL është dizajnuar që të përshtatet për të gjitha kërkesat tuaja specifike. Laptopi mban performancë të lartë, karakteristika shumë praktike dhe është më i lehtë dhe më i hollë sesa paraardhësit e tij. Punoni me efiçiencë dhe argëtohuni maksimalisht me këtë seri të laptopëve. Aksesori vjen i pajisur me procesorin 4-core Intel Core i5-8265U i cili kombinohet me 8GB RAM memorie të llojit DDR4, ekranin me prekje (touch) me madhësi 15.6", kualitet Full HD dhe rezolucion prej 1920 x 1080 piksela si dhe kartelën grafike NVIDIA GeForce GTX 1650 Max-Q për t'ju mundësuar që të shihni imazhe të pastërta dhe të detajizuara si dhe performancë të shpejtë kompjuterike. Pos kësaj, laptopi mban 512GB SSD për ruajtjen e të dhënave, mban një mori portesh USB për lidhje me pajisje të tjera periferike, është pajisur me kamerë praktike HD, lexues të gishtërinjëve dhe lexues të kartelave të memories, mban portet HDMI dhe audio jack si dhe funksionon me sistemin operativ Windows 10 Home.</p>
    </div>
 
    
 
    <!-- Product Pricing -->
    <div class="product-price">
      <span>899$</span>
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