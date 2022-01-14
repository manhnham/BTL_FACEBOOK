<?php 
require 'functions/functions.php';
session_start();
if (isset($_SESSION['user_id'])) {
    header("location:home.php");
}
session_destroy();
session_start();
ob_start(); 

if (isset($_POST['useremail'])) {
    $conn = connect();
    $useremail = $_POST['useremail'];
    $query = mysqli_query($conn, "SELECT * FROM `users` WHERE `user_email`='".$useremail."'");
    if($query){
        $row = mysqli_fetch_assoc($query);
        if (mysqli_num_rows($query) == 1){
            echo "email đã tồn tại!";
        }
    }
}
?>