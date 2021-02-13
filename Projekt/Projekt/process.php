<?php
require 'config.php';
session_start();

// if(isset($_POST['register']))
// {
//     $con=config::connect();
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//    if (insertDetails($con , $name , $email , $password));
//    {
//        header("Location: admin/index.php");
//    }
// }
// function  insertDetails($con , $name , $email , $password)
// {
//     $query = $con -> prepare ("
   
//     INSERT INTO users (name , email ,password)

//     VALUES (:name , :email , :password)
//     ");
//     $query ->bindParam(":name",$name);
//     $query ->bindParam(":email",$email);
//     $query ->bindParam(":password",$password);

//     return $query -> execute ();
// }


// Login



$errors = [];
$username = "";
$password = "";




?>