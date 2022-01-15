<?php 
if (!isset($_SESSION['user_id'])) {
    header("location:../index.php");
} else {
  $conn = connect();
  $sql = "SELECT * FROM `users` WHERE `user_id` = '".$_SESSION['user_id']."' ";
  $query = mysqli_query($conn, $sql);
  if ($query) {
    if (mysqli_num_rows($query) == 1){
      $row = mysqli_fetch_assoc($query);
      if ($row['is_admin'] == 1){

      }else{
        header("location:../home.php");
      }
    }
  } else {
    header("location:../home.php");
  }
}
?>