<?php
if($_POST['email'])
{ 
    require"db.php";
    $result = mysqli_query($conn,"SELECT * FROM users WHERE email='" .$_POST['email'] . "'");


    if (mysqli_num_rows($result) <=0)
    {
       echo"Email hợp lệ, có thể đăng kí";
    }else
    {
        echo"Email đã được đăng kí, vui lòng kiểm tra Hộp thư kích hoạt đăng kí";
    }
}
?>