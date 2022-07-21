<?php 
include_once('./template/header.php');
?>
<br>
<br>
<br>
<script>
.container {
    width: 100%;
    background-color: #fff;
    padding: 25px 30px;
    border-radius: 10px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
}
} 
</script>
  <div class="container">
    <div class="title">Registration Form</div>
    <div class="content">
      <form action="#" method="GET">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" id="FullName" name="FullName" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" id="Username" name="Username" placeholder="Enter your username" required>
          </div>

          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" id="Email" name="Email" placeholder="Enter your email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Email</span>
            <input type="text" id="confim-email" name="confirm-email" placeholder="Re-enter your email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
          </div>
          <div class="input-box">
            <span class="details">Date of Birth</span>
            <input type="date" id="date-of-birth" name="date-of-birth" required>
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
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" id="address" name="address" placeholder="Enter your address" required>
          </div>    
        </div>

        <div class="id-type">
          <input type="radio" name="idtype" id="dot-1">
          <input type="radio" name="idtype" id="dot-2">
          <input type="radio" name="idtype" id="dot-3">
          <span class="id-type">ID type</span>
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="idtype">Seller</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="idtype">Blogwriter</span>
            </label>
            <label for="dot-3">
              <span class="dot three"></span>
              <span class="idtype">User</span>
            </label>
          </div>
        </div>


        <div class="terms">
          <input type="checkbox" id="terms" name="terms" class="terms-icon" required>
          <span>I agree to the terms and conditions</span>
        </div>

        <div class="button">
          <input type="submit" value="Register">
        </div>
        <div class="sign_up">
          Already a member? <a href="login.html">Login</a>
        </div>
        <div class="sign_up">
          <a href="contactus.html">Contact Us</a>

      </form>
    </div>
  </div>

  <?php include_once('./template/footer.php'); ?> 

  