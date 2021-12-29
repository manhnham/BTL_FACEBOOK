<?php

  require("config/constants.php");
  if(isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null){
    header("location: feed.php");
  }
  if (isset($_POST['btnlogin']) && $_POST['email'] != null && $_POST['password'] != null) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "select * from users where email ='$email'";
    $result_1 = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result_1) > 0) {
      $row = mysqli_fetch_assoc($result_1);
      $pass_saved = $row['password'];
      if (password_verify($password, $pass_saved)) {
        $_SESSION['login'] = "<div class='text-success'>Đăng nhập thành công.</div>";
        $sql = "select id from users where email = ?";
        $cus = simpleQuery($sql, 1, [$email])[0];
        $_SESSION["user_id"] = $cus["id"];
        header("location: index.php");
      } else {
        header("location: index.php");
        $_SESSION['login'] = "<div class='text-danger'>Sai tên đăng nhập hoặc mật khẩu</div>";
        // header("Location:login.php");
      }
    } else {
        header("location: index.php");
      $_SESSION['login'] = "<div class='text-danger'>Sai tên đăng nhập hoặc mật khẩu</div>";
      // header("Location:login.php");
    }
  } else {
    header("location: index.php");
  }
  ob_end_flush();

?>
