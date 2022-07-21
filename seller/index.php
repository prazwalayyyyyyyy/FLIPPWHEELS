<?php 
include_once('../template/header.php');
?>
<head>
  <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="http://localhost/flipwheels/css/bscss.css">
</head>
<table id="example1" class="table table-bordered">
<thead>
<th>Name</th>
<th>Photo</th>
<th>Description</th>
<th>Price</th>
</thead>
<tbody>
<?php
$conn = $pdo->open();

try{
    $stmt = $conn->prepare("SELECT * FROM products WHERE seller_id=:seller_id");
    $stmt->execute(['seller_id'=>$_SESSION['USER_ID']]);
    foreach($stmt as $row){
        $image = (!empty($row['photo'])) ? 'http://localhost/flipwheels/uploads/'.$row['photo'] : './uploads/logo.png';
        echo "
        <tr>
        <td>".$row['name']."</td>
        <td>
        <img src='".$image."' height='100px' width='100px'>
        </td>
        <td>".$row['description']."
        </td>
        <td>".$row['price']."
        </td>
        </tr>
        ";
    }
}
catch(PDOException $e){
    echo $e->getMessage();
}

$pdo->close();
?>
</tbody>
</table>
<?php include_once('../template/footer.php'); ?> 