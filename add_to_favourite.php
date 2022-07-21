<?php 
if (isset($_POST['product_id']))
{
    include_once('./template/session.php');
    $user_id = $_SESSION['USER_ID'] ?? null;
    if (!$user_id) {
        header('Location: http://localhost/flipwheels/login.php');
        die();
    }
    $conn = $pdo->open();
	$product_id=$_POST['product_id'];
    try{
        $stmt = $conn->prepare("SELECT * FROM favourites WHERE users_id = :users_id AND products_id = :products_id");
        $stmt->execute(['users_id'=>$user_id,'products_id' => $product_id]);
        $check = $stmt->fetch();
        if (!empty($check) && count($check) > 0) {
            echo "Already Added To Favourite"; 
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        }
        
        $stmt = $conn->prepare("INSERT INTO favourites (users_id, products_id) VALUES (:users_id, :products_id)");
        $stmt->execute(['users_id'=>$user_id,'products_id' => $product_id]);
        $pdo->close();
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }catch(PDOException $e){
        $pdo->close();
        echo "Error inserting into datebase";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
}else{
    echo "Method Not Allowed";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
?>