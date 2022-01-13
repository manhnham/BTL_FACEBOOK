<?php 
require 'functions/functions.php';
session_start();
if (isset($_SESSION['user_id'])) {
    header("location:home.php");
}
session_destroy();
session_start();
ob_start(); 
?>
<!DOCTYPE html5>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Facebook</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <!-- main style -->
    <link rel="stylesheet" href="css/main.css" />

</head>


<body class="bg-gray">
    <!-- Login -->
    <div class="container mt-5 pt-5 d-flex flex-column flex-lg-row justify-content-evenly">
        <!-- heading -->
        <div class="text-center text-lg-start mt-0 pt-0 mt-lg-5 pt-lg-5">
            <h1 class="text-primary fw-bold fs-0">facebook</h1>
            <p class="w-75 mx-auto fs-4 mx-lg-0">Facebook giúp bạn kết nối và chia sẻ với mọi người trong cuộc sống của
                bạn.
            </p>
        </div>
        <!-- form card -->
        <div style="max-width: 28rem; width: 100%">
            <!-- login form -->
            <!-- first was form tag -->
            <div class="bg-white shadow rounded p-3 input-group-lg">
                <div class="tabcontent" id="signin">
                    <form method="post" onsubmit="return validateLogin()">
                        <input type="text" class="form-control my-3" placeholder="Email hoặc số điện thoại" name="useremail" id="loginuseremail" />
                        <input type="password" class="form-control my-3" placeholder="Mật khẩu" name="userpass" id="loginuserpass" />
                        <button type="submit" class="btn btn-primary w-100 my-3" name="login" value="Login">Đăng nhập</button>
                    </form>
                </div>

                <a href="#" class="text-decoration-none text-center">
                    <p>Quên mật khẩu?</p>
                </a>
                <!-- create form -->
                <hr />
                <div class="text-center my-4">
                    <button class="btn btn-success btn-lg" type="button" data-bs-toggle="modal"
                        data-bs-target="#createModal">Tạo
                        tài khoản mới</button>
                </div>
                <!-- create modal -->
                <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <!-- head -->
                            <div class="modal-header">
                                <div>
                                    <h2 class="modal-title" id="exampleModalLabel">Đăng ký</h2>
                                    <span class="text-muted fs-7">Nhanh chóng và dễ dàng.</span>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <!-- body -->
                            <div class="modal-body" class="tabcontent" id="signup">
                                <form method="post" onsubmit="return validateRegister()">
                                    <!-- names -->
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Họ" name="userfirstname" id="userfirstname" />
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Tên" name="userlastname" id="userlastname" />
                                        </div>
                                    </div>
                                    <!-- email & pass -->
                                    <input type="text" class="form-control my-3" name="useremail" id="useremail"
                                        placeholder="Số di động hoặc Email" />

                                    <input type="text" class="form-control my-3" name="usernickname" id="usernickname"
                                        placeholder="Tên tài khoản" />

                                    <input type="password" class="form-control my-3" name="userpass" id="userpass"
                                        placeholder="Mật khẩu" required="" />

                                    <input type="password" class="form-control my-3" name="userpassconfirm" id="userpassconfirm"
                                        placeholder="Nhập lại mật khẩu" required="" />

                            
                                    <!-- DOB -->
                                    <div class="row my-3">
                                        <span class="text-muted fs-7">Sinh nhật <i class="fas fa-question-circle"
                                                data-bs-toggle="popover" type="button"
                                                data-bs-content="And here's some amazing content. It's very engaging. Right?"></i></span>
                                        <div class="col">
                                            <select class="form-select" name="selectday">
                                            <?php
                                            for($i=1; $i<=31; $i++){
                                                echo '<option value="'. $i .'">'. $i .'</option>';
                                            }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <select class="form-select" name="selectmonth">
                                            <?php
                                            echo '<option value="1">Tháng 1</option>';
                                            echo '<option value="2">Tháng 2</option>';
                                            echo '<option value="3">Tháng 3</option>';
                                            echo '<option value="4">Tháng 4</option>';
                                            echo '<option value="5">Tháng 5</option>';
                                            echo '<option value="6">Tháng 6</option>';
                                            echo '<option value="7">Tháng 7</option>';
                                            echo '<option value="8">Tháng 8</option>';
                                            echo '<option value="9">Tháng 9</option>';
                                            echo '<option value="10">Tháng 10</option>';
                                            echo '<option value="11">Tháng 11</option>';
                                            echo '<option value="12">Tháng 12</option>';
                                            ?>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <select class="form-select" name="selectyear">
                                            <?php
                                            for($i=2017; $i>=1900; $i--){
                                                if($i == 1996){
                                                    echo '<option value="'. $i .'" selected>'. $i .'</option>';
                                                }
                                                echo '<option value="'. $i .'">'. $i .'</option>';
                                            }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- gender -->
                                    <div class="row my-3">
                                        <span class="text-muted fs-7">Giới Tính <i class="fas fa-question-circle"
                                                data-bs-toggle="popover" type="button"
                                                data-bs-content="And here's some amazing content. It's very engaging. Right?"></i></span>
                                        <div class="col">
                                            <div class="border rounded p-2">
                                                <label class="form-check-label" for="flexRadioDefault1">Nữ </label>
                                                <input class="form-check-input usergender" type="radio" name="usergender"
                                                    id="femalegender" value="female" value="F" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="border rounded p-2">
                                                <label class="form-check-label" for="flexRadioDefault1">Nam </label>
                                                <input class="form-check-input usergender" type="radio" name="usergender"
                                                    id="malegender" value="male" value="M"/>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- disclaimer -->
                                    <div>
                                        <span class="text-muted fs-7">Bằng cách nhấp vào Đăng ký, bạn đồng ý với Điều
                                            khoản, Chính sách dữ
                                            liệu và Chính sách cookie của chúng tôi. Bạn có thể nhận được thông báo của
                                            chúng tôi qua SMS và
                                            hủy nhận bất kỳ lúc nào.</span>
                                    </div>
                                    <!-- btn -->
                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-success btn-lg" data-bs-dismiss="modal"
                                            name="register" value="Create Account">Đăng ký</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal end -->
            </div>
            <!-- tag -->
            <div class="my-5 pb-5 text-center mt-3">
                <p class="fw-bold"><a href="#" class="text-decoration-none text-dark">Tạo trang</a> <span
                        class="fw-normal">dành cho người nổi tiếng, thương hiệu hoặc doanh<br> nghiệp.</span></p>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="bg-white p-4 text-muted">
        <div class="container">
            <!-- language -->
            <div class="d-flex flex-wrap">
                <p class="mx-2 fs-7 mb-0">English (US)</p>
                <p class="mx-2 fs-7 mb-0">Tiếng Việt</p>
                <p class="mx-2 fs-7 mb-0">中文(台灣)</p>
                <p class="mx-2 fs-7 mb-0">한국어</p>
                <p class="mx-2 fs-7 mb-0">日本語</p>
                <p class="mx-2 fs-7 mb-0">Français (France)</p>
                <p class="mx-2 fs-7 mb-0">ภาษาไทย</p>
                <p class="mx-2 fs-7 mb-0">Español</p>
                <p class="mx-2 fs-7 mb-0">Português (Brasil)</p>
                <p class="mx-2 fs-7 mb-0">Deutsch</p>
                <p class="mx-2 fs-7 mb-0">Italiano</p>
            </div>
            <hr />
            <!-- actions -->
            <div class="d-flex flex-wrap">
                <p class="mx-2 fs-7 mb-0">Đăng ký</p>
                <p class="mx-2 fs-7 mb-0">Đăng nhập</p>
                <p class="mx-2 fs-7 mb-0">Messenger</p>
                <p class="mx-2 fs-7 mb-0">Facebook Lite</p>
                <p class="mx-2 fs-7 mb-0">Watch</p>
                <p class="mx-2 fs-7 mb-0">Địa điểm</p>
                <p class="mx-2 fs-7 mb-0">Trò chơi</p>
                <p class="mx-2 fs-7 mb-0">Marketplace</p>
                <p class="mx-2 fs-7 mb-0">Facebook Pay</p>
                <p class="mx-2 fs-7 mb-0">Việc làm</p>
                <p class="mx-2 fs-7 mb-0">Oculus</p>
                <p class="mx-2 fs-7 mb-0">Portal</p>
                <p class="mx-2 fs-7 mb-0">Instagram</p>
                <p class="mx-2 fs-7 mb-0">Bulletin</p>
                <p class="mx-2 fs-7 mb-0">Địa phương</p>
            </div>
            <!-- copy -->
            <div class="mt-4 mx-2">
                <p class="fs-7">Facebook &copy; 2021</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

</body>

</html>

<?php
$conn = connect();
if ($_SERVER['REQUEST_METHOD'] == 'POST') { // A form is posted
    if (isset($_POST['login'])) { // Login process
        $useremail = $_POST['useremail'];
        $userpass = md5($_POST['userpass']);
        $query = mysqli_query($conn, "SELECT * FROM users WHERE user_email = '$useremail' AND user_password = '$userpass'");
        if($query){
            if(mysqli_num_rows($query) == 1) {
                $row = mysqli_fetch_assoc($query);
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_name'] = $row['user_firstname'] . " " . $row['user_lastname'];
                header("location:home.php");
            }
            else {
                ?> <script>
                    document.getElementsByClassName("required")[0].innerHTML = "Invalid Login Credentials.";
                    document.getElementsByClassName("required")[1].innerHTML = "Invalid Login Credentials.";
                </script> <?php
            }
        } else{
            echo mysqli_error($conn);
        }
    }
    if (isset($_POST['register'])) { // Register process
        // Retrieve Data
        $userfirstname = $_POST['userfirstname'];
        $userlastname = $_POST['userlastname'];
        $usernickname = $_POST['usernickname'];
        $userpassword = password_hash($_POST['userpass'], PASSWORD_DEFAULT);
        $useremail = $_POST['useremail'];
        $userbirthdate = $_POST['selectyear'] . '-' . $_POST['selectmonth'] . '-' . $_POST['selectday'];
        $usergender = $_POST['usergender'];
        $userhometown = ' ';
        $userabout = ' ';
        $token = md5($_POST['useremail']).rand(10,9999);
        if (isset($_POST['userstatus'])){
            $userstatus = $_POST['userstatus'];
        }
        else{
            $userstatus = NULL;
        }
        // Check for Some Unique Constraints
        $query = mysqli_query($conn, "SELECT user_nickname, user_email FROM users WHERE user_nickname = '$usernickname' OR user_email = '$useremail'");
        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);
            if($usernickname == $row['user_nickname'] && !empty($usernickname)){
                ?> <script>
                document.getElementsByClassName("required")[4].innerHTML = "This Nickname already exists.";
                </script> <?php
            }
            if($useremail == $row['user_email']){
                ?> <script>
                document.getElementsByClassName("required")[7].innerHTML = "This Email already exists.";
                </script> <?php
            }
        }
        // Insert Data
        $sql = "INSERT INTO users(user_firstname, user_lastname, user_nickname, user_password, user_email, user_gender, user_birthdate, user_status, user_about, user_hometown, email_verification_link)
                VALUES ('$userfirstname', '$userlastname', '$usernickname', '$userpassword', '$useremail', '$usergender', '$userbirthdate', '$userstatus', '$userabout', '$userhometown', '$token')";
                $query = mysqli_query($conn, $sql);
        if($query){
            


            $link = "<a href='localhost/socialnetwork/activation.php?key=".$useremail."&token=".$token."'>Nhấp vào đây để kích hoạt tài khoản</a>";
            include "send-email.php";
            if(sendEmailForAccountActive($useremail, $link)){
                echo"Vui lòng kiểm tra hộp thư để kích hoạt tài khoản";
            }else{
                echo"Xin lỗi email chưa đc gửi vui lòng kiểm tra lại";
            }
        }
    }
}
?>