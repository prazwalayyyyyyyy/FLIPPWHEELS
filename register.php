<?php
include_once('./template/header.php');
include_once('./template/conn.php');
if(isset($_POST['submit']))
{
	$fullname = $_POST['fullname'];
	$username =$_POST['username'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$address= $_POST['address'];
	$type = strtoupper($_POST['type']);
   $email_regex = '/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/';
  //Define errors variable;
  $errors = '';

  $conn = $pdo->open();
  $stmt = $conn->prepare("SELECT * from users where username= :username");
  $stmt->execute(['username'=>$username]);
  $user = $stmt->fetch();

  if(!empty($user) && count($user) > 0)
	{
		$errors .= "Username already exists.</br>";
	}


  //check for fullname length and value.
  if (empty($fullname)) {
    $errors .= "Fullname is required.\n";
  }
  if(strlen($fullname) > 100){
    $errors .= "Fullname cannot exceed 100 characters.\n";
  }
  //check for email pattern
  if(!preg_match($email_regex,$email)){
    $errors .= 'Email is not a valid email.\n';
  }
  //check if password confirmation matches
  if($password != $cpassword){
    $errors .= "Password confirmation does not match.</br>";

  }
  // print_r($type);
  if (empty($errors)) {
      // if($type != 'SELLER' || $type != 'BUYER'){
      //   $type = 'BUYER';
      // }
      // print_r($type);
      // die();
      $password = md5($password);
      try{
          $stmt = $conn->prepare("INSERT INTO users(`fullname`, `username`, `email`, `phone`, `password`, `address`, `type`) VALUES (:fullname,:username,:email,:phone,:password,:address,:type)");

          $stmt->execute(['fullname'=>$fullname, 'username'=>$username, 'email'=>$email, 'phone'=>$phone, 'password'=>$password,'address'=>$address,'type'=>$type]);
          
          header('Location: http://localhost/flipwheels/login.php');
      }
      catch(PDOException $e){
        echo "Error inserting into datebase";
      }
  }
}
$pdo->close();
	?>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="http://localhost/flipwheels/css/register.css">
</head>
  <div class="container">
    <div class="title">Registration Form</div>
    <div class="content">
      <form action="register.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" id="FullName" name="fullname" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" id="Username" name="username" placeholder="Enter your username" required>
          </div>

          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" id="Email" name="email" placeholder="Enter your email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="tel" id="phone" name="phone" placeholder="98XXXXXXXX" pattern="[0-9]{10}" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" id="confirm-password" name="cpassword" placeholder="Confirm your password" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" id="address" name="address" placeholder="Enter your address" required>
          </div>    
        </div>

        <Label>ID TYPE</Label><br>
          <select name="type" required>
          <option value="seller">Seller</option>
          <!--<option value="blogwriter">Blogwriter</option>-->
          <option value="buyer">Buyer</option>
          </select>

        <div class="terms">
          <input type="checkbox" id="terms" name="terms" class="terms-icon" required>
          <span>I agree to the terms and conditions</span>

          <?php 
          if(!empty($errors)):  
          ?> 
          <div class="error">
              <?php echo $errors; ?>
          </div>
          <?php 
            endif;
          ?>
        </div>

        <div class="button">
          <input type="submit" name="submit" class="btn-btn-success" value="Register">
        </div>
        <div class="sign_up">
          Already a member? <a href="login.php">Login</a>
        </div>
        <div class="sign_up">
          <a href="contactus.php">Contact Us</a>

      </form>
    </div>
  </div>
<?php include_once('./template/footer.php'); ?> 
