<?php 
include_once('./template/header.php');
if (!$user_id) {
    header('Location: http://localhost/flipwheels/login.php');
    die();
}
if ($user_type != 'SELLER'){
    echo "<script>alert('Permission Denied')</script>";
    header('Location: http://localhost/flipwheels/');
    die();
}
?>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="http://localhost/flipwheels/css/productsubmission.css">
</head>
<div class="container">
    <h1>Hello seller, place your ads right here!</h1>
        <form action="product_submission.php" method="POST" enctype="multipart/form-data">
            <label>Product Image</label><br><br>
            <input type="file" name="upfile"><br><br>
            <label>Product title</label><br>
            <input type="text" class="txt" name="pname" placeholder="Product title" required><br>
            <label>Product Registered Number</label><br>
            <input type="text" class="txt" name="pnumber" placeholder="Product Number" required>
            <label>Descriptions</label><br>
            <input type="text" class="txt" name="descriptions" placeholder="Descriptions" required><br>

            <p>Is price negotiable?</p>
            <input type="radio" id="price" name="negotiable" value="yes">Yes<br>
            <input type="radio" id="price" name="negotiable" value="no">No<br>

            <br>
            <label>Make Year</label><br>
            <input type="text" class="txt" name="makeyear" placeholder="products manufacturing year" required>

            <br>
            <label>Color</label><br>
            <input type="text" class="txt" name="color" placeholder="products Color type" required>

            <br>
            <label>Kilometers driven</label><br>
            <input type="text" class="txt" name="kmdriven" placeholder="products driven in Kiolometers" required>

            <br>
            <p>Fuels used</p>
            <input type="radio" id="fuels" name="fuels" value="petrol">
            Petrol<br>
            <input type="radio" id="fuels" name="fuels" value="diesel">
            Diesel<br>
            <input type="radio" id="fuels" name="fuels" value="electric">
            Electric<br>
            <input type="radio" id="fuels" name="fuels" value="no">
            None<br>

            <br>
            <label>Engine in CC</label><br>
            <input type="text" class="txt" name="engineincc" placeholder="Products engine in CC">

            <br>
            <label>Product used for(months/years)</label><br>
            <input type="text" class="txt" name="productused" placeholder="how many months or years you have used?" required>


            <Label>Select category</Label><br>
            <select name="type" required>
            <option value="two">Two-wheelers</option>
            <option value="three">Three-Wheelers</option>
            <option value="four">Four-Wheelers</option>
            </select>

            <br>
            <p>Home delivery service</p>
            <input type="radio" id="delivery" name="delivery" value="yes">Availiable<br>
            <input type="radio" id="delivery" name="delivery" value="no">Sorry! Not availiable<br>

            <br>
            <label>Offered Price</label><br>
            <input type="text" class="txt" name="priceoffered" placeholder="Eg:Rs.100" required><br>

            <input type="submit" name="submit" class="btn-btn-success" value="Submit">
        </form>
</div>
<?php include_once('./template/footer.php'); ?> 

