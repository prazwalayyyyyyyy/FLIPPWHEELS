<?php 
include_once('./template/header.php');
$conn = $pdo->open();
try{
    $id = $_GET['id'] ?? null;
    $user_id = $_SESSION['USER_ID'] ?? null;
    $condition = '';
    if (!$id) {
        header('Location : http://localhost/flipwheels/products.php');
    }
    if ($user_id) {
        $stmt = $conn->prepare("SELECT id FROM favourites WHERE users_id=:uid AND products_id=:pid");
        $stmt->execute(['pid'=>$id,'uid'=>$user_id]);
        $fav = $stmt->fetch();
    }
    $stmt = $conn->prepare("SELECT p.*, u.fullname, u.address, u.phone FROM products as p LEFT JOIN users as u ON u.id = p.seller_id  WHERE p.id=:id");
    $stmt->execute(['id'=>$id]);
    $product = $stmt->fetch();
}
catch(PDOException $e){
    echo $e->getMessage();
}
$pdo->close();
?>
<head>
<meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="http://localhost/flipwheels/css/product.css">
</head>
<div>
<section class="content">
<div class="flex">
    <div class="col-sm-6">
        <img src="<?php echo (!empty($product['photo'])) ? 'http://localhost/flipwheels/uploads/'.$product['photo'] : 'http://localhost/flipwheels/uploads/logo.png'; ?>" width="250px" height="250px">
        <br><br>
        <?php if(!empty($fav['id'])): ?>
            <p>Added To Favourite</p>
        <?php else:?>
        <form class="form-inline" id="productForm" method="POST" action="add_to_favourite.php">
            <div class="form-group">
                <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                <button type="submit">Add To Favourite</button>
            </div>
        </form>
        <?php endif;?>
    </div>
    <div class="col-sm-6">
        <h1 class="page-header"><?php echo $product['name']; ?></h1>
        <h3><b>Rs. <?php echo number_format($product['price'], 2); ?></b></h3>
        <p><b>Negiotiable:</b> <?=$product['negotiable']?></p>
        <p><b>Delivery:</b> <?=$product['delivery']?></p>
        <p><b>Registration Number:</b> <?=$product['registration_number']?></p>
        <p><b>Color:</b> <?=$product['color']?></p>
        <p><b>Year:</b> <?=$product['makeyear']?></p>
        <p><b>Used For:</b> <?=$product['productused']?></p>
        <p><b>KM driven:</b> <?=$product['kmdriven']?></p>
        <p><b>Type:</b> <?=$product['type']?></p>
        <p><b>Seller :</b> <?=$product['fullname']?></p>
        <p><b>Address :</b> <?=$product['address']?></p>
        <p><b>Contact :</b> <?=$product['phone']?></p>
        <p><b>Description:</b></p>
        <p><?php echo $product['description']; ?></p>
    </div>
</div>
</section>
</div>
<?php include_once('./template/footer.php'); ?> 