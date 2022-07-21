<?php 
include_once('./template/header.php');
try{
    $conn = $pdo->open();
    $stmt = $conn->prepare("SELECT id,photo,name,price FROM products");
    $stmt->execute();
    $products = $stmt->fetchAll();
    $pdo->close();
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>
<head>
<meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="http://localhost/flipwheels/css/product.css">
</head>

<div class="flex">
    <?php foreach($products as $product): ?>
    <div class='item'>
        <a href="<?php echo 'http://localhost/flipwheels/product_detail.php?id='.$product['id'];?>">
        <img src="<?php echo "http://localhost/flipwheels/uploads/".$product['photo'] ;?>" alt="" width="200px" height="200px">
        <h4><?php echo $product['name'];?></h4>
        <h5><?php echo $product['price'];?></h4>
    </a>
    </div>
    <?php endforeach;?>
</div>
    </style>

<?php include_once('./template/footer.php'); ?> 
