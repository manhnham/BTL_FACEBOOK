    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>User Account Activation by Email Verification using PHP</title>
        <!-- CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <?php
    if($_GET['key'] && $_GET['token'])
    {
                $host = "localhost";
                $username = "root";
                $password = "";
                $databaseName = "socialnetwork";
                $conn = new mysqli($host, $username, $password, $databaseName);
                
                if ($conn->connect_error) {
                    die("connect_failed");
                }
                $useremail = $_GET['key'];
                $token = $_GET['token'];
                $query = mysqli_query($conn, "SELECT * FROM `users` WHERE `email_verification_link`='".$token."' and `user_email`='".$useremail."'");
                $d = date('Y-m-d H:i:s');
                if (mysqli_num_rows($query) > 0) {
                $row= mysqli_fetch_array($query);
                if($row['email_verified_at'] == NULL){
                    $sql2 = "UPDATE `users` set `email_verified_at` ='$d',`user_active_status` = 1 WHERE `user_email`='".$useremail."'";
                    mysqli_query($conn,$sql2);
                    $msg = "Bạn đã kích hoạt tài khoản thành công! Vui lòng quay lại trang chủ để đăng nhập.";
                }else{
                $msg = "Email của bạn đã được kích hoạt";
                }
    } else {
    $msg = "Email chưa được đăng kí";
    }
    }
    else
    {
    $msg = "Đã xảy ra lỗi vui lòng thử lại sau";
    }
    ?>
        <div class="container mt-3">
            <div class="card">
                <div class="card-header text-center">
                    Kích hoạt tài khoản ứng dụng MyFace
                </div>
                <div class="card-body">
                    <p>
                        <?php echo $msg; ?>
                    </p>
                </div>
            </div>
        </div>
    </body>

    </html>