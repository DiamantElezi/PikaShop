<?php

session_start();

include 'inc/head.php';
include 'inc/navbar.php';


include_once 'UserMapper.php';

if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
  $mapper =  new UserMapper();
  $userList = $mapper->getAllUsers();
  header("Location:../admin/home.php");
} 
else {
  header("Location:index.php");
}
?>
  <div class="wrapper">
    <main>
      <h1>Welcome> </h1>
    </main>
  </div>


</body>
</html>