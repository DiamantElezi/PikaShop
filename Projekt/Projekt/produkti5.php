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
    <img data-image="red" class="active" src="./img/product5.jpg" alt="">
  </div>
 
 
  <!-- Right Column -->
  <div class="right-column">
 
    <!-- Product Description -->
    <div class="product-description">
      <span>Smartphone</span>
      <h1>Samsung A71</h1>
      <p>Duke u bazuar në modelet e njohura nga viti i kaluar, Samsung Galaxy A71 i ri sjell risi të mëtutjeshme për të përmirësuar veçoritë, nevojat e komunikimit, ndarjen, fotografinë dhe shikimin e përmbajtjes në internet. Në krahasim me A51, ai jep një ekran më të madh, performancë më të lartë, rezolucion më të lartë kamerash dhe një bateri më të madhe me karikim më të shpejtë. Zbuloni një pamje të gjerë të një ekrani 6.7 " me trup të plotë Infinity-O Super AMOLED. Përjetoni kënaqësi të madhe me një rezolucion më të gjerë prej 2400 x 1080 piksel, i cili jep një hap të këndshëm prej 393 ppi. Ju mund të shijoni një imazh me kontrast të lartë dhe shkëlqim, ekran i shkëlqyeshëm me ngjyra dhe kënde të gjera të shikimit. Kamera e re me katër lente ju lejon të kapni dhe shkëmbeni fotografi në një mënyrë revolucionare. Me katër kamera të nivelit të lartë, Galaxy A71 është krijuar për të kapur momentet e jetës që kanë rëndësi. Me kamerën kryesore, ultra të gjerë, makro dhe thellësi-fushe, e kombinuar me karakteristika inteligjente, ju lejon të kapni pothuajse çdo gjë që përjetoni me detaje të qarta dhe me ngjyra natyrale. Shijoni argëtim të pafund dhe biseda të gjata me një bateri 4500 mAh që jep jetë të gjatë të baterisë me një karikim të vetëm. Falë qëndrueshmërisë së jashtëzakonshme do të qëndroni në kontakt për shumë më gjatë. Dhe kur mbaroni energjinë, funksioni i karikimit të shpejtë 25W shfaqet. Ekrani me prekje Super AMOLED i Samsung Galaxy A71 ka një madhësi 6.7 " dhe rezolucion 2400 x 1080 piksel. Pajisja është e bazuar në një procesor 8- core Snapdragon 730 deri në 2.2 GHz me 6 GB memorie, 128 GB memorie të brendshme dhe kartë memorie microSD me 4x 64Mpx (f / 1.8) + 12Mpx (123 shkallë, f / 2.2) + 5Mpx (makro, f / 2.4) + 5Mpx (bokeh, f / 2.2) kamera të pasme të katërfishtë, kamerë selfie para 32Mpx (f / 2.2). Celulari është i pajisur edhe me teknologji wireless Bluetooth 5.0, NFC, Wi-Fi, GPS / GLONASS / GALILEO / BDS. Karakteristika të tjera përfshijnë një lexues të gjurmëve të gishtërinjve në ekran. Mundëson përdorimin në rrjetet 2G, 3G dhe LTE. Lidhësi themelor përmban një port modern USB Type-C dhe një 3.5 mm jack për kufje. Bateria është 4500 mAh dhe mbështet karikimin e shpejtë 25W. Sistemi operativ Android.</p>
    </div>
 
    
 
    <!-- Product Pricing -->
    <div class="product-price">
      <span>380$</span>
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