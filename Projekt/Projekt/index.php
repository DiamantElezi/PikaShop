<?php 
session_start();
include 'inc/header.php';
?>

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
              </li>
              <!-- <li class="nav-item"><a href="admin/home.php">Dashboard</a></li> -->
        
 
              

              <?php
      if (isset($_SESSION["role"])) {
      ?>
      <li class="nav-item">
        <a href="logout.php">
        <li><b><i>Logout </i><b></li>
        </a>
        </li>
      <?php
      }
      ?>
             
              
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

    <!-- Hero -->
    <div class="hero">
      <div class="hero-content d-flex container">
        <div class="left">
          <span class="subtitle"> </span>
          <h1 class="title">
            Up to
            <span class="color">90% <br />
              Discount</span>
            on These <br />
            cold Days
          </h1>

          <h5>From 20th Jan to 31st jan</h5>
          <a href="shop.php" class="btn">SHOP NOW</a>
        </div>

        <div class="right">
          <img src="./img/bng2.0.png" alt="" />
        </div>
      </div>
    </div>
  </header>

  <!--  -->
  <section class="section services">
    <div class="service-center container">
      <div class="service">
        <span class="icon"><i class="bx bx-purchase-tag"></i></span>
        <h4>Free Shipping</h4>
        
      </div>

      <div class="service">
        <span class="icon"><i class="bx bx-gift"></i></span>
        <h4>Securety Payments</h4>

      </div>

      <div class="service">
        <span class="icon"><i class="bx bx-book-reader"></i></span>
        <h4>14-Day Returns</h4>
        
      </div>

      <div class="service">
        <span class="icon"><i class="bx bx-headphone"></i></span>
        <h4>24/7 Support</h4>
       
      </div>
    </div>
  </section>

  <!-- New Arrivals -->
  <section class="section">
    <div class="title">
      <h1><span>New</span> Arrivals</h1>
    </div>
    <div class="product-center container">
      <div class="product">
        <div class="img-cover">
          <a href="produkti.php">
          <img src="./img/product1.jpg" >
          </a>
        </div>
        <p>Hp Pavilion i5</p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bx-star"></i>
        </div>
        <div class="price">$899</div>
      </div>

      <div class="product">
        <div class="img-cover">
          <a href="produkti2.php">
          <img src="./img/camera.jpg" alt="" />
          </a>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          


        </div>
        <p>Security camera </p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bx-star"></i>
        </div>
        <div class="price">$150</div>
      </div>

      <div class="product">
        <div class="img-cover">
          <a href="produkti3.php">
          <img src="./img/product3.jpg" alt="" />
          </a>
        </div>
        <p>Smartwatch </p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bx-star"></i>
        </div>
        <div class="price">$300</div>
      </div>
      <div class="product">
        <div class="img-cover">
          <a href="produkti4.php">
          <img src="./img/product4.jpg" alt="" />
          </a>
        </div>
        <p>Smartphone</p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bx-star"></i>
        </div>
        <div class="price">$600</div>
      </div>
    </div>
  </section>

  <!-- Shop By Category -->
  <section class="section">
    <div class="title">
      <h1><span>Shop By</span> Categories</h1>
    </div>
    <div class="cat container">
      <div class="item item-1">
        <a href="produkti2.php">
        <img src="./img/camera.jpg" alt="" />
        </a>      
      </div>
      <div class="item item-2">
        <a href="produkti9.php">
        <img src="./img/cat3.jpg" alt="" />
        </a>
      </div>
      <div class="item item-3">
        <a href="produkti10.php">
        <img src="./img/cat1.jpg" alt="" />
        </a>
      </div>
      <div class="item item-4">
        <a href="produkti11.php">
        <img src="./img/cat2.jpg" alt="" />
        </a>      
      </div>
    </div>
  </section>

  <!-- Popular Products -->
  <section class="section">
    <div class="title">
      <h1>Popular <span>Products</span></h1>
    </div>
    <div class="product-center container">
      <div class="product">
        <div class="img-cover">
          <a href="produkti.php">
          <img src="./img/product1.jpg" alt="" />
          </a>
        </div>
        <p>Hp Pavilion i5</p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bx-star"></i>
        </div>
        <div class="price">$899</div>
      </div>

      <div class="product">
        <div class="img-cover">
          <a href="produkti2.php">
          <img src="./img/camera.jpg"  alt="" />
          </a>        
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>

        <p>Security camera PRO</p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bx-star"></i>
        </div>
        <div class="price">$200</div>
      </div>

      <div class="product">
        <div class="img-cover">
          <a href="produkti3.php">
          <img src="./img/product3.jpg" alt="" />
          </a>        
        </div>
        <p>Smartwatch PRO</p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bx-star"></i>
        </div>
        <div class="price">$350</div>
      </div>
      <div class="product">
        <div class="img-cover">
          <a href="produkti.php">
            <a href="produkti4.php">
          <img src="./img/product4.jpg" alt="" />
          </a>
          </a>
        </div>
        <p>Smartphones</p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bx-star"></i>
        </div>
        <div class="price">$600</div>
      </div>
      <div class="product">
        <div class="img-cover">
          <a href="produkti5.php">
          <img src="./img/product5.jpg" alt="" />
          </a>
        </div>
        <p>Android Smartphone</p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bx-star"></i>
        </div>
        <div class="price">$500</div>
      </div>
      <div class="product">
        <div class="img-cover">
          <a href="produkti6.php"> 
          <img src="./img/product6.jpg" alt="" />
          </a>
        </div>
        <p>Headphones PRO </p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bx-star"></i>
        </div>
        <div class="price">$200</div>
      </div>
      <div class="product">
        <div class="img-cover">
          <a href="produkti7.php">
          <img src="./img/product7.jpg" alt="" />
          </a>
        </div>
        <p>Smartwatch PRO</p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bx-star"></i>
        </div>
        <div class="price">$350</div>
      </div>
      <div class="product">
        <div class="img-cover">
          <a href="produkti8.php">
          <img src="./img/11.jpg" alt="" />
          </a>
        </div>
        <br>
        <br>

        <p>Security camera X</p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bx-star"></i>
        </div>
        <div class="price">$200</div>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <?php include 'inc/footer.php'; ?>

  <!-- Script -->
  <script src="js/index.js"></script>

