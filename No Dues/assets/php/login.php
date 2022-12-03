<?php
//error_reporting(0);
include "connection.php" ;

if(!empty($_SESSION["user"])){
   header("Location: E:/Xamp Server/htdocs/No Dues/slideshow.php");
}

if(isset($_POST["submit"])){
$scholar = $_POST['scholar'];
$password = $_POST['password'];
//$encrypt_pwd = md5($password);

   $sql = "SELECT * FROM users WHERE scholar='$scholar' AND password='$password' ";
		  $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
         if ($password == $_POST['password']){
            $_SESSION["login"] = true;
            $_SESSION["user"] = $_POST["user"];
            header("location: E:/Xamp Server/htdocs/No Dues/slideshow.php");
         }
         else{
            echo '<script>alert("Welcome Back! You are Logged in.")</script>';
	        }
         }
    else {
        echo '<script>alert("Username or Password does not match.")</script>';
    }
}

?>