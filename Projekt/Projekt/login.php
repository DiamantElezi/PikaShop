<?php 
require 'config.php';
session_start();

$errors = [];
$errors2 = [];
$username = "";
$email = "";
$password = "";
$cpassword = "";

if (isset($_POST['submit_login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = $connection->prepare('SELECT * FROM users WHERE username = :username');
  $query->bindValue(":username", $username);
  $query->execute();

  $user = $query->fetch();
  $userName = $user["username"] ?? null;
  $userPassword = $user["password"] ?? null;


  if (trim($username) === "" || trim($password) === "")
    $errors[] = "Fields must be filled!";
  else if (!$userName)
    $errors[] = "This user doesn't exist!";
  else if ($username === $userName && !password_verify($password, $userPassword))
    $errors[] = "Wrong password!";
  else if ($username !== $userName && !password_verify($password, $userPassword))
    $errors[] = "Wrong Credentials";
  else {
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['email'] = $user['email'];
    header("Location: ./admin/index.php");
  }
}

if (isset($_POST['submit_signup'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
  $query->bindValue(":email", $email);
  $query->execute();
  $userExist = $query->fetch(PDO::FETCH_ASSOC);

  if (!$username) {
    $errors2[] = "Username is required!";
  } else if (!$email) {
    $errors2[] = "Email is required!";
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors2[] = "Invalid email format!";
  } else if (!$password) {
    $errors2[] = "Password is required!";
  }

  if ($userExist) {
    $errors2[] = "This user exist!";
  }
  if (empty($errors2)) {
    $query = $connection->prepare('INSERT INTO users (username, email, password) VALUES(:username, :email, :password)');
    $query->bindValue(":username", $username);
    $query->bindValue(":email", $email);
    $query->bindValue(":password", password_hash($password, PASSWORD_DEFAULT));

    $query->execute();
    header('Location: login.php');
  }
}
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
        <span>Get 30% OFF This Christmas Holidays</span>
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
          </ul>
      </div>
      <?php foreach ($errors as $error) : ?>
                   <div style="color:red; background: lightred; border:red;" role="alert">
                           <h5><?php echo $error; ?></h5>
                   </div>
           <?php endforeach; ?>
   <br><br><br>
   
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form id="form2" method="POST">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" name="username" placeholder="username" id="sname"/>
			<input type="text" name="email" placeholder="Email" id="semail"/>
			<input type="password" name="password" placeholder="Password" id="spassword" />
			<button type="submit" name="submit_signup" value="register">Sign Up</button>
		</form>
	</div> 
	<div class="form-container sign-in-container">
		<form id="form" method="POST">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<div id="error"></div>
			<input id="name" name="username" type="text" placeholder="Username">
			<input id="password" name="password" type="password" placeholder="Password">
			<a href="#">Forgot your password?</a>
			<button type="submit" name="submit_login">Submit</button>
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