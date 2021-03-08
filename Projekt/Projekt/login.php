<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pika Shop</title>
       <!-- Boxicons -->
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />

  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/login.css">

</head>
<body>
    <div class="promo">
    <span>Get 30% off while using the code "336633"!!</span>
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
                <a href="contact.php" class="nav-link"><b>Contact</b></a>
              </li>
              <li class="nav-item">
                <a href="login.php" class="nav-link active"><b>Login</b></a> 
              </li>
			  
              <?php
              
      if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
      ?>
          <li class="nav-item">
        <a href="../admin/home.php">
          Dashboard
        </a>
        </li>
      <?php
      }
      ?>
              
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

   <br><br><br>
   
<div class="container" id="container">
	<div class="form-container sign-up-container">
	<form id="form2" method="POST" action="PhpBackend\loginAuth.php" >
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="https://www.facebook.com" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="https://www.gmail.com" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="https://www.linkedin.com" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" name="usernameR" placeholder="username" id="sname" >
			<input type="text" name="emailR" placeholder="Email" id="semail" >
			<input type="password" name="passwordR" placeholder="Password" id="spassword" />
			<button type="submit" name="submit_signup" value="register">Sign Up</button>
			<br>
			<small>Already registered ? <a href="login.php"><b><i><u>Sign In</u></i><b></a></small>
		</form>
	</div> 
	<div class="form-container sign-in-container">
		<form id="form" method="POST" action="PhpBackend\loginAuth.php">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="https://www.facebook.com" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="https://www.gmail.com" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="https://www.linkedin.com" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<div id="error"></div>
			<input id="name" name="username" type="text" placeholder="Username">
			<input id="password" name="password" type="password" placeholder="Password">
			
			<button type="submit" name="submit_login" value="login">Login</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<br> <br>

<?php include 'inc/footer.php'; ?>
   


  <!-- Script -->
  <script src="js/login.js"></script>
    
</body>
</html>