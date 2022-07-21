<?php
session_start();
if(isset($_SESSION['USER_ID'])){
    session_destroy();
} 
header('Location: http://localhost/flipwheels/');
die();
?>