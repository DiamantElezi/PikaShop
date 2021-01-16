<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons -->
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />

  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="./styles.css" />
  <title>Pika Shop</title>
  <style>
      input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 2px solid rgb(255, 21, 243);
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #f64afc;
  color: rgb(0, 0, 0);
  padding: 12px 20px;
  border: 2px solid black;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #f700d6;
}

.contact-section {
  border-radius: 5px;
  
  padding: 20px;
}
  </style>
</head>
<body>
    <div class="promo">
        <span>Get 30% OFF This Christmas Holidays</span>
      </div>
     <!-- HEADER -->
  <header class="header">
    <!-- NAVIGATION -->
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
             <a href="index.php" class="nav-link"><b>Home</b></a>
            </li>
            <li class="nav-item">
              <a href="shop.php" class="nav-link"><b>Shop</b></a>
            </li>
            <li class="nav-item">
              <a href="about.php" class="nav-link"><b>About</b></a>
            </li>
            <li class="nav-item">
                <a href="contact.php" class="nav-link active"><b>Contact</b></a>
              </li>
              <li class="nav-item">
                <a href="login.php" class="nav-link"><b>Login</b></a> 
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
      <br>
      <h1 style="text-align: center;">Contact Us!</h1>
      <div class="contact-section">
        <form>
          <label for="fname"><b>First Name</b></label>
          <input type="text" id="fname" name="firstname" placeholder="Your name..">
      
          <label for="lname"><b>Last Name</b></label>
          <input type="text" id="lname" name="lastname" placeholder="Your last name..">  
          <label for="subject"><b>Subject</b></label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      
          <input type="submit" value="Submit">
        </form>
        <br><br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2934.077557973481!2d21.158016115184196!3d42.659711824118155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1608430980677!5m2!1sen!2s"
         width="100%" height="450" frameborder="0" style="border:2px solid black;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

      </div>
      <footer id="footer" class="section footer">
        <div class="second-container">
          <div class="footer-container">
            <div class="footer-center">
              <h3>EXTRAS</h3>
              <a href="#">Brands</a>
              <a href="#">Gift Certificates</a>
              <a href="#">Affiliate</a>
              <a href="#">Specials</a>
              <a href="#">Site Map</a>
            </div>
            <div class="footer-center">
              <h3>INFORMATION</h3>
              <a href="#">About Us</a>
              <a href="#">Privacy Policy</a>
              <a href="#">Terms & Conditions</a>
              <a href="#">Contact Us</a>
              <a href="#">Site Map</a>
            </div>
            <div class="footer-center">
              <h3>MY ACCOUNT</h3>
              <a href="#">My Account</a>
              <a href="#">Order History</a>
              <a href="#">Wish List</a>
              <a href="#">blogletter</a>
              <a href="#">Returns</a>
            </div>
            <div class="footer-center">
              <h3>CONTACT US</h3>
              <div>
                <span>
                  <i class="fas fa-map-marker-alt"></i>
                </span>
                42 Dream House, Dreammy street, 7131 Dreamville, USA
              </div>
              <div>
                <span>
                  <i class="far fa-envelope"></i>
                </span>
                Grand Hotel , Prishtina , Kosovo
            </div>
            <div>
              <span>
                <i class="far fa-envelope"></i>
              </span>
              PikaShop@gmail.com
            </div>
            <div>
              <span>
                <i class="fas fa-phone"></i>
              </span>
              +383 (0)45 555 555
            </div>
            <div>
              <span>
                <i class="far fa-paper-plane"></i>
              </span>
              Prishtina, Kosovo
              </div>
            </div>
          </div>
        </div>
        </div>
      </footer>
    
</body>
</html>