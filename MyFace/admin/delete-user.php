<?php 
  require_once("../functions/functions.php");
  session_start();
  ob_start();
// Check whether user is logged on or not
  require_once("check-admin.php");


  if(isset($_GET["id"])){
      $id = $_GET["id"];
      $sql = "DELETE FROM `users` where `user_id` = ".$id."";
      $query = mysqli_query($conn, $sql);
      if ($query){
        $_SESSION["alert"] = "Xóa thành công!";
        header("location: users.php");
      } else {
        $_SESSION["alert"] = "Xóa thất bại! Hãy thử lại";
        header("location: users.php");
      }
    }
    

?>

