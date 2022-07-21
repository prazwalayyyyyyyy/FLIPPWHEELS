<?php 
include_once('./template/session.php');
$conn = $pdo->open();
if (isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
  // print_r($_POST);

    $stmt = $conn->prepare("SELECT id, username, email, password, type, COUNT('username') AS numrows FROM users WHERE username=:username AND type != 'ADMIN'");
    $stmt->execute(['username'=>$username]);
    $user = $stmt->fetch();
    // print_r($user);
    // print_r(md5($password));
    if($user['numrows'] > 0){

	    $db_pass= $user['password'];

        if(md5($password) == $db_pass)
        {
        $_SESSION['USER_ID'] = $user['id']; 
        $_SESSION['USER_EMAIL'] = $user['email']; 
        $_SESSION['USER_NAME'] = $user['username']; 
        $_SESSION['USER_TYPE'] = $user['type'];
            if ($user['type'] == 'BUYER') {
                $redirect = 'http://localhost/flipwheels/buyer';
            }else{
                $redirect = 'http://localhost/flipwheels/seller';
            }
        header('location: '.$redirect);
        }else{ 
            echo"Password Incorrect";
        }
    }else {
        echo"Invalid username";
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="http://localhost/flipwheels/css/login.css">
  <title>Login Form</title>
</head>

<body>
  <div class="main_div">
    <div class="title">
      <h3>Login</h3>
    </div>

    <form action="" method="POST">
      <div class="input_box">
        <div class="icon"><i class="fa fa-user"></i></div>
        <input type="text" id="username" name="username" placeholder="Username" required>

      </div>
      <div class="input_box">
        <div class="icon"><i class="fa fa-lock"></i></div>
        <input type="password" id="password" name="password" placeholder="Password" required>
      </div>
      <div class="option_div">
        <div class="check_box">
          <input type="checkbox">
          <span>Remember me</span>
        </div>
        <div class="forget_div">
          <a href="#">Forgot password?</a>
        </div>
      </div>
      <div class="input_box button">
        <input type="submit" name="submit" value="Login">
      </div>

      <div class="sign_up">
        Not a member? <a href="register.php">Sign Up now</a>
      </div>
      <div class="sign_up">
        <a href="contactus.html">Contact Us</a><br>
        <a href="index.php">Home</a>
      </div>
      <div class="social_icons">
        <a href="#"><i class="fab fa-facebook-f"></i> <span>Facebook</span></a>
        <a href="#"><i class="fab fa-twitter"></i><span>Twitter</span></a>
      </div>
      <div class="message">
        <a href="contactus.html">
          <i class="fab fa-envelope" aria-hidden="true"></i><span>Message us</span>
        </a>
      </div>
    </form>
  </div>

</body>
<script>

</html>