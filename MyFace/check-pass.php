<?php 
require 'functions/functions.php';
session_start();
if (isset($_SESSION['user_id'])) {
    header("location:home.php");
}
session_destroy();
session_start();
ob_start(); 
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
if (isset($_POST['userpass'])) {
    $conn = connect();
    $userpass = $_POST['userpass'];
    if(!empty($_POST["userpass"]) && ($_POST["userpass"])) {
        $userpass = test_input($_POST["userpass"]);
        if (strlen($_POST["userpass"]) <= '6') {
            echo "Mật khẩu phải có độ dài 6 kí tự bao gồm chữ hoa, chữ thường";
        }
        elseif(!preg_match("#[A-Z]+#",$userpass)) {
            echo "Mật khẩu phải có độ dài 6 kí tự bao gồm chữ hoa, chữ thường";
        }
        elseif(!preg_match("#[a-z]+#",$userpass)) {
            echo "Mật khẩu phải có độ dài 6 kí tự bao gồm chữ hoa, chữ thường";
        }
    }
    elseif(!empty($_POST["userpass"])) {
        echo "Mật khẩu xác nhận không khớp";
    } else {
        echo "Hãy nhập mật khẩu";
    }
    
}
?>