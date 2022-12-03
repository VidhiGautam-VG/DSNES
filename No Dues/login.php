<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <!---title logo--->
	  <link rel="shortcut icon" type="image/png" href=".\img\DSVV.png"/>
	  <!------end----->

	  <!---------CSS Links Only---------->
			<link rel="stylesheet" type="text/css" href="assets/css/Login1.css">

       <style>
            body{
                background-image: url("bg.png");
                background-size: 100%;
                background-repeat: no-repeat;
            }
            .closebutn {
                margin-top: 10px;
                margin-right: 30px;
                color: black;
                font-weight: bolder;
                float: right;
                font-size: 70px;
                line-height: 40px;
                cursor: pointer;
                transition: 0.3s;
                border-radius: 30%;
                background: white;
            }
            .closebutn:hover {
                color: white;
                background: black;
                line-height: 40px;
                border-radius: 30%;
            }
    </style>     
	  <!----------END------->

</head>
<body>
    <!----------- Close Button ------------>
    <div class="closebutn">
        <span  onclick="location.href='slideshow.php';">&times;</span>
    </div>
        <br><br>
    <!----------- Close Button End ------------->
        <section class="log">
            <div>
                <form action="" method="post">
                    <div class="box">
                        <h2>Login</h2>
                        <br>
                        <div class="inputBox">
                            <input type="text" name="scholar" placeholder="Enter Scholar No." required="required">
                        </div>
                        <div class="inputBox">
                            <input type="password" name="password" placeholder="Enter Password" required="required">
                        </div>
                       
                        <div class="inputBox">
                            <input type="submit" name="submit" value="Submit">
                        </div>
                        <br>

                        <!--div class="add">
                            <a href="password.php">Forgot Password?</a>
                                <br-->
                            <a href="Regi.php">New User? Register Now.</a>
                                <br>
                            <a href="assets/admin/AdminLogin.php">Admin? Click Here</a>
                                <br>
                            <a href="assets/Department/dept_login.php">Department? Click here</a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
	</body>
</html>


		<!--PHP CODE START-->
<?php
//error_reporting(0);
include "connection.php" ;

if(isset($_POST["submit"])){

$scholar = $_POST['scholar'];
$password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE scholar='$scholar' AND password='$password' ";
    $result = mysqli_query($conn, $sql);

        $num = mysqli_num_rows($result);

        if ($num == 1) {
            echo '<script>alert("Welcome!")</script>';
            session_start();
                $_SESSION['submit'] = true;
                $_SESSION['scholar'] = $scholar;
                echo '<script>alert("Welcome Back! You are Logged in.")</script>';
                header('location: index.php');
        }
        else {
            echo '<script>alert("Username or Password does not match.")</script>';
        }
}
?>
