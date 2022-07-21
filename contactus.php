<?php 
include_once('./template/header.php');
?>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="http://localhost/flipwheels/css/contactus.css">
</head>
<div class="container">
        <div class="content">
            <div class="left-side">
                <div class="dev detail">
                    <a href="index.php"><img class="logo" src="./uploads/logo.png" alt="developer"></a>
                    <div class="myname">Flippwheels</div>
                </div>

                <div class="address details">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="topic">Address</div>
                    <div class="text-one">Kathmandu, Nepal</div>
                </div>
                <div class="phone details">
                    <i class="fas fa-phone"></i>
                    <div class="topic">Phone</div>
                    <div class="text-one">+977-98XXXXXXXX</div>
                    <div class="text-two">+977-98XXXXXXXX</div>
                </div>
                <div class="email details">
                    <i class="fas fa-envelope"></i>
                    <div class="topic">Email</div>
                    <div class="text-one">info@XXXXXXXXXXX.com</div>
                    <div class="text-two">XXXXXXXXX@gmail.com</div>
                </div>
            </div>
            <div class="right-side">
                <div class="topic-text">Send us a message</div>
                <p> Feel free to drop your message here.</p>
                <form action="#" method="GET">
                    <div class="input-box">
                        <input type="text" id="name" name="name" placeholder="Enter your name">
                    </div>
                    <div class="input-box">
                        <input type="email" id="email" name="email" placeholder="Enter your email">
                    </div>
                    <div class="input-box message-box">
                        <input type="text" id="message" name="message" placeholder="Enter your message">
                    </div>
                    <div class="button">
                        <input type="submit" value="Send">
                    </div>
                    <div class="button">
                        <a href="index.php"><input type="button" value="Home"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <style>
      
    /* Google Font CDN Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
/*
*{
  margin: 0;
  padding: 0;
  font-family: "Poppins" , sans-serif;
}
body{
  min-height: 100vh;
  width: 100%;
  background:linear-gradient(140deg, #c8e8e9, #e06ea3);
  display: flex;
  justify-content: center;
}
.container{
  width: 100%;
  background: #fff;
  border-radius: 9px;
  padding: 20px 60px 30px 40px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.container .content{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.container .content .left-side{
  width: 25%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
  position: relative;
}
.detail img{
  align-items: center;
  width: 80%;
  padding-left: 20px;
  align-content: center;
  margin-left: 9px;
}
.detail .myname{
  
  content: '';
  align-content: center;
  font-size: 23px;
  align-items: center;
  font-weight: 800;
  color: rgb(25, 8, 122);
  font-family: "Sofia", sans-serif;

}
.content .left-side::before{
  content: '';
  position: absolute;
  height: 80%;
  width: 2px;
  right: -15px;
  top: 50%;
  transform: translateY(-50%);
  background: #afafb6;
}
.content .left-side .details{
  margin: 14px;
  text-align: center;
}
.content .left-side .details i{
  font-size: 30px;
  color: #3e2093;
  margin-bottom: 10px;
}
.content .left-side .details .topic{
  font-size: 18px;
  font-weight: 500;
}
.content .left-side .details .text-one,
.content .left-side .details .text-two{
  font-size: 14px;
  color: #afafb6;
}
.container .content .right-side{
  width: 75%;
  margin-left: 75px;
}
.content .right-side .topic-text{
  font-family: "Audiowide", sans-serif;
  font-size: 35px;
  font-weight: 600;
  color: #3e2093;
}
.right-side .input-box{
  height: 50px;
  width: 100%;
  margin: 12px 0;
}
.right-side .input-box input,
.right-side .input-box textarea{
  height: 100%;
  width: 90%;
  border: none;
  outline: none;
  font-size: 16px;
  background: #F0F1F8;
  border-radius: 6px;
  padding: 0 15px;
  resize: none;
}
.right-side .message-box{
  min-height: 110px;
}
.right-side .input-box textarea{
  padding-top: 6px;
}
.right-side .button{
  display: inline-block;
  margin-top: 12px;
}
.right-side .button input[type="button"]{
  color: #fff;
  font-size: 18px;
  outline: none;
  border: none;
  padding: 8px 16px;
  border-radius: 6px;
  background: #7e066e;
  cursor: pointer;
  transition: all 0.3s ease;
}
.right-side .button input[type="submit"]{
  color: #fff;
  font-size: 18px;
  outline: none;
  border: none;
  padding: 8px 16px;
  border-radius: 6px;
  background: #7e066e;
  cursor: pointer;
  transition: all 0.3s ease;
}
.button input[type="button"]:hover{
  background: #cc54b8;
}

@media (max-width: 950px) {
  .container{
    width: 90%;
    padding: 30px 40px 40px 35px ;
  }
  .container .content .right-side{
   width: 75%;
   margin-left: 55px;
}
}
@media (max-width: 820px) {
  .container{
    margin: 40px 0;
    height: 100%;
  }
  .container .content{
    flex-direction: column-reverse;
  }
 .container .content .left-side{
   width: 100%;
   flex-direction: row;
   margin-top: 40px;
   justify-content: center;
   flex-wrap: wrap;
 }
 .container .content .left-side::before{
   display: none;
 }
 .container .content .right-side{
   width: 100%;
   margin-left: 0;
 }
}


    </style>*/
<?php include_once('./template/footer.php'); ?> 