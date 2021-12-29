<?php
session_start();
if(isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null){
} else {
  header("location: index.php");

}
?>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
  <!-- main style -->
  <link rel="stylesheet" href="css/main.css" />
  <title>Facebook</title>
</head>

<body class="bg-gray postion-relative">
  <!-- ================= Appbar ================= -->
  <div class="bg-white d-flex align-items-center fixed-top shadow" style="min-height: 56px; z-index: 5">
    <div class="container-fluid">
      <div class="row align-items-center">
        <!-- search -->
        <div class="col d-flex align-items-center">
          <!-- logo -->
          <i class="fab fa-facebook text-primary" style="font-size: 3rem"></i>
          <!-- search bar -->
          <div class="input-group ms-2" type="button">
            <!-- mobile -->
            <span class="input-group-prepend d-lg-none" id="searchMenu" data-bs-toggle="dropdown" aria-expanded="false"
              data-bs-auto-close="outside">
              <div class="input-group-text bg-gray border-0 rounded-circle" style="min-height: 40px">
                <i class="fas fa-search text-muted"></i>
              </div>
            </span>
            <!-- desktop -->
            <span class="input-group-prepend d-none d-lg-block" id="searchMenu" data-bs-toggle="dropdown"
              aria-expanded="false" data-bs-auto-close="outside">
              <div class="input-group-text bg-gray border-0 rounded-pill" style="min-height: 40px; min-width: 230px">
                <i class="fas fa-search me-2 text-muted"></i>
                <p class="m-0 fs-7 text-muted">Tìm kiếm trên Facebook</p>
              </div>
            </span>
            <!-- search menu -->
            <ul class="dropdown-menu overflow-auto border-0 shadow p-3" aria-labelledby="searchMenu"
              style="width: 20em; max-height: 600px">
              <!-- search input -->
              <li>
                <input type="text" class="rounded-pill border-0 bg-gray dropdown-item" placeholder="Tìm..." autofocus />
              </li>
              <!-- search 1 -->
              <li class="my-4">
                <div class="
                      alert
                      fade
                      show
                      dropdown-item
                      p-1
                      m-0
                      d-flex
                      align-items-center
                      justify-content-between
                    " role="alert">
                  <div class="d-flex align-items-center">
                    <img
                      src="https://scontent.fhan6-1.fna.fbcdn.net/v/t1.6435-1/p100x100/74465629_1917275761751079_3827880308250771456_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=7206a8&_nc_ohc=YQTmOMaD0e4AX_UqDji&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan6-1.fna&oh=00_AT9I9hS8Z6mSCiOvZ8pvvkf_KkRTnCUJx1lJiu31gb4K6g&oe=61EA0D0D"
                      alt="avatar" class="rounded-circle me-2" style="width: 35px; height: 35px; object-fit: cover" />
                    <p class="m-0">Nam</p>
                  </div>
                  <button type="button" class="btn-close p-0 m-0" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              </li>
              <!-- search 2 -->
              <li class="my-4">
                <div class="
                      alert
                      fade
                      show
                      dropdown-item
                      p-1
                      m-0
                      d-flex
                      align-items-center
                      justify-content-between
                    " role="alert">
                  <div class="d-flex align-items-center">
                    <img
                      src="https://scontent.fhan6-1.fna.fbcdn.net/v/t1.6435-1/p100x100/138624825_1909673372517303_3002946972548105971_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=7206a8&_nc_ohc=8oeWXafwdwwAX9Bs43z&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan6-1.fna&oh=00_AT9HsaIoMawnmFKXmFoikggCHMkc2_yRSkVz08xPEDIvng&oe=61EA95FF"
                      alt="avatar" class="rounded-circle me-2" style="width: 35px; height: 35px; object-fit: cover" />
                    <p class="m-0">Minh</p>
                  </div>
                  <button type="button" class="btn-close p-0 m-0" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              </li>
              <!-- search 3 -->
              <li class="my-4">
                <div class="
                      alert
                      fade
                      show
                      dropdown-item
                      p-1
                      m-0
                      d-flex
                      align-items-center
                      justify-content-between
                    " role="alert">
                  <div class="d-flex align-items-center">
                    <img
                      src="https://scontent.fhan6-1.fna.fbcdn.net/v/t39.30808-1/p100x100/265608411_1287766848365078_2044468679411445333_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=7206a8&_nc_ohc=3KR09bARupwAX_qdyus&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan6-1.fna&oh=00_AT-YiME78wbJfbbWwBV-ZD2xes8dmtM88xBBAdzAxBmFmw&oe=61C85482"
                      alt="avatar" class="rounded-circle me-2" style="width: 35px; height: 35px; object-fit: cover" />
                    <p class="m-0">Duy</p>
                  </div>
                  <button type="button" class="btn-close p-0 m-0" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <!-- nav -->
        <div class="col d-none d-xl-flex justify-content-center ">
          <!-- home -->
          <div class="mx-4 nav__btn nav__btn-active">
            <button type="button" class="btn px-4">
              <i class="fas fa-home text-muted fs-4"></i>
            </button>
          </div>

          <!-- friend -->
          <div class="mx-4 nav__btn">
            <button type="button" class="btn px-4">
              <i class="fas fa-user-friends text-muted fs-4"></i>
            </button>
          </div>
          <!-- Watch -->
          <div class="mx-4 nav__btn">
            <button type="button" class="btn px-4">
              <i class="fab fa-youtube text-muted fs-4"></i>
            </button>
          </div>
          <!-- Market place -->
          <div class="mx-4 nav__btn">
            <button type="button" class="btn px-4">
              <i class="fas fa-store text-muted fs-4"></i>
            </button>
          </div>

          <!-- group -->
          <div class="mx-4 nav__btn">
            <button type="button" class="btn px-4">
              <i type="button" class="position-relative fas fa-users text-muted fs-4">
              </i>
            </button>
          </div>


        </div>
        <!-- menus -->
        <div class="col-2 d-flex align-items-center justify-content-end">
          <!-- avatar -->
          <div class="align-items-center justify-content-center d-none d-xl-flex">
            <img
              src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-1/cp0/c163.42.291.292a/s80x80/245265801_1782202625303869_6260711662080745064_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=7206a8&_nc_ohc=FYu6UtXBGq8AX9fq_Ed&_nc_ht=scontent-sin6-2.xx&oh=00_AT_A4VjMPBpTiJpYkWyLb5VKaW3YbZTbc5p8R8fH_bQT8w&oe=61C83115"
              class="rounded-circle me-2" alt="avatar" style="width: 38px; height: 38px; object-fit: cover" />
            <p class="m-0">Anata Manh</p>
          </div>
          <!-- main menu -->
          <div class="
                rounded-circle
                p-1
                bg-gray
                d-flex
                align-items-center
                justify-content-center
                mx-2
              " style="width: 38px; height: 38px" type="button" id="mainMenu" data-bs-toggle="dropdown"
            aria-expanded="false" data-bs-auto-close="outside">
            <i class="fas fa-ellipsis-h"></i>
          </div>
          <!-- main menu dd -->
          <ul class="dropdown-menu border-0 shadow p-3 overflow-auto" aria-labelledby="mainMenu"
            style="width: 23em; max-height: 600px">
            <!-- menu -->
            <div>
              <!-- header -->
              <li class="p-1 mx-2">
                <h2>Menu</h2>
              </li>
              <!-- search -->
              <li class="p-1">
                <div class="input-group-text bg-gray border-0 rounded-pill" style="min-height: 40px; min-width: 230px">
                  <i class="fas fa-search me-2 text-muted"></i>
                  <input type="text" class="form-control rounded-pill border-0 bg-gray"
                    placeholder="Tìm kiếm trong Menu" />
                </div>
              </li>
              <!-- xã hội -->
              <h4 class="m-2">Xã hội</h4>
              <!-- s1 -->
              <li class="my-2 p-1">
                <a href="#" class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                  <div class="p-2">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/9-o1e6LN_TX.png" alt="icon from fb"
                      class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover" />
                  </div>
                  <div>
                    <p class="m-0">Sự kiện</p>
                    <span class="fs-7 text-muted">Tổ chức hoặc tìm sự kiện cùng những hoạt động khác trên mạng và ở
                      quanh đây. </span>
                  </div>
                </a>
              </li>
              <!-- s2 -->
              <li class="my-2 p-1">
                <a href="#" class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                  <div class="p-2">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/tSXYIzZlfrS.png" alt="icon from fb"
                      class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover" />
                  </div>
                  <div>
                    <p class="m-0">Bạn bè</p>
                    <span class="fs-7 text-muted">Tìm kiếm bạn bè hoặc những người bạn có thể biết</span>
                  </div>
                </a>
              </li>


              <!-- s3 -->
              <li class="my-2 p-1">
                <a href="#" class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                  <div class="p-2">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/Im_0d7HFH4n.png" alt="icon from fb"
                      class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover" />
                  </div>
                  <div>
                    <p class="m-0">Nhóm</p>
                    <span class="fs-7 text-muted">Kết nối với những người cùng chung sở thích.</span>
                  </div>
                </a>
              </li>
              <!-- s4 -->
              <li class="my-2 p-1">
                <a href="#" class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                  <div class="p-2">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yo/r/hLkEFzsCyXC.png" alt="icon from fb"
                      class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover" />
                  </div>
                  <div>
                    <p class="m-0">Bảng tin</p>
                    <span class="fs-7 text-muted">Xem bài viết phù hợp của những người và Trang bạn theo dõi.</span>
                  </div>
                </a>
              </li>
              <!-- s5 -->
              <li class="my-2 p-1">
                <a href="#" class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                  <div class="p-2">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/0gH3vbvr8Ee.png" alt="icon from fb"
                      class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover" />
                  </div>
                  <div>
                    <p class="m-0">Trang</p>
                    <span class="fs-7 text-muted">Khám phá và kết nối với các doanh nghiệp trên Facebook.</span>
                  </div>
                </a>
              </li>
              <hr />
              <!-- giải trí -->
              <h4 class="m-2">Giải trí</h4>
              <!-- e1 -->
              <li class="my-2 p-1">
                <a href="#" class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                  <div class="p-2">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y1/r/uGfRd5KPhOI.png" alt="icon from fb"
                      class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover" />
                  </div>
                  <div>
                    <p class="m-0">Video chơi game</p>
                    <span class="fs-7 text-muted">Xem,kết nối với những game và người phát trực tiếp mà bạn yêu
                      thích.</span>
                  </div>
                </a>
              </li>
              <!-- e2 -->
              <li class="my-2 p-1">
                <a href="#" class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                  <div class="p-2">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yn/r/XEWvxf1LQAG.png" alt="icon from fb"
                      class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover" />
                  </div>
                  <div style="flex:1">
                    <p class="m-0">Chơi game</p>
                    <span class="fs-7 text-muted">Chơi game bạn yêu thích.</span>
                  </div>
                </a>
              </li>
              <!-- e3 -->
              <li class="my-2 p-1">
                <a href="#" class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                  <div class="p-2">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yG/r/A1HlI2LVo58.png" alt="icon from fb"
                      class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover" />
                  </div>
                  <div>
                    <p class="m-0">Watch</p>
                    <span class="fs-7 text-muted">Đích đến của video phù hợp với sở thích và quan hệ kết nối của
                      bạn.</span>
                  </div>
                </a>
              </li>
              <hr />
              <!-- mua sắm -->
              <h4 class="m-2">Mua sắm</h4>
              <!-- c-1 -->
              <li class="my-2 p-1">
                <a href="#" class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                  <div class="p-2">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yy/r/xH4w-lk44we.png" alt="icon from fb"
                      class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover" />
                  </div>
                  <div>
                    <p class="m-0">Facebook Pay</p>
                    <span class="fs-7 text-muted">Một cách dễ dàng,bảo mật để thanh toán trên các ứng dụng bạn đang
                      dùng.</span>
                  </div>
                </a>
              </li>
              <!-- c-2 -->
              <li class="my-2 p-1">
                <a href="#" class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                  <div class="p-2">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/ys/r/9BDqQflVfXI.png" alt="icon from fb"
                      class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover" />
                  </div>
                  <div style="flex:1">
                    <p class="m-0">Marketplace</p>
                    <span class="fs-7 text-muted">Mua bán trong cộng đồng của bạn.</span>
                  </div>
                </a>
              </li>
              <hr />
              <!-- Cá nhân -->
              <h4 class="m-2">Cá nhân</h4>
              <!-- d-1 -->
              <li class="my-2 p-1">
                <a href="#" class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                  <div class="p-2">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yI/r/WcCzeboYevF.png" alt="icon from fb"
                      class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover" />
                  </div>
                  <div>
                    <p class="m-0">Hoạt động quảng cáo gần đây</p>
                    <span class="fs-7 text-muted">Xem toàn bộ quảng cáo mà bạn đã tương tác trên Facebook.</span>
                  </div>
                </a>
              </li>
              <!-- d2 -->
              <li class="my-2 p-1">
                <a href="#" class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                  <div class="p-2">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y7/r/AYj2837MmgX.png" alt="icon from fb"
                      class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover" />
                  </div>
                  <div>
                    <p class="m-0">Kỷ niệm</p>
                    <span class="fs-7 text-muted">Lướt xem ảnh,video và bài viết cũ của bạn trên Facebook.</span>
                  </div>
                </a>
              </li>
              <!-- d3 -->
              <li class="my-2 p-1">
                <a href="#" class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                  <div class="p-2">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yr/r/2uPlV4oORjU.png" alt="icon from fb"
                      class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover" />
                  </div>
                  <div>
                    <p class="m-0">Đã lưu</p>
                    <span class="fs-7 text-muted">Tìm bài viết,ảnh và video mà bạn đã lưu để xem sau.</span>
                  </div>
                </a>
              </li>
              <!-- d4 -->
              <li class="my-2 p-1">
                <a href="#" class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                  <div class="p-2">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/kULMG0uFcEQ.png" alt="icon from fb"
                      class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover" />
                  </div>
                  <div>
                    <p class="m-0">Thời tiết</p>
                    <span class="fs-7 text-muted">Kiểm tra dự báo thời tiết tại địa phương và đăng ký nhận thông báo về
                      tình hình thời tiết hàng ngày.</span>
                  </div>
                </a>
              </li>
              <hr />
              <!-- chuyên nghiệp-->
              <h4 class="m-2">Chuyên nghiệp</h4>
              <!-- e1 -->
              <li class="my-2 p-1">
                <a href="#" class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                  <div class="p-2">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/qR88GIDM38e.png" alt="icon from fb"
                      class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover" />
                  </div>
                  <div>
                    <p class="m-0">Trình quản lý quảng cáo</p>
                    <span class="fs-7 text-muted">Tạo,quản lý và theo dõi hiệu quả cảng cáo.</span>
                  </div>
                </a>
              </li>
              <!-- e2-->
              <li class="my-2 p-1">
                <a href="#" class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                  <div class="p-2">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yJ/r/EWFR9xI64Mg.png" alt="icon from fb"
                      class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover" />
                  </div>
                  <div style="flex:1">
                    <p class="m-0">Việc làm</p>
                    <span class="fs-7 text-muted">Tìm việc làm phù hợp với bạn.</span>
                  </div>
                </a>
              </li>
              <hr />
              <!-- Nguồn lực cho cộng đồng -->
              <h4 class="m-2">Nguồn lực cho cộng đồng</h4>
              <!-- f1 -->
              <li class="my-2 p-1">
                <a href="#" class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                  <div class="p-2">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/tKwWVioirmj.png" alt="icon from fb"
                      class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover" />
                  </div>
                  <div>
                    <p class="m-0">Trung tâm khoa học khí hậu
                    </p>
                    <span class="fs-7 text-muted">Tìm hiểu về vấn đề biến đổi khí hậu và tác động của hiện tượng
                      này.</span>
                  </div>
                </a>
              </li>
              <!--f2-->
              <li class="my-2 p-1">
                <a href="#" class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                  <div class="p-2">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yc/r/y7p-dcTnGV_.png" alt="icon from fb"
                      class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover" />
                  </div>
                  <div>
                    <p class="m-0">Ứng phó khẩn cấp
                    </p>
                    <span class="fs-7 text-muted">Tìm thông tin mới nhất về các cuộc khủng hoảng diễn ra trên thế
                      giới.</span>
                  </div>
                </a>
              </li>
              <!--f3-->
              <li class="my-2 p-1">
                <a href="#" class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                  <div class="p-2">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/A2tHTy6ibgT.png" alt="icon from fb"
                      class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover" />
                  </div>
                  <div>
                    <p class="m-0">Chiến dịch gây quỹ
                    </p>
                    <span class="fs-7 text-muted">Quyên góp và gây quỹ cho tổ chức phi lợi nhuận và mục đích cá
                      nhân.</span>
                  </div>
                </a>
              </li>
              <hr />
              <!--Sản phẩm khác của meta-->
              <h4 class="m-2">Sản phẩm khác của meta</h4>
              <!-- g1 -->
              <li class="my-2 p-1">
                <a href="#" class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                  <div class="p-2">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/YF1bztyGuX-.png" alt="icon from fb"
                      class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover" />
                  </div>
                  <div>
                    <p class="m-0">Messenger</p>
                    <span class="fs-7 text-muted">Chat ngay tức thì với bạn bè và những người đã kết nối.</span>
                  </div>
                </a>
              </li>
              <!--g2-->
              <li class="my-2 p-1">
                <a href="#" class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                  <div class="p-2">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y2/r/HBcx-giUZ2Y.png" alt="icon from fb"
                      class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover" />
                  </div>
                  <div>
                    <p class="m-0">Messenger nhí</p>
                    <span class="fs-7 text-muted">Cho phép bé nhắn tin với bạn thân và gia đình.</span>
                  </div>
                </a>
              </li>
            </div>
          </ul>
        </div>
        <!-- chat -->
        <div class="
                rounded-circle
                p-1
                bg-gray
                d-flex
                align-items-center
                justify-content-center
                mx-2
              " style="width: 38px; height: 38px" type="button" id="chatMenu" data-bs-toggle="dropdown"
          aria-expanded="false" data-bs-auto-close="outside">
          <i class="fas fa-comment"></i>
        </div>
        <!-- chat  dd -->
        <ul class="dropdown-menu border-0 shadow p-3 overflow-auto" aria-labelledby="chatMenu"
          style="width: 23em; max-height: 600px">
          <!-- header -->
          <li class="p-1">
            <div class="d-flex justify-content-between">
              <h2>Messenger</h2>
              <div>
                <!-- setting -->
                <i class="fas fa-ellipsis-h text-muted mx-2" type="button" data-bs-toggle="dropdown"></i>
                <!-- setting dd -->
                <ul class="dropdown-menu shadow" style="width: 18em">
                  <!-- title -->
                  <div class="p-2">
                    <h5>Cài đặt Chat</h5>
                    <span class="text-muted fs-7">Tùy chỉnh trải nghiệm trên Messenger.</span>
                  </div>
                  <hr />
                  <!-- incoming sound -->
                  <li>
                    <div class="
                            dropdown-item
                            d-flex
                            align-items-center
                            justify-content-between
                          ">
                      <!-- icon -->
                      <div class="d-flex align-items-center">
                        <i class="fas fa-phone-alt me-3"></i>
                        <p class="m-0">Âm thanh cuộc gọi đến</p>
                      </div>
                      <!-- toggle -->
                      <div class="form-check form-switch m-0">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked />
                        <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                      </div>
                    </div>
                  </li>
                  <!-- message sound -->
                  <li>
                    <div class="
                            dropdown-item
                            d-flex
                            align-items-center
                            justify-content-between
                          ">
                      <!-- icon -->
                      <div class="d-flex align-items-center">
                        <i class="fas fa-volume-off me-4 fs-4"></i>
                        <p class="m-0">Âm thanh tin nhắn</p>
                      </div>
                      <!-- toggle -->
                      <div class="form-check form-switch m-0">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked />
                        <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                      </div>
                    </div>
                  </li>
                  <!-- popup message -->
                  <li>
                    <div class="
                            dropdown-item
                            d-flex
                            align-items-center
                            justify-content-between
                          ">
                      <!-- icon -->
                      <div class="d-flex align-items-center">
                        <i class="fas fa-spinner me-3"></i>
                        <p class="m-0">Tin nhắn mới bật lên</p>
                      </div>
                      <!-- toggle -->
                      <div class="form-check form-switch m-0">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked />
                        <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                      </div>
                    </div>
                    <span class="ms-5 text-muted fs-7">Tự động mở tin nhắn mới.</span>
                  </li>
                  <hr class="m-0" />
                  <!-- item 1 -->
                  <li>
                    <div class="
                            dropdown-item
                            d-flex
                            align-items-center
                            justify-content-between
                          ">
                      <!-- icon -->
                      <div class="d-flex align-items-center">
                        <i class="fas fa-toggle-off me-3"></i>
                        <p class="m-0">Tắt trạng thái hoạt động</p>
                      </div>
                    </div>
                  </li>
                  <!-- item 2 -->
                  <li>
                    <div class="
                            dropdown-item
                            d-flex
                            align-items-center
                            justify-content-between
                          ">
                      <!-- icon -->
                      <div class="d-flex align-items-center">
                        <i class="far fa-comment-alt me-3"></i>
                        <p class="m-0">Tin nhắn đang chờ</p>
                      </div>
                    </div>
                  </li>
                  <!-- item 3 -->
                  <li>
                    <div class="
                            dropdown-item
                            d-flex
                            align-items-center
                            justify-content-between
                          ">
                      <!-- icon -->
                      <div class="d-flex align-items-center">
                        <i class="fas fa-share-square me-3"></i>
                        <p class="m-0">Cài đặt gửi tin nhắn</p>
                      </div>
                    </div>
                  </li>
                  <!-- item 4 -->
                  <li>
                    <div class="
                            dropdown-item
                            d-flex
                            align-items-center
                            justify-content-between
                          ">
                      <!-- icon -->
                      <div class="d-flex align-items-center">
                        <i class="fas fa-shield-alt me-3"></i>
                        <p class="m-0">Cài đặt chặn</p>
                      </div>
                    </div>
                  </li>
                </ul>
                <i class="fas fa-expand-arrows-alt text-muted mx-2" type="button"></i>
                <!-- new message -->
                <i class="fas fa-edit text-muted mx-2" type="button" data-bs-toggle="modal"
                  data-bs-target="#newChat"></i>
              </div>
            </div>
          </li>
          <!-- search -->
          <li class="p-1">
            <div class="input-group-text bg-gray border-0 rounded-pill" style="min-height: 40px; min-width: 230px">
              <i class="fas fa-search me-2 text-muted"></i>
              <input type="text" class="form-control rounded-pill border-0 bg-gray"
                placeholder="Tìm kiếm trên Messenger" />
            </div>
          </li>
          <!-- message 1 -->
          <li class="my-2 p-1" type="button" data-bs-toggle="modal" data-bs-target="#singleChat1">
            <div class="d-flex align-items-center justify-content-between">
              <!-- big avatar -->
              <div class="d-flex align-items-center justify-content-evenly">
                <div class="p-2">
                  <img
                    src="https://scontent.xx.fbcdn.net/v/t1.6435-1/p100x100/126067354_2908745192698577_8146764994838893083_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=dbb9e7&_nc_ohc=dcl8wecFz3QAX8r0NQ5&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=00_AT-u5oID5ZG09RD1ZcRp0I4h2sdKiDOE2xh0OoynQiAg_A&oe=61E72345"
                    alt="avatar" class="rounded-circle" style="width: 58px; height: 58px; object-fit: cover" />
                </div>
                <div>
                  <p class="fs-7 m-0">Dũng</p>
                  <span class="fs-7 text-muted">alo &#8226; 5h</span>
                </div>
              </div>
              <!-- small avatar -->
              <div class="p-2">
                <img
                  src="https://scontent.xx.fbcdn.net/v/t1.6435-1/p100x100/126067354_2908745192698577_8146764994838893083_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=dbb9e7&_nc_ohc=dcl8wecFz3QAX8r0NQ5&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=00_AT-u5oID5ZG09RD1ZcRp0I4h2sdKiDOE2xh0OoynQiAg_A&oe=61E72345"
                  alt="avatar" class="rounded-circle" style="width: 15px; height: 15px; object-fit: cover" />
              </div>
            </div>
          </li>
          <!-- message 2 -->
          <li class="my-2 p-1" type="button" data-bs-toggle="modal" data-bs-target="#singleChat2">
            <div class="d-flex align-items-center justify-content-between">
              <!-- big avatar -->
              <div class="d-flex align-items-center justify-content-evenly">
                <div class="p-2">
                  <img
                    src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-1/p100x100/255439613_1193874801134654_5404726746443343278_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=7206a8&_nc_ohc=SmILFkcxNtsAX8X-0NW&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-2.xx&oh=00_AT8YuJCiy8fTs_Mx_nhCBRWo27CJ__Y--035YFXkX_PKrg&oe=61C87A14"
                    alt="avatar" class="rounded-circle" style="width: 58px; height: 58px; object-fit: cover" />
                </div>
                <div>
                  <p class="fs-7 m-0">
                    Tú</p>
                  <span class="fs-7 text-muted">Dậy học &#8226; 2m</span>

                </div>
              </div>
              <!-- small avatar -->
              <div class="p-2">
                <img
                  src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-1/p100x100/255439613_1193874801134654_5404726746443343278_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=7206a8&_nc_ohc=SmILFkcxNtsAX8X-0NW&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-2.xx&oh=00_AT8YuJCiy8fTs_Mx_nhCBRWo27CJ__Y--035YFXkX_PKrg&oe=61C87A14"
                  alt="avatar" class="rounded-circle" style="width: 15px; height: 15px; object-fit: cover" />
              </div>
            </div>
          </li>
          <!-- message 3 -->
          <li class="my-2 p-1" type="button" data-bs-toggle="modal" data-bs-target="#singleChat3">
            <div class="d-flex align-items-center justify-content-between">
              <!-- big avatar -->
              <div class="d-flex align-items-center justify-content-evenly">
                <div class="p-2">
                  <img
                    src="https://scontent-sin6-4.xx.fbcdn.net/v/t1.6435-1/p100x100/199903032_501572354384297_5620014206431070850_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=7206a8&_nc_ohc=vsYDi_3aFFIAX8qhC9_&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-4.xx&oh=00_AT9obZ1uA-LmlaeUk6JUGpE1I5Lr_OnEQQpbrVFt1hp5zA&oe=61E71BFF"
                    alt="avatar" class="rounded-circle" style="width: 58px; height: 58px; object-fit: cover" />
                </div>
                <div>
                  <p class="fs-7 m-0">Vũ Nguyễn</p>
                  <span class="fs-7 text-muted">Mai 8h nhé &#8226; 9h</span>
                </div>
              </div>
              <!-- small avatar -->
              <div class="p-2">
                <img
                  src="https://scontent-sin6-4.xx.fbcdn.net/v/t1.6435-1/p100x100/199903032_501572354384297_5620014206431070850_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=7206a8&_nc_ohc=vsYDi_3aFFIAX8qhC9_&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-4.xx&oh=00_AT9obZ1uA-LmlaeUk6JUGpE1I5Lr_OnEQQpbrVFt1hp5zA&oe=61E71BFF"
                  alt="avatar" class="rounded-circle" style="width: 15px; height: 15px; object-fit: cover" />
              </div>
            </div>
          </li>
          <!-- message 4 -->
          <li class="my-2 p-1" type="button" data-bs-toggle="modal" data-bs-target="#singleChat4">
            <div class="d-flex align-items-center justify-content-between">
              <!-- big avatar -->
              <div class="d-flex align-items-center justify-content-evenly">
                <div class="p-2">
                  <img
                    src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-1/p100x100/233871925_816119029274130_5731177625957293562_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=7206a8&_nc_ohc=b5ubUsprwGgAX-Hsh93&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-2.xx&oh=00_AT-pDG0Cld8_ZhMjnYFDhz2fKLtN3k9nyLm7iuL4JsegCg&oe=61C71FC1"
                    alt="avatar" class="rounded-circle" style="width: 58px; height: 58px; object-fit: cover" />
                </div>
                <div>
                  <p class="fs-7 m-0">Khải Phạm</p>
                  <span class="fs-7 text-muted">Chess đê &#8226; 10h</span>
                </div>
              </div>
              <!-- small avatar -->
              <div class="p-2">
                <img
                  src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-1/p100x100/233871925_816119029274130_5731177625957293562_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=7206a8&_nc_ohc=b5ubUsprwGgAX-Hsh93&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-2.xx&oh=00_AT-pDG0Cld8_ZhMjnYFDhz2fKLtN3k9nyLm7iuL4JsegCg&oe=61C71FC1"
                  alt="avatar" class="rounded-circle" style="width: 15px; height: 15px; object-fit: cover" />
              </div>
            </div>
          </li>
          <!-- message 5 -->
          <li class="my-2 p-1" type="button" data-bs-toggle="modal" data-bs-target="#singleChat5">
            <div class="d-flex align-items-center justify-content-between">
              <!-- big avatar -->
              <div class="d-flex align-items-center justify-content-evenly">
                <div class="p-2">
                  <img
                    src="https://scontent.xx.fbcdn.net/v/t1.30497-1/p100x100/143086968_2856368904622192_1959732218791162458_n.png?_nc_cat=1&ccb=1-5&_nc_sid=dbb9e7&_nc_ohc=b6VoV_Mga9IAX-B89tb&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=00_AT-XRu0ke-fO8W-Lb4HJAr7lS6n7RBfcXt67PXCJ7WCRVQ&oe=61E8B3D1"
                    alt="avatar" class="rounded-circle" style="width: 58px; height: 58px; object-fit: cover" />
                </div>
                <div>
                  <p class="fs-7 m-0">Phu</p>
                  <span class="fs-7 text-muted">Chiều học nhé &#8226; 7d</span>
                </div>
              </div>
              <!-- small avatar -->
              <div class="p-2">
                <img
                  src="https://scontent.xx.fbcdn.net/v/t1.30497-1/p100x100/143086968_2856368904622192_1959732218791162458_n.png?_nc_cat=1&ccb=1-5&_nc_sid=dbb9e7&_nc_ohc=b6VoV_Mga9IAX-B89tb&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=00_AT-XRu0ke-fO8W-Lb4HJAr7lS6n7RBfcXt67PXCJ7WCRVQ&oe=61E8B3D1"
                  alt="avatar" class="rounded-circle" style="width: 15px; height: 15px; object-fit: cover" />
              </div>
            </div>
          </li>
          <hr class="m-0" />
          <a href="#" class="text-decoration-none">
            <p class="fw-bold text-center pt-3 m-0">Xem tất cả trong Messenger</p>
          </a>
        </ul>
        <!-- Phần thông báo -->
        <div class="
                rounded-circle
                p-1
                bg-gray
                d-flex
                align-items-center
                justify-content-center
                mx-2
              " style="width: 38px; height: 38px" type="button" id="notMenu" data-bs-toggle="dropdown"
          aria-expanded="false" data-bs-auto-close="outside">
          <i class="fas fa-bell"></i>
        </div>
        <!-- Thông báo -->
        <ul class="dropdown-menu border-0 shadow p-3" aria-labelledby="notMenu"
          style="width: 23em; max-height: 600px; overflow-y: auto">
          <!-- header -->
          <li class="p-1">
            <div class="d-flex justify-content-between">
              <h2>Thông báo</h2>
              <div>
                <i class="
                        fas
                        fa-ellipsis-h
                        pointer
                        p-2
                        rounded-circle
                        bg-gray
                      " type="button" data-bs-toggle="dropdown"></i>
                <ul class="dropdown-menu">
                  <li class="dropdown-item d-flex align-items-center" type="button">
                    <i class="fas fa-check me-3 text-muted"></i>
                    <p class="m-0">Đánh dấu là tất cả đã đọc</p>
                  </li>
                  <li class="dropdown-item d-flex align-items-center" type="button">
                    <i class="fas fa-cog me-3 text-muted"></i>
                    <p class="m-0">Cài đặt thông báo</p>
                  </li>
                  <li class="dropdown-item d-flex align-items-center" type="button">
                    <i class="fas fa-desktop me-3 text-muted"></i>
                    <p class="m-0">Mở thông báo</p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="d-flex" type="button">
              <p class="rounded-pill bg-gray p-2">Tất cả</p>
              <p class="ms-3 rounded-pill bg-primary p-2 text-white">
                Chưa đọc
              </p>
            </div>
          </li>
          <!-- news -->
          <div class="d-flex justify-content-between mx-2">
            <h5>Mới</h5>
            <a href="#" class="text-decoration-none">Xem tất cả</a>
          </div>
          <!-- news 1 -->
          <li class="my-2 p-1">
            <a href="#" class="
                    d-flex
                    align-items-center
                    justify-content-evenly
                    text-decoration-none text-dark
                  ">
              <div class="d-flex align-items-center justify-content-evenly">
                <div class="p-2">
                  <img
                    src="https://scontent.xx.fbcdn.net/v/t1.30497-1/p100x100/143086968_2856368904622192_1959732218791162458_n.png?_nc_cat=1&ccb=1-5&_nc_sid=dbb9e7&_nc_ohc=b6VoV_Mga9IAX-B89tb&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=00_AT-XRu0ke-fO8W-Lb4HJAr7lS6n7RBfcXt67PXCJ7WCRVQ&oe=61E8B3D1"
                    alt="avatar" class="rounded-circle" alt="avatar" class="rounded-circle"
                    style="width: 58px; height: 58px; object-fit: cover" />
                </div>
                <div>
                  <p class="fs-7 m-0">
                    Phu đã thay đổi ảnh đại diện của anh ấy.
                  </p>
                  <span class="fs-7 text-primary">2 giờ trước</span>
                </div>
              </div>
              <i class="fas fa-circle fs-7 text-primary"></i>
            </a>
          </li>
          <!-- news 2 -->
          <li class="my-2 p-1">
            <a href="#" class="
                    d-flex
                    align-items-center
                    justify-content-evenly
                    text-decoration-none text-dark
                  ">
              <div class="d-flex align-items-center justify-content-evenly">
                <div class="p-2">
                  <img
                    src="https://scontent.xx.fbcdn.net/v/t1.6435-1/p100x100/126067354_2908745192698577_8146764994838893083_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=dbb9e7&_nc_ohc=dcl8wecFz3QAX8r0NQ5&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=00_AT-u5oID5ZG09RD1ZcRp0I4h2sdKiDOE2xh0OoynQiAg_A&oe=61E72345"
                    alt="avatar" class="rounded-circle" style="width: 58px; height: 58px; object-fit: cover" />
                </div>
                <div>
                  <p class="fs-7 m-0">
                    Dũng đã thay đổi ảnh đại diện của anh ấy.
                  </p>
                  <span class="fs-7 text-primary">2 phút trước</span>
                </div>
              </div>
              <i class="fas fa-circle fs-7 text-primary"></i>
            </a>
          </li>
          <!-- news 3 -->
          <li class="my-2 p-1">
            <a href="#" class="
                    d-flex
                    align-items-center
                    justify-content-evenly
                    text-decoration-none text-dark
                  ">
              <div class="d-flex align-items-center justify-content-evenly">
                <div class="p-2">
                  <img
                    src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-1/p100x100/255439613_1193874801134654_5404726746443343278_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=7206a8&_nc_ohc=SmILFkcxNtsAX8X-0NW&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-2.xx&oh=00_AT8YuJCiy8fTs_Mx_nhCBRWo27CJ__Y--035YFXkX_PKrg&oe=61C87A14"
                    alt="avatar" class="rounded-circle" style="width: 58px; height: 58px; object-fit: cover" />
                </div>
                <div>
                  <p class="fs-7 m-0">
                    Tú đã thay đổi ảnh đại diện của anh ấy.
                  </p>
                  <span class="fs-7 text-primary">1 giờ trước</span>
                </div>
              </div>
              <i class="fas fa-circle fs-7 text-primary"></i>
            </a>
          </li>
          <!-- news 4 -->
          <li class="my-2 p-1">
            <a href="#" class="
                    d-flex
                    align-items-center
                    justify-content-evenly
                    text-decoration-none text-dark
                  ">
              <div class="d-flex align-items-center justify-content-evenly">
                <div class="p-2">
                  <img
                    src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-1/p100x100/233871925_816119029274130_5731177625957293562_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=7206a8&_nc_ohc=b5ubUsprwGgAX-Hsh93&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-2.xx&oh=00_AT-pDG0Cld8_ZhMjnYFDhz2fKLtN3k9nyLm7iuL4JsegCg&oe=61C71FC1"
                    alt="avatar" class="rounded-circle" alt="avatar" class="rounded-circle"
                    style="width: 58px; height: 58px; object-fit: cover" />
                </div>
                <div>
                  <p class="fs-7 m-0">
                    Khải Phạm đã thay đổi ảnh đại diện của anh ấy.
                  </p>
                  <span class="fs-7 text-primary">2 tiếng trước</span>
                </div>
              </div>
              <i class="fas fa-circle fs-7 text-primary"></i>
            </a>
          </li>
          <!-- news 5 -->
          <li class="my-2 p-1">
            <a href="#" class="
                    d-flex
                    align-items-center
                    justify-content-evenly
                    text-decoration-none text-dark
                  ">
              <div class="d-flex align-items-center justify-content-evenly">
                <div class="p-2">
                  <img
                    src="https://scontent-sin6-4.xx.fbcdn.net/v/t1.6435-1/p100x100/199903032_501572354384297_5620014206431070850_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=7206a8&_nc_ohc=vsYDi_3aFFIAX8qhC9_&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-4.xx&oh=00_AT9obZ1uA-LmlaeUk6JUGpE1I5Lr_OnEQQpbrVFt1hp5zA&oe=61E71BFF"
                    alt="avatar" class="rounded-circle" alt="avatar" class="rounded-circle"
                    style="width: 58px; height: 58px; object-fit: cover" />
                </div>
                <div>
                  <p class="fs-7 m-0">
                    Vũ Nguyễn đã thay đổi ảnh đại diện của anh ấy.
                  </p>
                  <span class="fs-7 text-primary">23 giờ trước</span>
                </div>
              </div>
              <i class="fas fa-circle fs-7 text-primary"></i>
            </a>
          </li>
        </ul>
        <!-- secondary menu -->
        <div class="
                rounded-circle
                p-1
                bg-gray
                d-flex
                align-items-center
                justify-content-center
                mx-2
              " style="width: 38px; height: 38px" type="button" id="secondMenu" data-bs-toggle="dropdown"
          aria-expanded="false" data-bs-auto-close="outside">
          <i class="fas fa-caret-down"></i>
        </div>
        <!-- secondary menu dd -->
        <ul class="dropdown-menu border-0 shadow p-3" aria-labelledby="secondMenu" style="width: 23em">
          <!-- avatar -->
          <li class="dropdown-item p-1 rounded d-flex" type="button">
            <img
              src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-1/cp0/c163.42.291.292a/s80x80/245265801_1782202625303869_6260711662080745064_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=7206a8&_nc_ohc=FYu6UtXBGq8AX9fq_Ed&_nc_ht=scontent-sin6-2.xx&oh=00_AT_A4VjMPBpTiJpYkWyLb5VKaW3YbZTbc5p8R8fH_bQT8w&oe=61C83115"
              alt="avatar" class="rounded-circle me-2" style="width: 45px; height: 45px; object-fit: cover" />
            <div>
              <p class="m-0">Anata Manh</p>
              <p class="m-0 text-muted">Xem trang cá nhân của bạn</p>
            </div>
          </li>
          <hr />
          <!-- feedback -->
          <li class="dropdown-item p-1 rounded d-flex align-items-center" type="button">
            <i class="fas fa-exclamation-circle bg-gray p-2 rounded-circle"></i>
            <div class="ms-3">
              <p class="m-0">Đóng góp ý kiến</p>
              <p class="m-0 text-muted fs-7">
                Góp phần cải thiện phiên bản Facebook mới.
              </p>
            </div>
          </li>
          <hr />
          <!-- options -->
          <!-- 1 -->
          <li class="dropdown-item p-1 my-3 rounded" type="button">
            <ul class="navbar-nav">
              <li class="nav-item">
                <div class="d-flex" data-bs-toggle="dropdown">
                  <i class="fas fa-cog bg-gray p-2 rounded-circle"></i>
                  <div class="
                          ms-3
                          d-flex
                          justify-content-between
                          align-items-center
                          w-100
                        ">
                    <p class="m-0">Cài đặt và quyền riêng tư</p>
                    <i class="fas fa-chevron-right"></i>
                  </div>
                </div>
                <!-- nested menu -->
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            " style="width: 38px; height: 38px">
                        <i class="fas fa-cog"></i>
                      </div>
                      <p class="m-0">Cài đặt</p>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            " style="width: 38px; height: 38px">
                        <i class="fas fa-lock"></i>
                      </div>
                      <p class="m-0">Kiểm tra quyền riêng tư</p>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            " style="width: 38px; height: 38px">
                        <i class="fas fa-unlock-alt"></i>
                      </div>
                      <p class="m-0">Lối tắt quyền riêng tư</p>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            " style="width: 38px; height: 38px">
                        <i class="fas fa-list"></i>
                      </div>
                      <p class="m-0">Nhật ký hoạt động</p>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            " style="width: 38px; height: 38px">
                        <i class="fas fa-newspaper"></i>
                      </div>
                      <p class="m-0">Tùy chọn bảng tin</p>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            " style="width: 38px; height: 38px">
                        <i class="fas fa-globe"></i>
                      </div>
                      <p class="m-0">Ngôn ngữ</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- 2 -->
          <li class="dropdown-item p-1 my-3 rounded" type="button">
            <ul class="navbar-nav">
              <li class="nav-item">
                <div class="d-flex" data-bs-toggle="dropdown">
                  <i class="
                          fas
                          fa-question-circle
                          bg-gray
                          p-2
                          rounded-circle
                        "></i>
                  <div class="
                          ms-3
                          d-flex
                          justify-content-between
                          align-items-center
                          w-100
                        ">
                    <p class="m-0">Trợ giúp và hỗ trợ</p>
                    <i class="fas fa-chevron-right"></i>
                  </div>
                </div>
                <!-- nested menu -->
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            " style="width: 38px; height: 38px">
                        <i class="far fa-question-circle"></i>
                      </div>
                      <p class="m-0">Trung tâm trợ giúp</p>
                    </a>
                  </li>

                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            " style="width: 38px; height: 38px">
                        <i class="far fa-envelope"></i>
                      </div>
                      <p class="m-0">Hộp thư hỗ trợ</p>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            " style="width: 38px; height: 38px">
                        <i class="fas fa-exclamation-circle"></i>
                      </div>
                      <p class="m-0">Báo cáo sự cố</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- 3 -->
          <li class="dropdown-item p-1 my-3 rounded" type="button">
            <ul class="navbar-nav">
              <li class="nav-item">
                <div class="d-flex" data-bs-toggle="dropdown">
                  <i class="fas fa-moon bg-gray p-2 rounded-circle"></i>
                  <div class="
                          ms-3
                          d-flex
                          justify-content-between
                          align-items-center
                          w-100
                        ">
                    <p class="m-0">Màn hình và trợ năng</p>
                    <i class="fas fa-chevron-right"></i>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <!-- 4 -->
          <li class="dropdown-item p-1 my-3 rounded" type="button">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="process-logout.php" class="d-flex text-decoration-none text-dark">
                  <i class="fas fa-cog bg-gray p-2 rounded-circle"></i>
                  <div class="
                          ms-3
                          d-flex
                          justify-content-between
                          align-items-center
                          w-100
                        ">
                    <p class="m-0">Đăng xuất</p>
                  </div>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- end -->
      </div>
    </div>
  </div>
  </div>
  <!-- =============== New Chat Mobile =============== -->
  <div class="modal fade" id="newChat" tabindex="-1" aria-labelledby="newChatLabel" aria-hidden="true"
    data-bs-backdrop="false">
    <div class="
          modal-dialog modal-sm
          position-absolute
          bottom-0
          end-0
          w-75
          shadow
        " style="transform: translateX(-80px)">
      <div class="modal-content border-0">
        <!-- head -->
        <div class="modal-header align-items-start">
          <div>
            <h6 class="modal-title text-dark mb-2" id="newChat1Label">
              Tin nhắn mới
            </h6>
            <label class="text-dark">Đến:</label>
            <input type="text" class="border-0" />
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- body -->
        <div class="modal-body shadow m-0 chat-border">
          <p class="m-0 text-primary ms-4">Gợi ý</p>
        </div>
        <!-- footer -->
        <div class="modal-footer border-0" style="min-height: 300px"></div>
      </div>
    </div>
  </div>
  <!-- ================= Chat Modal Mobile ================= -->
  <!-- chat 1 -->
  <div class="modal fade" id="singleChat1" tabindex="-1" aria-labelledby="singleChat1Label" aria-hidden="true"
    data-bs-backdrop="false">
    <div class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17" style="transform: translateX(-80px)">
      <div class="modal-content border-0 shadow">
        <!-- head -->
        <div class="modal-header">
          <div class="dropdown-item d-flex rounded" type="button" data-bs-container="body" data-bs-toggle="popover"
            data-bs-placement="left" data-bs-content='
              <div>
                <div class="popover-body d-flex flex-column p-0">
                  <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                    <i class="far fa-comment me-3 fs-4"></i>
                    <p class="m-0">Open Messenger App</p>
                  </div>
                  <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                    <i class="far fa-user me-3 fs-4"></i>
                    <p class="m-0">Open Messenger App</p>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                    <i class="fas fa-fill-drip me-3 fs-4"></i>
                    <p class="m-0">Color</p>
                  </div>
                  <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                    <i class="far fa-smile-beam me-3 fs-4"></i>
                    <p class="m-0">Emoji</p>
                  </div>
                  <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                    <i class="fas fa-pencil-alt me-3 fs-4"></i>
                    <p class="m-0">Nicknames</p>
                  </div>
                </div>
              </div>
              ' data-bs-html="true">
            <!-- avatar -->
            <div class="position-relative">
              <img
                src="https://scontent-sin6-4.xx.fbcdn.net/v/t1.6435-1/p100x100/199903032_501572354384297_5620014206431070850_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=7206a8&_nc_ohc=vsYDi_3aFFIAX8qhC9_&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-4.xx&oh=00_AT9obZ1uA-LmlaeUk6JUGpE1I5Lr_OnEQQpbrVFt1hp5zA&oe=61E71BFF"
                alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
              <span class="
                    position-absolute
                    bottom-0
                    translate-middle
                    p-1
                    bg-success
                    border border-light
                    rounded-circle
                  " style="left: 75%">
                <span class="visually-hidden">New alerts</span>
              </span>
            </div>
            <!-- name -->
            <div>
              <p class="m-0">Vũ Nguyễn <i class="fas fa-angle-down"></i></p>
              <span class="text-muted fs-7">Đang hoạt động</span>
            </div>
          </div>
          <!-- close -->
          <i class="fas fa-video mx-2 text-muted pointer"></i>
          <i class="fas fa-phone-alt mx-2 text-muted pointer"></i>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- body -->
        <div class="modal-body p-0 overflow-auto" style="max-height: 300px">
          <!-- message l -->
          <li class="list-group-item border-0 d-flex">
            <!-- avatar -->
            <div>
              <img
                src="https://scontent-sin6-4.xx.fbcdn.net/v/t1.6435-1/p100x100/199903032_501572354384297_5620014206431070850_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=7206a8&_nc_ohc=vsYDi_3aFFIAX8qhC9_&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-4.xx&oh=00_AT9obZ1uA-LmlaeUk6JUGpE1I5Lr_OnEQQpbrVFt1hp5zA&oe=61E71BFF"
                alt="avatar" class="rounded-circle me-2" style="width: 28px; height: 28px; object-fit: cover" />
            </div>
            <!-- message -->
            <p class="bg-gray p-2 rounded">Mai dậy chơi không</p>
          </li>
          <!-- message r -->
          <li class="list-group-item border-0 d-flex justify-content-end">
            <!-- message -->
            <p class="bg-gray p-2 rounded">No</p>
            <!-- avatar -->
            <div>
              <img
                src="https://scontent-sin6-4.xx.fbcdn.net/v/t39.30808-1/cp0/c163.42.291.292a/s80x80/245265801_1782202625303869_6260711662080745064_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=7206a8&_nc_ohc=FYu6UtXBGq8AX9fq_Ed&_nc_ht=scontent-sin6-2.xx&oh=00_AT_A4VjMPBpTiJpYkWyLb5VKaW3YbZTbc5p8R8fH_bQT8w&oe=61C83115"
                style="width: 28px; height: 28px; object-fit: cover" 
                class="rounded-circle me-2"  
              />
            </div>
          </li>
          <!-- message l -->
          <li class="list-group-item border-0 d-flex">
            <!-- avatar -->
            <div>
              <img
                src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-1/cp0/c163.42.291.292a/s80x80/245265801_1782202625303869_6260711662080745064_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=7206a8&_nc_ohc=FYu6UtXBGq8AX9fq_Ed&_nc_ht=scontent-sin6-2.xx&oh=00_AT_A4VjMPBpTiJpYkWyLb5VKaW3YbZTbc5p8R8fH_bQT8w&oe=61C83115"
                alt="avatar" class="rounded-circle me-2" style="width: 28px; height: 28px; object-fit: cover" />
            </div>
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
          </li>
          <!-- message r -->
          <li class="list-group-item border-0 d-flex justify-content-end">
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
          </li>
          <!-- message l -->
          <li class="list-group-item border-0 d-flex">
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
          </li>
          <!-- message r -->
          <li class="list-group-item border-0 d-flex justify-content-end">
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
          </li>
        </div>
        <!-- message input -->
        <div class="modal-footer p-0 m-0 border-0">
          <div class="d-flex">
            <div class="d-flex align-items-center">
              <i class="fas fa-plus-circle mx-1 fs-5 text-muted pointer"></i>
              <i class="far fa-file-image mx-1 fs-5 text-muted pointer"></i>
              <i class="fas fa-portrait mx-1 fs-5 text-muted pointer"></i>
              <i class="fas fa-adjust mx-1 fs-5 text-muted pointer"></i>
            </div>
            <div>
              <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Aa" />
            </div>
            <div class="d-flex align-items-center mx-2">
              <i class="fas fa-thumbs-up fs-5 text-muted pointer"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- chat 2 -->
  <div class="modal fade" id="singleChat2" tabindex="-1" aria-labelledby="singleChat2Label" aria-hidden="true"
    data-bs-backdrop="false">
    <div class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17" style="transform: translateX(-80px)">
      <div class="modal-content border-0 shadow">
        <!-- head -->
        <div class="modal-header">
          <div class="dropdown-item d-flex rounded" type="button" data-bs-container="body" data-bs-toggle="popover"
            data-bs-placement="left" data-bs-content='
                <div>
                  <div class="popover-body d-flex flex-column p-0">
                    <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                      <i class="far fa-comment me-3 fs-4"></i>
                      <p class="m-0">Open Messenger App</p>
                    </div>
                    <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                      <i class="far fa-user me-3 fs-4"></i>
                      <p class="m-0">Open Messenger App</p>
                    </div>
                    <hr>
                    <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                      <i class="fas fa-fill-drip me-3 fs-4"></i>
                      <p class="m-0">Color</p>
                    </div>
                    <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                      <i class="far fa-smile-beam me-3 fs-4"></i>
                      <p class="m-0">Emoji</p>
                    </div>
                    <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                      <i class="fas fa-pencil-alt me-3 fs-4"></i>
                      <p class="m-0">Nicknames</p>
                    </div>
                  </div>
                </div>
                ' data-bs-html="true">
            <!-- avatar -->
            <div class="position-relative">
              <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2"
                style="width: 38px; height: 38px; object-fit: cover" />
              <span class="
                    position-absolute
                    bottom-0
                    translate-middle
                    p-1
                    bg-success
                    border border-light
                    rounded-circle
                  " style="left: 75%">
                <span class="visually-hidden">New alerts</span>
              </span>
            </div>
            <!-- name -->
            <div>
              <p class="m-0">Tuan <i class="fas fa-angle-down"></i></p>
              <span class="text-muted fs-7">Active Now</span>
            </div>
          </div>
          <!-- close -->
          <i class="fas fa-video mx-2 text-muted pointer"></i>
          <i class="fas fa-phone-alt mx-2 text-muted pointer"></i>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- body -->
        <div class="modal-body p-0 overflow-auto" style="max-height: 300px">
          <!-- message l -->
          <li class="list-group-item border-0 d-flex">
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
          </li>
          <!-- message r -->
          <li class="list-group-item border-0 d-flex justify-content-end">
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
          </li>
          <!-- message l -->
          <li class="list-group-item border-0 d-flex">
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
          </li>
          <!-- message r -->
          <li class="list-group-item border-0 d-flex justify-content-end">
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
          </li>
          <!-- message l -->
          <li class="list-group-item border-0 d-flex">
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
          </li>
          <!-- message r -->
          <li class="list-group-item border-0 d-flex justify-content-end">
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
          </li>
        </div>
        <!-- message input -->
        <div class="modal-footer p-0 m-0 border-0">
          <div class="d-flex">
            <div class="d-flex align-items-center">
              <i class="fas fa-plus-circle mx-1 fs-5 text-muted pointer"></i>
              <i class="far fa-file-image mx-1 fs-5 text-muted pointer"></i>
              <i class="fas fa-portrait mx-1 fs-5 text-muted pointer"></i>
              <i class="fas fa-adjust mx-1 fs-5 text-muted pointer"></i>
            </div>
            <div>
              <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Aa" />
            </div>
            <div class="d-flex align-items-center mx-2">
              <i class="fas fa-thumbs-up fs-5 text-muted pointer"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- chat 3 -->
  <div class="modal fade" id="singleChat3" tabindex="-1" aria-labelledby="singleChat3Label" aria-hidden="true"
    data-bs-backdrop="false">
    <div class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17" style="transform: translateX(-80px)">
      <div class="modal-content border-0 shadow">
        <!-- head -->
        <div class="modal-header">
          <div class="dropdown-item d-flex rounded" type="button" data-bs-container="body" data-bs-toggle="popover"
            data-bs-placement="left" data-bs-content='
                    <div>
                      <div class="popover-body d-flex flex-column p-0">
                        <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                          <i class="far fa-comment me-3 fs-4"></i>
                          <p class="m-0">Open Messenger App</p>
                        </div>
                        <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                          <i class="far fa-user me-3 fs-4"></i>
                          <p class="m-0">Open Messenger App</p>
                        </div>
                        <hr>
                        <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                          <i class="fas fa-fill-drip me-3 fs-4"></i>
                          <p class="m-0">Color</p>
                        </div>
                        <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                          <i class="far fa-smile-beam me-3 fs-4"></i>
                          <p class="m-0">Emoji</p>
                        </div>
                        <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                          <i class="fas fa-pencil-alt me-3 fs-4"></i>
                          <p class="m-0">Nicknames</p>
                        </div>
                      </div>
                    </div>
                    ' data-bs-html="true">
            <!-- avatar -->
            <div class="position-relative">
              <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2"
                style="width: 38px; height: 38px; object-fit: cover" />
              <span class="
                    position-absolute
                    bottom-0
                    translate-middle
                    p-1
                    bg-success
                    border border-light
                    rounded-circle
                  " style="left: 75%">
                <span class="visually-hidden">New alerts</span>
              </span>
            </div>
            <!-- name -->
            <div>
              <p class="m-0">Jerry <i class="fas fa-angle-down"></i></p>
              <span class="text-muted fs-7">Active Now</span>
            </div>
          </div>
          <!-- close -->
          <i class="fas fa-video mx-2 text-muted pointer"></i>
          <i class="fas fa-phone-alt mx-2 text-muted pointer"></i>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- body -->
        <div class="modal-body p-0 overflow-auto" style="max-height: 300px">
          <!-- message l -->
          <li class="list-group-item border-0 d-flex">
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/random/3" alt="avatar" class="rounded-circle me-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
          </li>
          <!-- message r -->
          <li class="list-group-item border-0 d-flex justify-content-end">
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
          </li>
          <!-- message l -->
          <li class="list-group-item border-0 d-flex">
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/random/3" alt="avatar" class="rounded-circle me-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
          </li>
          <!-- message r -->
          <li class="list-group-item border-0 d-flex justify-content-end">
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
          </li>
          <!-- message l -->
          <li class="list-group-item border-0 d-flex">
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/random/3" alt="avatar" class="rounded-circle me-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
          </li>
          <!-- message r -->
          <li class="list-group-item border-0 d-flex justify-content-end">
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
          </li>
        </div>
        <!-- message input -->
        <div class="modal-footer p-0 m-0 border-0">
          <div class="d-flex">
            <div class="d-flex align-items-center">
              <i class="fas fa-plus-circle mx-1 fs-5 text-muted pointer"></i>
              <i class="far fa-file-image mx-1 fs-5 text-muted pointer"></i>
              <i class="fas fa-portrait mx-1 fs-5 text-muted pointer"></i>
              <i class="fas fa-adjust mx-1 fs-5 text-muted pointer"></i>
            </div>
            <div>
              <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Aa" />
            </div>
            <div class="d-flex align-items-center mx-2">
              <i class="fas fa-thumbs-up fs-5 text-muted pointer"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- chat 4 -->
  <div class="modal fade" id="singleChat4" tabindex="-1" aria-labelledby="singleChat4Label" aria-hidden="true"
    data-bs-backdrop="false">
    <div class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17" style="transform: translateX(-80px)">
      <div class="modal-content border-0 shadow">
        <!-- head -->
        <div class="modal-header">
          <div class="dropdown-item d-flex rounded" type="button" data-bs-container="body" data-bs-toggle="popover"
            data-bs-placement="left" data-bs-content='
                      <div>
                        <div class="popover-body d-flex flex-column p-0">
                          <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                            <i class="far fa-comment me-3 fs-4"></i>
                            <p class="m-0">Open Messenger App</p>
                          </div>
                          <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                            <i class="far fa-user me-3 fs-4"></i>
                            <p class="m-0">Open Messenger App</p>
                          </div>
                          <hr>
                          <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                            <i class="fas fa-fill-drip me-3 fs-4"></i>
                            <p class="m-0">Color</p>
                          </div>
                          <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                            <i class="far fa-smile-beam me-3 fs-4"></i>
                            <p class="m-0">Emoji</p>
                          </div>
                          <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                            <i class="fas fa-pencil-alt me-3 fs-4"></i>
                            <p class="m-0">Nicknames</p>
                          </div>
                        </div>
                      </div>
                      ' data-bs-html="true">
            <!-- avatar -->
            <div class="position-relative">
              <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2"
                style="width: 38px; height: 38px; object-fit: cover" />
              <span class="
                    position-absolute
                    bottom-0
                    translate-middle
                    p-1
                    bg-success
                    border border-light
                    rounded-circle
                  " style="left: 75%">
                <span class="visually-hidden">New alerts</span>
              </span>
            </div>
            <!-- name -->
            <div>
              <p class="m-0">Tony <i class="fas fa-angle-down"></i></p>
              <span class="text-muted fs-7">Active Now</span>
            </div>
          </div>
          <!-- close -->
          <i class="fas fa-video mx-2 text-muted pointer"></i>
          <i class="fas fa-phone-alt mx-2 text-muted pointer"></i>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- body -->
        <div class="modal-body p-0 overflow-auto" style="max-height: 300px">
          <!-- message l -->
          <li class="list-group-item border-0 d-flex">
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/random/4" alt="avatar" class="rounded-circle me-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
          </li>
          <!-- message r -->
          <li class="list-group-item border-0 d-flex justify-content-end">
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
          </li>
          <!-- message l -->
          <li class="list-group-item border-0 d-flex">
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/random/4" alt="avatar" class="rounded-circle me-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
          </li>
          <!-- message r -->
          <li class="list-group-item border-0 d-flex justify-content-end">
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
          </li>
          <!-- message l -->
          <li class="list-group-item border-0 d-flex">
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/random/4" alt="avatar" class="rounded-circle me-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
          </li>
          <!-- message r -->
          <li class="list-group-item border-0 d-flex justify-content-end">
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
          </li>
        </div>
        <!-- message input -->
        <div class="modal-footer p-0 m-0 border-0">
          <div class="d-flex">
            <div class="d-flex align-items-center">
              <i class="fas fa-plus-circle mx-1 fs-5 text-muted pointer"></i>
              <i class="far fa-file-image mx-1 fs-5 text-muted pointer"></i>
              <i class="fas fa-portrait mx-1 fs-5 text-muted pointer"></i>
              <i class="fas fa-adjust mx-1 fs-5 text-muted pointer"></i>
            </div>
            <div>
              <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Aa" />
            </div>
            <div class="d-flex align-items-center mx-2">
              <i class="fas fa-thumbs-up fs-5 text-muted pointer"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- chat 5 -->
  <div class="modal fade" id="singleChat5" tabindex="-1" aria-labelledby="singleChat5Label" aria-hidden="true"
    data-bs-backdrop="false">
    <div class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17" style="transform: translateX(-80px)">
      <div class="modal-content border-0 shadow">
        <!-- head -->
        <div class="modal-header">
          <div class="dropdown-item d-flex rounded" type="button" data-bs-container="body" data-bs-toggle="popover"
            data-bs-placement="left" data-bs-content='
                          <div>
                            <div class="popover-body d-flex flex-column p-0">
                              <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                                <i class="far fa-comment me-3 fs-4"></i>
                                <p class="m-0">Open Messenger App</p>
                              </div>
                              <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                                <i class="far fa-user me-3 fs-4"></i>
                                <p class="m-0">Open Messenger App</p>
                              </div>
                              <hr>
                              <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                                <i class="fas fa-fill-drip me-3 fs-4"></i>
                                <p class="m-0">Color</p>
                              </div>
                              <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                                <i class="far fa-smile-beam me-3 fs-4"></i>
                                <p class="m-0">Emoji</p>
                              </div>
                              <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                                <i class="fas fa-pencil-alt me-3 fs-4"></i>
                                <p class="m-0">Nicknames</p>
                              </div>
                            </div>
                          </div>
                          ' data-bs-html="true">
            <!-- avatar -->
            <div class="position-relative">
              <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2"
                style="width: 38px; height: 38px; object-fit: cover" />
              <span class="
                    position-absolute
                    bottom-0
                    translate-middle
                    p-1
                    bg-success
                    border border-light
                    rounded-circle
                  " style="left: 75%">
                <span class="visually-hidden">New alerts</span>
              </span>
            </div>
            <!-- name -->
            <div>
              <p class="m-0">Phu <i class="fas fa-angle-down"></i></p>
              <span class="text-muted fs-7">Active Now</span>
            </div>
          </div>
          <!-- close -->
          <i class="fas fa-video mx-2 text-muted pointer"></i>
          <i class="fas fa-phone-alt mx-2 text-muted pointer"></i>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- body -->
        <div class="modal-body p-0 overflow-auto" style="max-height: 300px">
          <!-- message l -->
          <li class="list-group-item border-0 d-flex">
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/random/5" alt="avatar" class="rounded-circle me-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
          </li>
          <!-- message r -->
          <li class="list-group-item border-0 d-flex justify-content-end">
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
          </li>
          <!-- message l -->
          <li class="list-group-item border-0 d-flex">
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/random/5" alt="avatar" class="rounded-circle me-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
          </li>
          <!-- message r -->
          <li class="list-group-item border-0 d-flex justify-content-end">
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
          </li>
          <!-- message l -->
          <li class="list-group-item border-0 d-flex">
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/random/5" alt="avatar" class="rounded-circle me-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
          </li>
          <!-- message r -->
          <li class="list-group-item border-0 d-flex justify-content-end">
            <!-- message -->
            <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            <!-- avatar -->
            <div>
              <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle ms-2"
                style="width: 28px; height: 28px; object-fit: cover" />
            </div>
          </li>
        </div>
        <!-- message input -->
        <div class="modal-footer p-0 m-0 border-0">
          <div class="d-flex">
            <div class="d-flex align-items-center">
              <i class="fas fa-plus-circle mx-1 fs-5 text-muted pointer"></i>
              <i class="far fa-file-image mx-1 fs-5 text-muted pointer"></i>
              <i class="fas fa-portrait mx-1 fs-5 text-muted pointer"></i>
              <i class="fas fa-adjust mx-1 fs-5 text-muted pointer"></i>
            </div>
            <div>
              <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Aa" />
            </div>
            <div class="d-flex align-items-center mx-2">
              <i class="fas fa-thumbs-up fs-5 text-muted pointer"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ================= Main ================= -->
  <div class="container-fluid">
    <div class="row justify-content-evenly">
      <!-- ================= Sidebar ================= -->
      <div class="col-12 col-lg-3">
        <div class="d-none d-xxl-block h-100 fixed-top overflow-hidden scrollbar"
          style="max-width: 360px; width: 100%; z-index: 4">
          <ul class="navbar-nav mt-4 ms-3 d-flex flex-column pb-5 mb-5" style="padding-top: 56px">
            <!-- top -->
            <!-- avatar -->
            <li class="dropdown-item p-1 rounded">
              <a href="#" class="
                    d-flex
                    align-items-center
                    text-decoration-none text-dark
                  ">
                <div class="p-2">
                  <img
                    src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-1/cp0/c163.42.291.292a/s80x80/245265801_1782202625303869_6260711662080745064_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=7206a8&_nc_ohc=FYu6UtXBGq8AX9fq_Ed&_nc_ht=scontent-sin6-2.xx&oh=00_AT_A4VjMPBpTiJpYkWyLb5VKaW3YbZTbc5p8R8fH_bQT8w&oe=61C83115"
                    alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                </div>
                <div>
                  <p class="m-0">Anata Manh</p>
                </div>
              </a>
            </li>
            <!-- top 1 :bạn bè-->
            <li class="dropdown-item p-1 rounded">
              <a href="#" class="
                    d-flex
                    align-items-center
                    text-decoration-none text-dark
                  ">
                <div class="p-2">
                  <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/tSXYIzZlfrS.png" alt="from fb"
                    class="rounded-circle" style="width: 38px; height: 38px; object-fit: cover" />
                </div>
                <div>
                  <p class="m-0">Bạn bè</p>
                </div>
              </a>
            </li>
            <!-- top 2:nhóm -->
            <li class="dropdown-item p-1 rounded">
              <a href="#" class="
                    d-flex
                    align-items-center
                    text-decoration-none text-dark
                  ">
                <div class="p-2">
                  <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/Im_0d7HFH4n.png" alt="from fb"
                    class="rounded-circle" style="width: 38px; height: 38px; object-fit: cover" />
                </div>
                <div>
                  <p class="m-0">Nhóm</p>
                  <i class="fas fa-circle text-primary" style="font-size: 0.5rem !important"></i>
                  <span class="fs-7 text-primary"> 1 tin mới</span>
                </div>
              </a>
            </li>
            <!-- top 3:Market place -->
            <li class="dropdown-item p-1">
              <a href="#" class="
                    d-flex
                    align-items-center
                    justify-content-between
                    text-decoration-none text-dark
                  ">
                <div class="d-flex align-items-center justify-content-evenly">
                  <div class="p-2">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/MN44Sm-CTHN.png" alt="from fb"
                      class="rounded-circle" style="width: 38px; height: 38px; object-fit: cover" />
                  </div>
                  <div>
                    <p class="m-0">Marketplace</p>
                  </div>
                </div>
              </a>
            </li>
            <!-- top 4:Watch -->
            <li class="dropdown-item p-1">
              <a href="#" class="
                    d-flex
                    align-items-center
                    justify-content-between
                    text-decoration-none text-dark
                  ">
                <div class="d-flex align-items-center justify-content-evenly">
                  <div class="p-2">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y-/r/FhOLTyUFKwf.png" alt="from fb"
                      class="rounded-circle" style="width: 38px; height: 38px; object-fit: cover" />
                  </div>
                  <div>
                    <p class="m-0">Watch</p>
                    <i class="fas fa-circle text-primary" style="font-size: 0.5rem !important"></i>
                    <span class="fs-7 text-primary"> 2 video mới</span>
                  </div>
                </div>
              </a>
            </li>
            <!-- top 5 -->
            <li class="dropdown-item p-1">
              <a href="#" class="
                    d-flex
                    align-items-center
                    justify-content-between
                    text-decoration-none text-dark
                  ">
                <div class="d-flex align-items-center justify-content-evenly">
                  <div class="p-2">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y7/r/AYj2837MmgX.png" alt="from fb"
                      class="rounded-circle" style="width: 38px; height: 38px; object-fit: cover" />
                  </div>
                  <div>
                    <p class="m-0">Kỷ niệm</p>
                  </div>
                </div>
              </a>
            </li>
            <!-- Xem thêm -->
            <li class="p-1" type="button">
              <div id="accordionFlushExample">
                <div>
                  <!-- see more button -->
                  <div class="d-flex align-items-center" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                    aria-expanded="false" aria-controls="flush-collapseOne">
                    <div class="p-2">
                      <i class="fas fa-chevron-down rounded-circle p-2"
                        style="background-color: #d5d5d5 !important"></i>
                    </div>
                    <div>
                      <p class="m-0">Xem thêm</p>
                    </div>
                  </div>
                  <!-- content -->
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div>
                      <!-- item 1 -->
                      <div class="
                            d-flex
                            align-items-center
                            dropdown-item
                            p-0
                            m-0
                          ">
                        <div class="p-2">
                          <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/A2tHTy6ibgT.png" alt="from fb"
                            class="rounded-circle" style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              " />
                        </div>
                        <div>
                          <p class="m-0">Chiến dịch gây quỹ</p>
                        </div>
                      </div>
                      <!-- item 2 -->
                      <div class="
                            d-flex
                            align-items-center
                            dropdown-item
                            p-0
                            m-0
                          ">
                        <div class="p-2">
                          <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yn/r/XEWvxf1LQAG.png" alt="from fb"
                            class="rounded-circle" style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              " />
                        </div>
                        <div>
                          <p class="m-0">Chơi game</p>
                        </div>
                      </div>
                      <!-- item 3 -->
                      <div class="
                            d-flex
                            align-items-center
                            dropdown-item
                            p-0
                            m-0
                          ">
                        <div class="p-2">
                          <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yr/r/2uPlV4oORjU.png" alt="from fb"
                            class="rounded-circle" style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              " />
                        </div>
                        <div>
                          <p class="m-0">Đã lưu</p>
                        </div>
                      </div>
                      <!-- item4  -->
                      <div class="
                       d-flex
                       align-items-center
                       dropdown-item
                       p-0
                       m-0
                     ">
                        <div class="p-2">
                          <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yy/r/xH4w-lk44we.png" alt="from fb"
                            class="rounded-circle" style="
                           width: 38px;
                           height: 38px;
                           object-fit: cover;
                         " />
                        </div>
                        <div>
                          <p class="m-0">Facebook Pay</p>
                        </div>
                      </div>
                      <!-- item 5 -->
                      <div class="
                  d-flex
                  align-items-center
                  dropdown-item
                  p-0
                  m-0
                ">
                        <div class="p-2">
                          <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y1/r/l6e-P1BHJLy.png" alt="from fb"
                            class="rounded-circle" style="
                      width: 38px;
                      height: 38px;
                      object-fit: cover;
                    " />
                        </div>
                        <div>
                          <p class="m-0">Gần đây nhất</p>
                        </div>
                      </div>
                      <!-- item 6 -->
                      <div class="
             d-flex
             align-items-center
             dropdown-item
             p-0
             m-0
           ">
                        <div class="p-2">
                          <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yI/r/WcCzeboYevF.png" alt="from fb"
                            class="rounded-circle" style="
                 width: 38px;
                 height: 38px;
                 object-fit: cover;
               " />
                        </div>
                        <div>
                          <p class="m-0">Hoạt động quảng cáo gần đây</p>
                        </div>
                      </div>
                      <!-- end -->
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <hr class="m-0" />
            <!-- shortcuts -->
            <!-- heading -->
            <div class="
                  d-flex
                  justify-content-between
                  align-items-center
                  mt-2
                  text-muted
                  edit-heading
                ">
              <h4 class="m-0 pointer">Lối tắt của bạn</h4>
              <p class="m-0 text-primary me-3 pointer edit-button" type="button" data-bs-toggle="modal"
                data-bs-target="#shortCutModal">
                Chỉnh sửa
              </p>
              <!-- modal -->
              <div class="modal fade" id="shortCutModal" tabindex="-1" aria-labelledby="shortCutModalLabel"
                aria-hidden="true" data-bs-backdrop="false">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <!-- head -->
                    <div class="modal-header align-items-center">
                      <h5 class="text-dark text-center w-100 m-0" id="exampleModalLabel">
                        Chỉnh sửa lối tắt
                      </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- body -->
                    <div class="modal-body">
                      <p class="text-muted">
                        Với lối tắt, bạn có thể nhanh chóng truy cập vào những việc mình hay làm nhất trên Facebook. Tuy
                        lối tắt được sắp xếp tự động nhưng bạn có thể ghim nội dung nào đó để luôn thấy ở đầu hoặc ẩn
                        khỏi danh sách.
                      </p>
                      <!-- Search -->
                      <div class="p-1">
                        <div class="
                              input-group-text
                              bg-gray
                              border-0
                              rounded-pill
                            " style="min-height: 40px; min-width: 230px">
                          <i class="fas fa-search me-2 text-muted"></i>
                          <input type="text" class="form-control rounded-pill border-0 bg-gray"
                            placeholder="Tìm kiếm Trang,nhóm,game và sự kiện" />
                        </div>
                      </div>
                      <!-- short-1 -->
                      <li class="my-1 p-1">
                        <div class="
                              d-flex
                              align-items-center
                              justify-content-between
                              text-decoration-none text-dark
                            ">
                          <div class="
                                d-flex
                                align-items-center
                                justify-content-evenly
                              ">
                            <div class="p-2">
                              <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y5/r/PrjLkDYpYbH.png" alt="from fb"
                                class="
                                    rounded
                                    border border-1 border-secondary
                                  " style="
                                    width: 38px;
                                    height: 38px;
                                    object-fit: cover;
                                  " />
                            </div>
                            <div>
                              <p class="m-0">61TH-NB Phân tích thiết kế hệ thống thông tin</p>
                            </div>
                          </div>
                          <select class="form-select w-50 border-0 bg-gray" aria-label="Default select example">
                            <option selected value="1">
                              Sắp xếp tự động
                            </option>
                            <option value="2">Ghim lên đầu</option>
                            <option value="3">Ẩn</option>
                          </select>
                        </div>
                      </li>
                      <!-- short-2 -->
                      <li class="my-1 p-1">
                        <div class="
                              d-flex
                              align-items-center
                              justify-content-between
                              text-decoration-none text-dark
                            ">
                          <div class="
                                d-flex
                                align-items-center
                                justify-content-evenly
                              ">
                            <div class="p-2">
                              <img
                                src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-6/cp0/c51.0.64.64a/p64x64/237550185_4525272660826364_5890588035783838695_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=ac9ee4&_nc_ohc=HwouDqoU0K8AX-Znd7Y&tn=8KK21KDn8MAFbMO4&_nc_ht=scontent-sin6-2.xx&oh=00_AT9ktaL5-RPnBzzQbj8_ZKEsWySkclmJ2yY5aXkphO0TQg&oe=61C78B8F"
                                alt="from fb" class="
                                    rounded
                                    border border-1 border-secondary
                                  " style="
                                    width: 38px;
                                    height: 38px;
                                    object-fit: cover;
                                  " />
                            </div>
                            <div>
                              <p class="m-0">CSE485_Công nghệ Web_K61</p>
                            </div>
                          </div>
                          <select class="form-select w-50 border-0 bg-gray" aria-label="Default select example">
                            <option selected value="1">
                              Sắp xếp tự động
                            </option>
                            <option value="2">Ghim lên đầu</option>
                            <option value="3">Ẩn</option>
                          </select>
                        </div>
                      </li>
                      <!-- short-3 -->
                      <li class="my-1 p-1">
                        <div class="
                              d-flex
                              align-items-center
                              justify-content-between
                              text-decoration-none text-dark
                            ">
                          <div class="
                                d-flex
                                align-items-center
                                justify-content-evenly
                              ">
                            <div class="p-2">
                              <img
                                src="https://scontent-sin6-1.xx.fbcdn.net/v/t39.30808-6/cp0/c11.0.64.64a/p64x64/240577302_1700123716865538_3530319854431610385_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=ac9ee4&_nc_ohc=qwNtXDRjEk0AX8oBzSw&_nc_ht=scontent-sin6-1.xx&oh=00_AT-FRgQaTdJNZTk7ebdOyccrD0XNozvQHLqYsPrnsqINRA&oe=61C7BBE0"
                                alt="from fb" class="
                                    rounded
                                    border border-1 border-secondary
                                  " style="
                                    width: 38px;
                                    height: 38px;
                                    object-fit: cover;
                                  " />
                            </div>
                            <div>
                              <p class="m-0">Học tiếng Nhật cùng Bảo Sơn-TLU</p>
                            </div>
                          </div>
                          <select class="form-select w-50 border-0 bg-gray" aria-label="Default select example">
                            <option selected value="1">
                              Sắp xếp tự động
                            </option>
                            <option value="2">Ghim lên đầu</option>
                            <option value="3">Ẩn</option>
                          </select>
                        </div>
                      </li>
                      <!-- end -->
                    </div>
                    <!-- footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light text-primary" data-bs-dismiss="modal">
                        Hủy
                      </button>
                      <button type="button" class="btn btn-primary">
                        Lưu
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end -->
            </div>
            <!-- short 1 -->
            <li class="dropdown-item p-1">
              <a href="#" class="
                    d-flex
                    align-items-center
                    text-decoration-none text-dark
                  ">
                <div class="p-2">
                  <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y5/r/PrjLkDYpYbH.png" alt="from fb"
                    class="rounded border border-1 border-secondary"
                    style="width: 38px; height: 38px; object-fit: cover" />
                </div>
                <div>
                  <p class="m-0">61TH-NB Phân tích thiết kế hệ thống thông tin</p>
                </div>
              </a>
            </li>
            <!-- short-2 -->
            <li class="dropdown-item p-1">
              <a href="" class="
                    d-flex
                    align-items-center
                    text-decoration-none text-dark
                  ">
                <div class="p-2">
                  <img
                    src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-6/cp0/c51.0.64.64a/p64x64/237550185_4525272660826364_5890588035783838695_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=ac9ee4&_nc_ohc=HwouDqoU0K8AX-Znd7Y&tn=8KK21KDn8MAFbMO4&_nc_ht=scontent-sin6-2.xx&oh=00_AT9ktaL5-RPnBzzQbj8_ZKEsWySkclmJ2yY5aXkphO0TQg&oe=61C78B8F"
                    alt="from fb" class=" alt=" from fb" class="rounded border border-1 border-secondary"
                    style="width: 38px; height: 38px; object-fit: cover" />
                </div>
                <div>
                  <p class="m-0">CSE485_Công nghệ Web_K61</p>
                </div>
              </a>
            </li>
            <!-- short-3 -->
            <li class="dropdown-item p-1">
              <a href="" class="
                    d-flex
                    align-items-center
                    text-decoration-none text-dark
                  ">
                <div class="p-2">
                  <img
                    src="https://scontent-sin6-1.xx.fbcdn.net/v/t39.30808-6/cp0/c11.0.64.64a/p64x64/240577302_1700123716865538_3530319854431610385_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=ac9ee4&_nc_ohc=qwNtXDRjEk0AX8oBzSw&_nc_ht=scontent-sin6-1.xx&oh=00_AT-FRgQaTdJNZTk7ebdOyccrD0XNozvQHLqYsPrnsqINRA&oe=61C7BBE0"
                    alt="from fb" class=" alt=" from fb" class="rounded border border-1 border-secondary"
                    style="width: 38px; height: 38px; object-fit: cover" />
                </div>
                <div>
                  <p class="m-0">Học tiếng Nhật cùng Bảo Sơn-TLU</p>
                </div>
              </a>
            </li>

          </ul>
          <!-- terms -->
          <div class="p-2 mt-5">
            <p class="text-muted fs-7">
              Quyền riêng tư &#8226; Điều khoản &#8226; Quảng cáo &#8226; Lựa chọn quảng cáo
              &#8226; Cookie &#8226;Xem thêm &#8226;Meta © 2021
            </p>
          </div>
        </div>
      </div>
      <!-- ================= Timeline ================= -->
      <div class="col-12 col-lg-6 pb-5">
        <div class="d-flex flex-column justify-content-center w-100 mx-auto"
          style="padding-top: 56px; max-width: 680px">
          <!-- stories -->
          <div class="mt-5 d-flex justify-content-between position-relative">
            <!-- s 1 -->
            <div class="mx-1 bg-white rounded story" type="button" style="width: 6em; height: 190px">
              <img
                src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-1/cp0/c163.42.291.292a/s80x80/245265801_1782202625303869_6260711662080745064_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=7206a8&_nc_ohc=FYu6UtXBGq8AX9fq_Ed&_nc_ht=scontent-sin6-2.xx&oh=00_AT_A4VjMPBpTiJpYkWyLb5VKaW3YbZTbc5p8R8fH_bQT8w&oe=61C83115"
                class="card-img-top" alt="story posts" style="min-height: 150px; object-fit: cover" />
              <div class="
                    d-flex
                    align-items-center
                    justify-content-center
                    position-relative
                  " style="min-height: 65px">
                <p class="mb-0 text-center fs-7 fw-bold">Tạo tin</p>
                <div class="position-absolute top-0 start-50 translate-middle">
                  <i class="
                        fas
                        fa-plus-circle
                        fs-3
                        text-primary
                        bg-white
                        p-1
                        rounded-circle
                      "></i>
                </div>
              </div>
            </div>
            <!-- s 2 -->
            <div class="rounded mx-1 story" type="button" style="width: 6em; height: 190px">
              <img src="https://source.unsplash.com/random/2" class="card-img-top rounded" alt="story posts"
                style="min-height: 190px; object-fit: cover" />
            </div>
            <!-- s 3 -->
            <div class="rounded mx-1 story" type="button" style="width: 6em; height: 190px">
              <img src="https://source.unsplash.com/random/3" class="card-img-top rounded" alt="story posts"
                style="min-height: 190px; object-fit: cover" />
            </div>
            <!-- s 4 -->
            <div class="rounded mx-1 story" type="button" style="width: 6em; height: 190px">
              <img src="https://source.unsplash.com/random/4" class="card-img-top rounded" alt="story posts"
                style="min-height: 190px; object-fit: cover" />
            </div>
            <!-- s 5 -->
            <div class="d-none d-lg-block rounded mx-1 story" type="button" style="width: 6em; height: 190px">
              <img src="https://source.unsplash.com/random/5" class="card-img-top rounded" alt="story posts"
                style="min-height: 190px; object-fit: cover" />
            </div>
            <!-- s 6 -->
            <div class="d-none d-lg-block rounded mx-1 story" type="button" style="width: 6em; height: 190px">
              <img src="https://source.unsplash.com/random/6" class="card-img-top rounded" alt="story posts"
                style="min-height: 190px; object-fit: cover" />
            </div>
            <!-- next icon -->
            <div class="
                  position-absolute
                  top-50
                  start-100
                  translate-middle
                  pointer
                  d-none d-lg-block
                ">
              <i class="
                    fas
                    fa-arrow-right
                    p-3
                    border
                    text-muted
                    bg-white
                    rounded-circle
                  "></i>
            </div>
          </div>
          <!-- create post -->
          <div class="bg-white p-3 mt-3 rounded border shadow">
            <!-- avatar -->
            <div class="d-flex" type="button">
              <div class="p-1">
                <img
                  src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-1/cp0/c163.42.291.292a/s80x80/245265801_1782202625303869_6260711662080745064_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=7206a8&_nc_ohc=FYu6UtXBGq8AX9fq_Ed&_nc_ht=scontent-sin6-2.xx&oh=00_AT_A4VjMPBpTiJpYkWyLb5VKaW3YbZTbc5p8R8fH_bQT8w&oe=61C83115"
                  alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
              </div>
              <input type="text" class="form-control rounded-pill border-0 bg-gray pointer" disabled
                placeholder="Anata ơi,bạn đang nghĩ gì thế?" data-bs-toggle="modal" data-bs-target="#createModal" />
            </div>
            <!-- create modal -->
            <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true"
              data-bs-backdrop="false">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <!-- head -->
                  <div class="modal-header align-items-center">
                    <h5 class="text-dark text-center w-100 m-0" id="exampleModalLabel">
                      Tạo bài viết
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <!-- body -->
                  <div class="modal-body">
                    <div class="my-1 p-1">
                      <div class="d-flex flex-column">
                        <!-- name -->
                        <div class="d-flex align-items-center">
                          <div class="p-2">
                            <img src="https://source.unsplash.com/collection/happy-people" alt="from fb"
                              class="rounded-circle" style="
                                  width: 38px;
                                  height: 38px;
                                  object-fit: cover;
                                " />
                          </div>
                          <div>
                            <p class="m-0 fw-bold">Anata Manh</p>
                            <select class="form-select border-0 bg-gray w-75 fs-7" aria-label="Default select example">
                              <option selected value="1">Bạn bè</option>
                              <option value="2">Công khai</option>
                              <option value="3">Chỉ mình tôi</option>
                            </select>
                          </div>
                        </div>
                        <!-- text -->
                        <div>
                          <textarea cols="30" rows="5" class="form-control border-0"></textarea>
                        </div>
                        <!-- emoji  -->
                        <div class="
                              d-flex
                              justify-content-between
                              align-items-center
                            ">
                          <img src="https://www.facebook.com/images/composer/SATP_Aa_square-2x.png" class="pointer"
                            alt="fb text" style="
                                width: 30px;
                                height: 30px;
                                object-fit: cover;
                              " />
                          <i class="far fa-laugh-wink fs-5 text-muted pointer"></i>
                        </div>
                        <!-- options -->
                        <div class="
                              d-flex
                              justify-content-between
                              border border-1 border-light
                              rounded
                              p-3
                              mt-3
                            ">
                          <p class="m-0">Thêm vào bài viết</p>
                          <div>
                            <i class="
                                  fas
                                  fa-images
                                  fs-5
                                  text-success
                                  pointer
                                  mx-1
                                "></i>
                            <i class="
                                  fas
                                  fa-user-check
                                  fs-5
                                  text-primary
                                  pointer
                                  mx-1
                                "></i>
                            <i class="
                                  far
                                  fa-smile
                                  fs-5
                                  text-warning
                                  pointer
                                  mx-1
                                "></i>
                            <i class="
                                  fas
                                  fa-map-marker-alt
                                  fs-5
                                  text-info
                                  pointer
                                  mx-1
                                "></i>
                            <i class="
                                  fas
                                  fa-microphone
                                  fs-5
                                  text-danger
                                  pointer
                                  mx-1
                                "></i>
                            <i class="
                                  fas
                                  fa-ellipsis-h
                                  fs-5
                                  text-muted
                                  pointer
                                  mx-1
                                "></i>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- end -->
                  </div>
                  <!-- footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary w-100">
                      Đăng
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <hr />
            <!-- actions -->
            <div class="d-flex flex-column flex-lg-row mt-3">
              <!-- a 1 -->
              <div class="
                    dropdown-item
                    rounded
                    d-flex
                    align-items-center
                    justify-content-center
                  " type="button">
                <i class="fas fa-video me-2 text-danger"></i>
                <p class="m-0 text-muted">Video trực tiếp</p>
              </div>
              <!-- a 2 -->
              <div class="
                    dropdown-item
                    rounded
                    d-flex
                    align-items-center
                    justify-content-center
                  " type="button">
                <i class="fas fa-photo-video me-2 text-success"></i>
                <p class="m-0 text-muted">Ảnh/Video</p>
              </div>
              <!-- a 3 -->
              <div class="
                    dropdown-item
                    rounded
                    d-flex
                    align-items-center
                    justify-content-center
                  " type="button">
                <i class="fas fa-smile me-2 text-warning"></i>
                <p class="m-0 text-muted">Cảm xúc/Hoạt động</p>
              </div>
            </div>
          </div>
          <!-- posts -->
          <!-- p 1 -->
          <div class="bg-white p-4 rounded shadow mt-3">
            <!-- author -->
            <div class="d-flex justify-content-between">
              <!-- avatar -->
              <div class="d-flex">
                <img
                  src="https://scontent-sin6-4.xx.fbcdn.net/v/t1.6435-1/p100x100/199903032_501572354384297_5620014206431070850_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=7206a8&_nc_ohc=vsYDi_3aFFIAX8qhC9_&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-4.xx&oh=00_AT9obZ1uA-LmlaeUk6JUGpE1I5Lr_OnEQQpbrVFt1hp5zA&oe=61E71BFF"
                  alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                <div>
                  <p class="m-0 fw-bold">Vũ Nguyễn</p>
                  <span class="text-muted fs-7">2 giờ</span>
                </div>
              </div>
              <!-- edit -->
              <i class="fas fa-ellipsis-h" type="button" id="post1Menu" data-bs-toggle="dropdown"
                aria-expanded="false"></i>
              <!-- edit menu -->
              <ul class="dropdown-menu border-0 shadow" aria-labelledby="post1Menu">
                <li class="d-flex align-items-center">
                  <a class="
                        dropdown-item
                        d-flex
                        justify-content-around
                        align-items-center
                        fs-7
                      " href="#">
                    Ẩn bài viết</a>
                </li>
                <li class="d-flex align-items-center">
                  <a class="
                        dropdown-item
                        d-flex
                        justify-content-around
                        align-items-center
                        fs-7
                      " href="#">
                    Xóa bài viết</a>
                </li>
              </ul>
            </div>
            <!-- post content -->
            <div class="mt-3">
              <!-- content -->
              <div>
                <p>
                  Vào một mùa đông trời chợt đổ từ mùa đông sang mùa hè.
                </p>
                <img src="https://kenh14cdn.com/203336854389633024/2021/4/28/dn5-16195933886711708401078.jpeg"
                  alt="post image" class="img-fluid rounded" />
              </div>
              <!-- likes & comments -->
              <div class="post__comment mt-3 position-relative">
                <!-- likes -->
                <div class="
                      d-flex
                      align-items-center
                      top-0
                      start-0
                      position-absolute
                    " style="height: 50px; z-index: 5">
                  <div class="me-2">
                    <i class="text-primary fas fa-thumbs-up"></i>
                    <i class="text-danger fab fa-gratipay"></i>
                    <i class="text-warning fas fa-grin-squint"></i>
                  </div>
                  <p class="m-0 text-muted fs-7">Phu,Nguyen và 3 người khác</p>
                </div>
                <!-- comments start-->
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item border-0">
                    <!-- comment collapse -->
                    <h2 class="accordion-header" id="headingTwo">
                      <div class="
                            accordion-button
                            collapsed
                            pointer
                            d-flex
                            justify-content-end
                          " data-bs-toggle="collapse" data-bs-target="#collapsePost1" aria-expanded="false"
                        aria-controls="collapsePost1">
                        <p class="m-0">2 Bình luận</p>
                      </div>
                    </h2>
                    <hr />
                    <!-- comment & like bar -->
                    <div class="d-flex justify-content-around">
                      <div class="
                            dropdown-item
                            rounded
                            d-flex
                            justify-content-center
                            align-items-center
                            pointer
                            text-muted
                            p-1
                          ">
                        <i class="fas fa-thumbs-up me-3"></i>
                        <p class="m-0">Thích</p>
                      </div>
                      <div class="
                            dropdown-item
                            rounded
                            d-flex
                            justify-content-center
                            align-items-center
                            pointer
                            text-muted
                            p-1
                          " data-bs-toggle="collapse" data-bs-target="#collapsePost1" aria-expanded="false"
                        aria-controls="collapsePost1">
                        <i class="fas fa-comment-alt me-3"></i>
                        <p class="m-0">Bình luận</p>
                      </div>
                    </div>
                    <!-- comment expand -->
                    <div id="collapsePost1" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                      data-bs-parent="#accordionExample">
                      <hr />
                      <div class="accordion-body">
                        <!-- comment 1 -->
                        <div class="d-flex align-items-center my-1">
                          <!-- avatar -->
                          <img
                            src="https://scontent.xx.fbcdn.net/v/t1.6435-1/p100x100/126067354_2908745192698577_8146764994838893083_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=dbb9e7&_nc_ohc=dcl8wecFz3QAX8r0NQ5&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=00_AT-u5oID5ZG09RD1ZcRp0I4h2sdKiDOE2xh0OoynQiAg_A&oe=61E72345"
                            alt="avatar" class="rounded-circle me-2" style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              " />
                          <!-- comment text -->
                          <div class="p-3 rounded comment__input w-100">
                            <!-- comment menu of author -->
                            <div class="d-flex justify-content-end">
                              <!-- icon -->
                              <i class="fas fa-ellipsis-h text-blue pointer" id="post1CommentMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false"></i>
                              <!-- menu -->
                              <ul class="dropdown-menu border-0 shadow" aria-labelledby="post1CommentMenuButton">
                                <li class="d-flex align-items-center">
                                  <a class="
                                        dropdown-item
                                        d-flex
                                        justify-content-around
                                        align-items-center
                                        fs-7
                                      " href="#">
                                    Ẩn bình luận</a>
                                </li>
                                <li class="d-flex align-items-center">
                                  <a class="
                                        dropdown-item
                                        d-flex
                                        justify-content-around
                                        align-items-center
                                        fs-7
                                      " href="#">
                                    Đóng góp ý kiến hoặc báo cáo bình luận này</a>
                                </li>
                              </ul>
                            </div>
                            <p class="fw-bold m-0">Dũng</p>
                            <p class="m-0 fs-7 bg-gray p-2 rounded">
                              ngố thật đấy
                            </p>
                          </div>
                        </div>
                        <!-- comment 2 -->
                        <div class="d-flex align-items-center my-1">
                          <!-- avatar -->
                          <img
                            src="https://scontent-sin6-2.xx.fbcdn.net/v/t1.30497-1/p100x100/143086968_2856368904622192_1959732218791162458_n.png?_nc_cat=1&ccb=1-5&_nc_sid=7206a8&_nc_ohc=b6VoV_Mga9IAX9LJ01k&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-2.xx&oh=00_AT-1sXAj6l8reFJTrbMTUPHHZfZZ1IrnFTbgRb53X0f2Rw&oe=61E8B3D1"
                            alt="avatar" class="rounded-circle me-2" style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              " />
                          <!-- comment text -->
                          <div class="p-3 rounded comment__input w-100">
                            <p class="fw-bold m-0">Phu</p>
                            <p class="m-0 fs-7 bg-gray p-2 rounded">
                              Tôi xin bạn đấy

                            </p>
                          </div>
                        </div>
                        <!-- create comment -->
                        <form class="d-flex my-1">
                          <!-- avatar -->
                          <div>
                            <img
                              src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-1/cp0/c163.42.291.292a/s80x80/245265801_1782202625303869_6260711662080745064_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=7206a8&_nc_ohc=FYu6UtXBGq8AX9fq_Ed&_nc_ht=scontent-sin6-2.xx&oh=00_AT_A4VjMPBpTiJpYkWyLb5VKaW3YbZTbc5p8R8fH_bQT8w&oe=61C83115"
                              alt="avatar" class="rounded-circle me-2" style="
                                  width: 38px;
                                  height: 38px;
                                  object-fit: cover;
                                " />
                          </div>
                          <!-- input -->
                          <input type="text" class="form-control border-0 rounded-pill bg-gray"
                            placeholder="Viết bình luận...." />
                        </form>
                        <!-- end -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end -->
              </div>
            </div>
          </div>
          <!-- p 2 -->
          <div class="bg-white p-4 rounded shadow mt-3">
            <!-- author -->
            <div class="d-flex justify-content-between">
              <!-- avatar -->
              <div class="d-flex">
                <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2"
                  style="width: 38px; height: 38px; object-fit: cover" />
                <div>
                  <p class="m-0 fw-bold">Tú</p>
                  <span class="text-muted fs-7">2 phút</span>
                </div>
              </div>
            </div>
            <!-- post content -->
            <div class="mt-3">
              <!-- content -->
              <div>
                <p>
                  Buổi chiều thật đẹp.
                </p>
                <img
                  src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-1/p100x100/255439613_1193874801134654_5404726746443343278_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=7206a8&_nc_ohc=SmILFkcxNtsAX8X-0NW&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-2.xx&oh=00_AT8YuJCiy8fTs_Mx_nhCBRWo27CJ__Y--035YFXkX_PKrg&oe=61C87A14"
                  alt="post image" class="img-fluid rounded" />
              </div>
              <!-- likes & comments -->
              <div class="post__comment mt-3 position-relative">
                <!-- likes -->
                <div class="
                      d-flex
                      align-items-center
                      top-0
                      start-0
                      position-absolute
                    " style="height: 50px; z-index: 5">
                  <div class="me-2">
                    <i class="text-primary fas fa-thumbs-up"></i>
                    <i class="text-danger fab fa-gratipay"></i>
                    <i class="text-warning fas fa-grin-squint"></i>
                  </div>
                  <p class="m-0 text-muted fs-7">Phu, Tuan, và 3 người khác</p>
                </div>
                <!-- comments start-->
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item border-0">
                    <!-- comment collapse -->
                    <h2 class="accordion-header" id="headingTwo">
                      <div class="
                            accordion-button
                            collapsed
                            pointer
                            d-flex
                            justify-content-end
                          " data-bs-toggle="collapse" data-bs-target="#collapsePost1" aria-expanded="false"
                        aria-controls="collapsePost1">
                        <p class="m-0">2 Bình luận</p>
                      </div>
                    </h2>
                    <hr />
                    <!-- comment & like bar -->
                    <div class="d-flex justify-content-around">
                      <div class="
                            dropdown-item
                            rounded
                            d-flex
                            justify-content-center
                            align-items-center
                            pointer
                            text-muted
                            p-1
                          ">
                        <i class="fas fa-thumbs-up me-3"></i>
                        <p class="m-0">Thích</p>
                      </div>
                      <div class="
                            dropdown-item
                            rounded
                            d-flex
                            justify-content-center
                            align-items-center
                            pointer
                            text-muted
                            p-1
                          " data-bs-toggle="collapse" data-bs-target="#collapsePost1" aria-expanded="false"
                        aria-controls="collapsePost1">
                        <i class="fas fa-comment-alt me-3"></i>
                        <p class="m-0">Bình luận</p>
                      </div>
                    </div>
                    <!-- comment expand -->
                    <div id="collapsePost1" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                      data-bs-parent="#accordionExample">
                      <hr />
                      <div class="accordion-body">
                        <!-- comment 1 -->
                        <div class="d-flex align-items-center my-1">
                          <!-- avatar -->
                          <img
                            src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-1/p100x100/233871925_816119029274130_5731177625957293562_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=7206a8&_nc_ohc=b5ubUsprwGgAX-Hsh93&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-2.xx&oh=00_AT-pDG0Cld8_ZhMjnYFDhz2fKLtN3k9nyLm7iuL4JsegCg&oe=61C71FC1"
                            alt="avatar" class="rounded-circle me-2" style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              " />
                          <!-- comment text -->
                          <div class="p-3 rounded comment__input w-100">
                            <!-- comment menu of author -->
                            <div class="d-flex justify-content-end">
                              <!-- icon -->
                              <i class="fas fa-ellipsis-h text-blue pointer" id="post1CommentMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false"></i>
                              <!-- menu -->
                              <ul class="dropdown-menu border-0 shadow" aria-labelledby="post1CommentMenuButton">
                                <li class="d-flex align-items-center">
                                  <a class="
                                        dropdown-item
                                        d-flex
                                        justify-content-around
                                        align-items-center
                                        fs-7
                                      " href="#">
                                    Ẩn bình luận</a>
                                </li>
                                <li class="d-flex align-items-center">
                                  <a class="
                                        dropdown-item
                                        d-flex
                                        justify-content-around
                                        align-items-center
                                        fs-7
                                      " href="#">
                                    Đóng góp ý kiến hoặc báo cáo bình luận này</a>
                                </li>
                              </ul>
                            </div>
                            <p class="fw-bold m-0">Khải Phạm</p>
                            <p class="m-0 fs-7 bg-gray p-2 rounded">
                              Nice
                            </p>
                          </div>
                        </div>
                        <!-- comment 2 -->
                        <div class="d-flex align-items-center my-1">
                          <!-- avatar -->
                          <img
                            src="https://scontent-sin6-2.xx.fbcdn.net/v/t1.6435-1/p100x100/148161211_1790525411122777_2690615779502031184_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=7206a8&_nc_ohc=m5IlQX_f-B4AX9M7CW8&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-2.xx&oh=00_AT_hBECjq9X8oElJ2M28gy5_TYs1fmD_ugjUM_4csbcUdg&oe=61EA67E1"
                            alt="avatar" class="rounded-circle me-2" style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              " />
                          <!-- comment text -->
                          <div class="p-3 rounded comment__input w-100">
                            <p class="fw-bold m-0">Hoàng</p>
                            <p class="m-0 fs-7 bg-gray p-2 rounded">
                              ok.
                            </p>
                          </div>
                        </div>
                        <!-- create comment -->
                        <form class="d-flex my-1">
                          <!-- avatar -->
                          <div>
                            <img
                              src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-1/cp0/c163.42.291.292a/s80x80/245265801_1782202625303869_6260711662080745064_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=7206a8&_nc_ohc=FYu6UtXBGq8AX9fq_Ed&_nc_ht=scontent-sin6-2.xx&oh=00_AT_A4VjMPBpTiJpYkWyLb5VKaW3YbZTbc5p8R8fH_bQT8w&oe=61C83115"
                              alt="avatar" class="rounded-circle me-2" style="
                                  width: 38px;
                                  height: 38px;
                                  object-fit: cover;
                                " />
                          </div>
                          <!-- input -->
                          <input type="text" class="form-control border-0 rounded-pill bg-gray"
                            placeholder="Viết bình luận...." />
                        </form>
                        <!-- end -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ================= Chatbar ================= -->
      <div class="col-12 col-lg-3">
        <div class="
              d-none d-xxl-block
              h-100
              fixed-top
              end-0
              overflow-hidden
              scrollbar
            " style="
              max-width: 360px;
              width: 100%;
              z-index: 4;
              padding-top: 56px;
              left: initial !important;
            ">
          <div class="p-3 mt-4">
            <!-- sponsors -->
            <h5 class="text-muted">Được tài trợ</h5>
            <!-- s 1 -->
            <li class="dropdown-item my-2 d-flex justify-content-between">
              <!-- img -->
              <a href="#" class="
                    d-flex
                    align-items-center
                    text-decoration-none
                    link-dark
                  ">
                <img
                  src="https://scontent-sin6-3.xx.fbcdn.net/v/t58.17529-6/76491274_447599756978148_4470701137507236494_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=6cb3ed&_nc_ohc=wL2570tBevEAX_hCNoN&_nc_ht=scontent-sin6-3.xx&oh=00_AT-Kn4QfKpbKv8SeHjZDhmq7eiIxi0-MUgfrk4U3KUfswg&oe=61C4CE3A"
                  alt="ads" style="width: 100px; height: 100px; object-fit: cover" class="rounded me-3" />
                <div>
                  <p class="m-0">Shopee</p>
                  <span class="text-muted fs-7">shopee.vn</span>
                </div>
              </a>
              <!-- icon -->
              <div class="
                    rounded-circle
                    p-1
                    bg-white
                    d-flex
                    align-items-center
                    justify-content-center
                    mx-2
                    sponsor-icon
                    nav-item
                  " type="button" style="width: 38px; height: 38px">
                <i class="fas fa-ellipsis-h text-muted p-2" data-bs-toggle="dropdown"></i>
                <!-- menu -->
                <ul class="dropdown-menu">
                  <!-- item 1 -->
                  <li class="dropdown-item">
                    <a href="#" class="
                          d-flex
                          align-items-center
                          text-decoration-none text-dark
                        ">
                      <i class="far fa-window-close"></i>
                      <div class="ms-3">
                        <p class="m-0">Ẩn quảng cáo</p>
                        <span class="text-muted fs-7">Quảng cáo này sẽ không hiển thị lại nữa.</span>
                      </div>
                    </a>
                  </li>
                  <!-- item 2 -->
                  <li class="dropdown-item">
                    <a href="#" class="
                          d-flex
                          align-items-center
                          text-decoration-none text-dark
                        ">
                      <i class="fas fa-exclamation-triangle"></i>
                      <div class="ms-3">
                        <p class="m-0">Báo cáo quảng cáo</p>
                        <span class="text-muted fs-7">Hãy cho chúng tôi biết quảng cáo này có vấn đề gì.</span>
                      </div>
                    </a>
                  </li>
                  <!-- item 3 -->
                  <li class="dropdown-item">
                    <a href="#" class="
                          d-flex
                          align-items-center
                          text-decoration-none text-dark
                        ">
                      <i class="fas fa-info-circle"></i>
                      <div class="ms-3">
                        <p class="m-0">Tại sao tôi nhìn thấy quảng cáo này?</p>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- s 2 -->
            <li class="dropdown-item my-2 d-flex justify-content-between">
              <!-- img -->
              <a href="#" class="
                    d-flex
                    align-items-center
                    text-decoration-none
                    link-dark
                  ">
                <img
                  src="https://scontent-sin6-2.xx.fbcdn.net/v/t45.1600-4/259441164_23848988820210694_982765208558136294_n.png?_nc_cat=1&ccb=1-5&_nc_sid=2aac32&_nc_ohc=xWkClYWBltsAX9l5q9k&_nc_ht=scontent-sin6-2.xx&oh=00_AT_Wznb6RiUvNoMG_c_gOSOaGzsxlGu2ifVJ4Wu9cKSI6Q&oe=61C8014B"
                  alt="ads" style="width: 100px; height: 100px; object-fit: cover" class="rounded me-3" />
                <div>
                  <p class="m-0">The best AI check App server</p>
                  <span class="text-muted fs-7">checkgoods.jp</span>
                </div>
              </a>
              <!-- icon -->
              <div class="
                    rounded-circle
                    p-1
                    bg-white
                    d-flex
                    align-items-center
                    justify-content-center
                    mx-2
                    sponsor-icon
                    nav-item
                  " type="button" style="width: 38px; height: 38px">
                <i class="fas fa-ellipsis-h text-muted p-2" data-bs-toggle="dropdown"></i>
                <!-- menu -->
                <ul class="dropdown-menu">
                  <!-- item 1 -->
                  <li class="dropdown-item">
                    <a href="#" class="
                          d-flex
                          align-items-center
                          text-decoration-none text-dark
                        ">
                      <i class="far fa-window-close"></i>
                      <div class="ms-3">
                        <p class="m-0">Ẩn quảng cáo</p>
                        <span class="text-muted fs-7">Quảng cáo này sẽ không hiển thị lại nữa.</span>
                      </div>
                    </a>
                  </li>
                  <!-- item 2 -->
                  <li class="dropdown-item">
                    <a href="#" class="
                          d-flex
                          align-items-center
                          text-decoration-none text-dark
                        ">
                      <i class="fas fa-exclamation-triangle"></i>
                      <div class="ms-3">
                        <p class="m-0">Báo cáo quảng cáo</p>
                        <span class="text-muted fs-7">Hãy cho chúng tôi biết quảng cáo này có vấn đề gì.</span>
                      </div>
                    </a>
                  </li>
                  <!-- item 3 -->
                  <li class="dropdown-item">
                    <a href="#" class="
                          d-flex
                          align-items-center
                          text-decoration-none text-dark
                        ">
                      <i class="fas fa-info-circle"></i>
                      <div class="ms-3">
                        <p class="m-0">Tại sao tôi nhìn thấy quảng cáo này?</p>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- contacts -->
            <hr class="m-0" />
            <div class="my-3 d-flex justify-content-between align-items-center">
              <p class="text-muted fs-5 m-0">Người liên hệ</p>
              <!-- icons -->
              <div class="text-muted">
                <!-- video room -->
                <i class="fas fa-video mx-2 pointer" type="button" data-bs-toggle="modal"
                  data-bs-target="#videoRoomD"></i>
               
                <!-- new chat -->
                <i class="fas fa-search mx-2 pointer" type="button" data-bs-toggle="modal"
                  data-bs-target="#newChat"></i>
                <!-- chat settings -->
                <i class="fas fa-ellipsis-h pointer text-muted mx-2" type="button" data-bs-toggle="dropdown"></i>
                <!-- chat setting dd -->
                <ul class="dropdown-menu shadow" style="width: 18em">
                  <!-- title -->
                  <div class="p-2">
                    <h5>Cài đặt Chat</h5>
                    <span class="text-muted fs-7">Tùy chỉnh trải nghiệm trên Messenger.</span>
                  </div>
                  <hr />
                  <!-- incoming sound -->
                  <li>
                    <div class="
                          dropdown-item
                          d-flex
                          align-items-center
                          justify-content-between
                        ">
                      <!-- icon -->
                      <div class="d-flex align-items-center">
                        <i class="fas fa-phone-alt me-3"></i>
                        <p class="m-0">Âm thanh cuộc gọi đến</p>
                      </div>
                      <!-- toggle -->
                      <div class="form-check form-switch m-0">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked />
                        <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                      </div>
                    </div>
                  </li>
                  <!-- message sound -->
                  <li>
                    <div class="
                          dropdown-item
                          d-flex
                          align-items-center
                          justify-content-between
                        ">
                      <!-- icon -->
                      <div class="d-flex align-items-center">
                        <i class="fas fa-volume-off me-4 fs-4"></i>
                        <p class="m-0">Âm thanh tin nhắn</p>
                      </div>
                      <!-- toggle -->
                      <div class="form-check form-switch m-0">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked />
                        <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                      </div>
                    </div>
                  </li>
                  <!-- popup message -->
                  <li>
                    <div class="
                          dropdown-item
                          d-flex
                          align-items-center
                          justify-content-between
                        ">
                      <!-- icon -->
                      <div class="d-flex align-items-center">
                        <i class="fas fa-spinner me-3"></i>
                        <p class="m-0">Tin nhắn mới bật lên</p>
                      </div>
                      <!-- toggle -->
                      <div class="form-check form-switch m-0">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked />
                        <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                      </div>
                    </div>
                    <span class="ms-5 text-muted fs-7">Tự động mở tin nhắn mới.</span>
                  </li>
                  <hr class="m-0" />
                  <!-- item 1 -->
                  <li>
                    <div class="
                          dropdown-item
                          d-flex
                          align-items-center
                          justify-content-between
                        ">
                      <!-- icon -->
                      <div class="d-flex align-items-center">
                        <i class="fas fa-toggle-off me-3"></i>
                        <p class="m-0">Tắt trạng thái hoạt động</p>
                      </div>
                    </div>
                  </li>

                  <!-- item 2 -->
                  <li>
                    <div class="
                          dropdown-item
                          d-flex
                          align-items-center
                          justify-content-between
                        ">
                      <!-- icon -->
                      <div class="d-flex align-items-center">
                        <i class="fas fa-share-square me-3"></i>
                        <p class="m-0">Cài đặt gửi tin nhắn</p>
                      </div>
                    </div>
                  </li>
                  <!-- item 4 -->
                  <li>
                    <div class="
                          dropdown-item
                          d-flex
                          align-items-center
                          justify-content-between
                        ">
                      <!-- icon -->
                      <div class="d-flex align-items-center">
                        <i class="fas fa-shield-alt me-3"></i>
                        <p class="m-0">Cài đặt chặn</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- friend 1 -->
            <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal"
              data-bs-target="#singleChat1">
              <!-- avatar -->
              <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box"
                data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover"
                data-bs-content='
                    <div>
                      <div class="popover-body d-flex p-2">
                        <div>
                          <img src="https://scontent-sin6-4.xx.fbcdn.net/v/t1.6435-1/p100x100/199903032_501572354384297_5620014206431070850_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=7206a8&_nc_ohc=vsYDi_3aFFIAX8qhC9_&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-4.xx&oh=00_AT9obZ1uA-LmlaeUk6JUGpE1I5Lr_OnEQQpbrVFt1hp5zA&oe=61E71BFF" alt="avatar" class="pop-avatar"  />
                        </div>
                        <div >
                          <h5>Mike</h5>
                          <div class="d-flex">
                            <i class="fas fa-user-friends m-1 text-muted"></i>
                            <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                          </div>
                          <div class="d-flex">
                          <i class="fas fa-graduation-cap m-1 text-muted"></i>
                          <p>Studies at MIT</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  ' data-bs-html="true">
                <div class="position-relative">
                  <img
                    src="https://scontent-sin6-4.xx.fbcdn.net/v/t1.6435-1/p100x100/199903032_501572354384297_5620014206431070850_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=7206a8&_nc_ohc=vsYDi_3aFFIAX8qhC9_&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-4.xx&oh=00_AT9obZ1uA-LmlaeUk6JUGpE1I5Lr_OnEQQpbrVFt1hp5zA&oe=61E71BFF"
                    alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                  <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                    <span class="visually-hidden"></span>
                  </span>
                </div>
                <p class="m-0">Vũ Nguyễn</p>
              </div>
            </li>
            <!-- friend 2 -->
            <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal"
              data-bs-target="#singleChat2">
              <!-- avatar -->
              <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box"
                data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover"
                data-bs-content='
                          <div>
                            <div class="popover-body d-flex p-2">
                              <div>
                                <img src="data:image/jpeg;base64,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" alt="avatar" class="pop-avatar"  />
                              </div>
                              <div >
                                <h5>Tuan</h5>
                                <div class="d-flex">
                                  <i class="fas fa-user-friends m-1 text-muted"></i>
                                  <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                </div>
                                <div class="d-flex">
                                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                <p>Studies at MIT</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        ' data-bs-html="true">
                <div class="position-relative">
                  <img
                    src="data:image/jpeg;base64,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"
                    alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                  <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                    <span class="visually-hidden"></span>
                  </span>
                </div>
                <p class="m-0">Duy</p>
              </div>
            </li>
            <!-- friend 3 -->
            <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal"
              data-bs-target="#singleChat3">
              <!-- avatar -->
              <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box"
                data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover"
                data-bs-content='
                              <div>
                                <div class="popover-body d-flex p-2">
                                  <div>
                                    <img src="https://scontent-sin6-2.xx.fbcdn.net/v/t1.6435-1/p100x100/148161211_1790525411122777_2690615779502031184_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=7206a8&_nc_ohc=m5IlQX_f-B4AX9M7CW8&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-2.xx&oh=00_AT_hBECjq9X8oElJ2M28gy5_TYs1fmD_ugjUM_4csbcUdg&oe=61EA67E1" alt="avatar" class="pop-avatar"  />
                                  </div>
                                  <div >
                                    <h5>Jerry</h5>
                                    <div class="d-flex">
                                      <i class="fas fa-user-friends m-1 text-muted"></i>
                                      <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                    </div>
                                    <div class="d-flex">
                                    <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                    <p>Studies at MIT</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            ' data-bs-html="true">
                <div class="position-relative">
                  <img
                    src="https://scontent-sin6-2.xx.fbcdn.net/v/t1.6435-1/p100x100/148161211_1790525411122777_2690615779502031184_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=7206a8&_nc_ohc=m5IlQX_f-B4AX9M7CW8&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-2.xx&oh=00_AT_hBECjq9X8oElJ2M28gy5_TYs1fmD_ugjUM_4csbcUdg&oe=61EA67E1"
                    alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                  <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                    <span class="visually-hidden"></span>
                  </span>
                </div>
                <p class="m-0">Hoàng</p>
              </div>
            </li>
            <!-- friend 4 -->
            <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal"
              data-bs-target="#singleChat4">
              <!-- avatar -->
              <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box"
                data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover"
                data-bs-content='
                          <div>
                            <div class="popover-body d-flex p-2">
                              <div>
                                <img src="https://scontent-sin6-4.xx.fbcdn.net/v/t1.6435-1/c0.7.100.100a/p100x100/30709499_133085634209513_2150513683002818560_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=7206a8&_nc_ohc=b0OOkbClCgwAX-1LISJ&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-4.xx&oh=00_AT94L2fpJ1v0vx2Rx8zZIxvhxL60ilWzkBq9k-hVz4Z3iw&oe=61E969DF" alt="avatar" class="pop-avatar"  />
                              </div>
                              <div >
                                <h5>Tony</h5>
                                <div class="d-flex">
                                  <i class="fas fa-user-friends m-1 text-muted"></i>
                                  <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                </div>
                                <div class="d-flex">
                                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                <p>Studies at MIT</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        ' data-bs-html="true">
                <div class="position-relative">
                  <img
                    src="https://scontent-sin6-4.xx.fbcdn.net/v/t1.6435-1/c0.7.100.100a/p100x100/30709499_133085634209513_2150513683002818560_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=7206a8&_nc_ohc=b0OOkbClCgwAX-1LISJ&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-4.xx&oh=00_AT94L2fpJ1v0vx2Rx8zZIxvhxL60ilWzkBq9k-hVz4Z3iw&oe=61E969DF"
                    alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                  <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                    <span class="visually-hidden"></span>
                  </span>
                </div>
                <p class="m-0">Tuấn</p>
              </div>
            </li>
            <!-- friend 5 -->
            <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal"
              data-bs-target="#singleChat5">
              <!-- avatar -->
              <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box"
                data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover"
                data-bs-content='
                      <div>
                        <div class="popover-body d-flex p-2">
                          <div>
                            <img src="https://source.unsplash.com/random/5" alt="avatar" class="pop-avatar"  />
                          </div>
                          <div >
                            <h5>Phu</h5>
                            <div class="d-flex">
                              <i class="fas fa-user-friends m-1 text-muted"></i>
                              <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                            </div>
                            <div class="d-flex">
                            <i class="fas fa-graduation-cap m-1 text-muted"></i>
                            <p>Studies at MIT</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    ' data-bs-html="true">
                <div class="position-relative">
                  <img src="https://source.unsplash.com/random/5" alt="avatar" class="rounded-circle me-2"
                    style="width: 38px; height: 38px; object-fit: cover" />
                  <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                    <span class="visually-hidden"></span>
                  </span>
                </div>
                <p class="m-0">Phu</p>
              </div>
            </li>
            <!-- friend 6 -->
            <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal"
              data-bs-target="#singleChat1">
              <!-- avatar -->
              <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box"
                data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover"
                data-bs-content='
                                  <div>
                                    <div class="popover-body d-flex p-2">
                                      <div>
                                        <img src="https://scontent.fhan6-1.fna.fbcdn.net/v/t1.6435-1/p100x100/74465629_1917275761751079_3827880308250771456_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=7206a8&_nc_ohc=YQTmOMaD0e4AX_UqDji&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan6-1.fna&oh=00_AT9I9hS8Z6mSCiOvZ8pvvkf_KkRTnCUJx1lJiu31gb4K6g&oe=61EA0D0D"  />
                                      </div>
                                      <div >
                                        <h5>Mike</h5>
                                        <div class="d-flex">
                                          <i class="fas fa-user-friends m-1 text-muted"></i>
                                          <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                        </div>
                                        <div class="d-flex">
                                        <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                        <p>Studies at MIT</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                ' data-bs-html="true">
                <div class="position-relative">
                  <img
                    src="https://scontent.fhan6-1.fna.fbcdn.net/v/t1.6435-1/p100x100/74465629_1917275761751079_3827880308250771456_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=7206a8&_nc_ohc=YQTmOMaD0e4AX_UqDji&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan6-1.fna&oh=00_AT9I9hS8Z6mSCiOvZ8pvvkf_KkRTnCUJx1lJiu31gb4K6g&oe=61EA0D0D"
                    alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                  <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                    <span class="visually-hidden"></span>
                  </span>
                </div>
                <p class="m-0">Nam</p>
              </div>
            </li>
            <!-- friend 7 -->
            <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal"
              data-bs-target="#singleChat2">
              <!-- avatar -->
              <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box"
                data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover"
                data-bs-content='
                                        <div>
                                          <div class="popover-body d-flex p-2">
                                            <div>
                                              <img src="https://scontent.fhan6-1.fna.fbcdn.net/v/t1.6435-1/p100x100/138624825_1909673372517303_3002946972548105971_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=7206a8&_nc_ohc=8oeWXafwdwwAX9Bs43z&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan6-1.fna&oh=00_AT9HsaIoMawnmFKXmFoikggCHMkc2_yRSkVz08xPEDIvng&oe=61EA95FF" alt="avatar" class="pop-avatar"  />
                                            </div>
                                            <div >
                                              <h5>Tuan</h5>
                                              <div class="d-flex">
                                                <i class="fas fa-user-friends m-1 text-muted"></i>
                                                <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                              </div>
                                              <div class="d-flex">
                                              <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                              <p>Studies at MIT</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      ' data-bs-html="true">
                <div class="position-relative">
                  <img
                    src="https://scontent.fhan6-1.fna.fbcdn.net/v/t1.6435-1/p100x100/138624825_1909673372517303_3002946972548105971_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=7206a8&_nc_ohc=8oeWXafwdwwAX9Bs43z&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan6-1.fna&oh=00_AT9HsaIoMawnmFKXmFoikggCHMkc2_yRSkVz08xPEDIvng&oe=61EA95FF"
                    alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                  <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                    <span class="visually-hidden"></span>
                  </span>
                </div>
                <p class="m-0">Minh</p>
              </div>
            </li>
            <!-- friend 8 -->
            <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal"
              data-bs-target="#singleChat3">
              <!-- avatar -->
              <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box"
                data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover"
                data-bs-content='
                                            <div>
                                              <div class="popover-body d-flex p-2">
                                                <div>
                                                  <img src="https://scontent.fhan6-1.fna.fbcdn.net/v/t39.30808-1/c0.8.100.100a/p100x100/240664792_2974839636091620_3782546001355537521_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=7206a8&_nc_ohc=SeJ21LOWLcYAX-_uMKC&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan6-1.fna&oh=00_AT9tlgBFkkpWdmupqs0dRuGdb0ZczRTNpfe_ZMbdtJKQBA&oe=61C943D2" alt="avatar" class="pop-avatar"  />
                                                </div>
                                                <div >
                                                  <h5>Jerry</h5>
                                                  <div class="d-flex">
                                                    <i class="fas fa-user-friends m-1 text-muted"></i>
                                                    <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                                  </div>
                                                  <div class="d-flex">
                                                  <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                                  <p>Studies at MIT</p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          ' data-bs-html="true">
                <div class="position-relative">
                  <img
                    src="https://scontent.fhan6-1.fna.fbcdn.net/v/t39.30808-1/c0.8.100.100a/p100x100/240664792_2974839636091620_3782546001355537521_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=7206a8&_nc_ohc=SeJ21LOWLcYAX-_uMKC&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan6-1.fna&oh=00_AT9tlgBFkkpWdmupqs0dRuGdb0ZczRTNpfe_ZMbdtJKQBA&oe=61C943D2"
                    alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                  <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                    <span class="visually-hidden"></span>
                  </span>
                </div>
                <p class="m-0">Công</p>
              </div>
            </li>
            <!-- friend 9 -->
            <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal"
              data-bs-target="#singleChat4">
              <!-- avatar -->
              <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box"
                data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover"
                data-bs-content='
                                        <div>
                                          <div class="popover-body d-flex p-2">
                                            <div>
                                              <img src="https://scontent.fhan6-1.fna.fbcdn.net/v/t1.6435-1/p100x100/170488640_2887920981526420_4215585958258588643_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=7206a8&_nc_ohc=w9sasdDHxnIAX_zN4ba&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan6-1.fna&oh=00_AT_o_D8bEUCJdPPxYfIxG0g7mI8HR4BvtWyE43Rx7zdw8w&oe=61EA939D" alt="avatar" class="pop-avatar"  />
                                            </div>
                                            <div >
                                              <h5>Tony</h5>
                                              <div class="d-flex">
                                                <i class="fas fa-user-friends m-1 text-muted"></i>
                                                <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                              </div>
                                              <div class="d-flex">
                                              <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                              <p>Studies at MIT</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      ' data-bs-html="true">
                <div class="position-relative">
                  <img
                    src="https://scontent.fhan6-1.fna.fbcdn.net/v/t1.6435-1/p100x100/170488640_2887920981526420_4215585958258588643_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=7206a8&_nc_ohc=w9sasdDHxnIAX_zN4ba&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan6-1.fna&oh=00_AT_o_D8bEUCJdPPxYfIxG0g7mI8HR4BvtWyE43Rx7zdw8w&oe=61EA939D"
                    alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                  <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                    <span class="visually-hidden"></span>
                  </span>
                </div>
                <p class="m-0">Anh</p>
              </div>
            </li>
            <!-- friend 10 -->
            <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal"
              data-bs-target="#singleChat5">
              <!-- avatar -->
              <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box"
                data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover"
                data-bs-content='
                                    <div>
                                      <div class="popover-body d-flex p-2">
                                        <div>
                                          <img src="https://scontent.fhan6-1.fna.fbcdn.net/v/t39.30808-1/p100x100/262522860_2957353717927885_7272223226965984812_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=7206a8&_nc_ohc=EVZFSoU4QBsAX93KtcX&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan6-1.fna&oh=00_AT-s44qCABGrb8gJdAfrbmku3w6f_RLt7pz8pmFPX0_aQw&oe=61C8CD78" alt="avatar" class="pop-avatar"  />
                                        </div>
                                        <div >
                                          <h5>Phu</h5>
                                          <div class="d-flex">
                                            <i class="fas fa-user-friends m-1 text-muted"></i>
                                            <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                          </div>
                                          <div class="d-flex">
                                          <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                          <p>Studies at MIT</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  ' data-bs-html="true">
                <div class="position-relative">
                  <img
                    src="https://scontent.fhan6-1.fna.fbcdn.net/v/t39.30808-1/p100x100/262522860_2957353717927885_7272223226965984812_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=7206a8&_nc_ohc=EVZFSoU4QBsAX93KtcX&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan6-1.fna&oh=00_AT-s44qCABGrb8gJdAfrbmku3w6f_RLt7pz8pmFPX0_aQw&oe=61C8CD78"
                    alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                  <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                    <span class="visually-hidden"></span>
                  </span>
                </div>
                <p class="m-0">Thúy</p>
              </div>
            </li>
            <!-- friend 11 -->
            <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal"
              data-bs-target="#singleChat1">
              <!-- avatar -->
              <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box"
                data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover"
                data-bs-content='
                    <div>
                      <div class="popover-body d-flex p-2">
                        <div>
                          <img src="https://scontent.fhan6-1.fna.fbcdn.net/v/t39.30808-1/p100x100/265608411_1287766848365078_2044468679411445333_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=7206a8&_nc_ohc=3KR09bARupwAX_qdyus&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan6-1.fna&oh=00_AT-YiME78wbJfbbWwBV-ZD2xes8dmtM88xBBAdzAxBmFmw&oe=61C85482" alt="avatar" class="pop-avatar"  />
                        </div>
                        <div >
                          <h5>Mike</h5>
                          <div class="d-flex">
                            <i class="fas fa-user-friends m-1 text-muted"></i>
                            <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                          </div>
                          <div class="d-flex">
                          <i class="fas fa-graduation-cap m-1 text-muted"></i>
                          <p>Studies at MIT</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  ' data-bs-html="true">
                <div class="position-relative">
                  <img
                    src="https://scontent.fhan6-1.fna.fbcdn.net/v/t39.30808-1/p100x100/265608411_1287766848365078_2044468679411445333_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=7206a8&_nc_ohc=3KR09bARupwAX_qdyus&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan6-1.fna&oh=00_AT-YiME78wbJfbbWwBV-ZD2xes8dmtM88xBBAdzAxBmFmw&oe=61C85482"
                    alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                  <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                    <span class="visually-hidden"></span>
                  </span>
                </div>
                <p class="m-0">Duy</p>
              </div>
            </li>
            <!-- friend 12 -->
            <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal"
              data-bs-target="#singleChat2">
              <!-- avatar -->
              <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box"
                data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover"
                data-bs-content='
                          <div>
                            <div class="popover-body d-flex p-2">
                              <div>
                                <img src="https://scontent.fhan6-1.fna.fbcdn.net/v/t1.6435-1/p100x100/50882498_619605735153613_9166391822430240768_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=7206a8&_nc_ohc=Mm3mrhIqYwoAX-PIJla&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan6-1.fna&oh=00_AT-lOamfodyPk0GDAcWA1QSqo1_TTSWJOlm3TZ-MDrxkAw&oe=61E9AB2B" alt="avatar" class="pop-avatar"  />
                              </div>
                              <div >
                                <h5>Tuan</h5>
                                <div class="d-flex">
                                  <i class="fas fa-user-friends m-1 text-muted"></i>
                                  <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                </div>
                                <div class="d-flex">
                                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                <p>Studies at MIT</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        ' data-bs-html="true">
                <div class="position-relative">
                  <img
                    src="https://scontent.fhan6-1.fna.fbcdn.net/v/t1.6435-1/p100x100/50882498_619605735153613_9166391822430240768_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=7206a8&_nc_ohc=Mm3mrhIqYwoAX-PIJla&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan6-1.fna&oh=00_AT-lOamfodyPk0GDAcWA1QSqo1_TTSWJOlm3TZ-MDrxkAw&oe=61E9AB2B"
                    alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                  <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                    <span class="visually-hidden"></span>
                  </span>
                </div>
                <p class="m-0">Ôn</p>
              </div>
            </li>
            <!-- friend 13 -->
            <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal"
              data-bs-target="#singleChat3">
              <!-- avatar -->
              <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box"
                data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover"
                data-bs-content='
                              <div>
                                <div class="popover-body d-flex p-2">
                                  <div>
                                    <img src="https://scontent.fhan6-1.fna.fbcdn.net/v/t39.30808-1/p100x100/251614885_1277313692691973_771287444082324480_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=7206a8&_nc_ohc=okHGZDgXklMAX_6TVVD&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan6-1.fna&oh=00_AT8pQ03EVPBos9bSzgMQHkk98a7ZcWasv-SyyGakTu3OfA&oe=61C8E956" alt="avatar" class="pop-avatar"  />
                                  </div>
                                  <div >
                                    <h5>Jerry</h5>
                                    <div class="d-flex">
                                      <i class="fas fa-user-friends m-1 text-muted"></i>
                                      <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                    </div>
                                    <div class="d-flex">
                                    <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                    <p>Studies at MIT</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            ' data-bs-html="true">
                <div class="position-relative">
                  <img
                    src="https://scontent.fhan6-1.fna.fbcdn.net/v/t39.30808-1/p100x100/251614885_1277313692691973_771287444082324480_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=7206a8&_nc_ohc=okHGZDgXklMAX_6TVVD&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan6-1.fna&oh=00_AT8pQ03EVPBos9bSzgMQHkk98a7ZcWasv-SyyGakTu3OfA&oe=61C8E956"
                    alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                  <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                    <span class="visually-hidden"></span>
                  </span>
                </div>
                <p class="m-0">Tuan Anh</p>
              </div>
            </li>
            <!-- friend 14 -->
            <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal"
              data-bs-target="#singleChat4">
              <!-- avatar -->
              <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box"
                data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover"
                data-bs-content='
                          <div>
                            <div class="popover-body d-flex p-2">
                              <div>
                                <img src="https://scontent.fhan6-1.fna.fbcdn.net/v/t39.30808-1/p100x100/240672135_1462671160786128_7693369131086047816_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=7206a8&_nc_ohc=WHdG3Atm0q8AX_zuPIt&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan6-1.fna&oh=00_AT8pPmi-BAXJA7vkVMb1dbQj1B3HNasvXjs4TQCofn8Ajw&oe=61C9796F" alt="avatar" class="pop-avatar"  />
                              </div>
                              <div >
                                <h5>Tony</h5>
                                <div class="d-flex">
                                  <i class="fas fa-user-friends m-1 text-muted"></i>
                                  <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                </div>
                                <div class="d-flex">
                                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                <p>Studies at MIT</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        ' data-bs-html="true">
                <div class="position-relative">
                  <img
                    src="https://scontent.fhan6-1.fna.fbcdn.net/v/t39.30808-1/p100x100/240672135_1462671160786128_7693369131086047816_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=7206a8&_nc_ohc=WHdG3Atm0q8AX_zuPIt&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan6-1.fna&oh=00_AT8pPmi-BAXJA7vkVMb1dbQj1B3HNasvXjs4TQCofn8Ajw&oe=61C9796F"
                    alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                  <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                    <span class="visually-hidden"></span>
                  </span>
                </div>
                <p class="m-0">Thai Binh</p>
              </div>
            </li>
            <!-- friend 15 -->
            <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal"
              data-bs-target="#singleChat5">
              <!-- avatar -->
              <div class="d-flex align-items-center mx-2 chat-avatar" data-bs-custom-class="chat-box"
                data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover"
                data-bs-content='
                      <div>
                        <div class="popover-body d-flex p-2">
                          <div>
                            <img src="https://scontent.fhan6-1.fna.fbcdn.net/v/t39.30808-1/p100x100/263331250_2837336473226087_7078262010395011622_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=7206a8&_nc_ohc=1cYVumzkFlAAX-nKFqe&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan6-1.fna&oh=00_AT9DRzhx3WwJ1nllXzFuQ-hbz6ZddEYH322oQDLuKSQBEw&oe=61C8F50A" alt="avatar" class="pop-avatar"  />
                          </div>
                          <div >
                            <h5>Phu</h5>
                            <div class="d-flex">
                              <i class="fas fa-user-friends m-1 text-muted"></i>
                              <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                            </div>
                            <div class="d-flex">
                            <i class="fas fa-graduation-cap m-1 text-muted"></i>
                            <p>Studies at MIT</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    ' data-bs-html="true">
                <div class="position-relative">
                  <img
                    src="https://scontent.fhan6-1.fna.fbcdn.net/v/t39.30808-1/p100x100/263331250_2837336473226087_7078262010395011622_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=7206a8&_nc_ohc=1cYVumzkFlAAX-nKFqe&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan6-1.fna&oh=00_AT9DRzhx3WwJ1nllXzFuQ-hbz6ZddEYH322oQDLuKSQBEw&oe=61C8F50A"
                    alt="avatar" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                  <span class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      " style="left: 75%">
                    <span class="visually-hidden"></span>
                  </span>
                </div>
                <p class="m-0">Văn</p>
              </div>
            </li>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ================= Chat Icon ================= -->
  <div class="fixed-bottom right-100 p-3" style="z-index: 6; left: initial" type="button" data-bs-toggle="modal"
    data-bs-target="#newChat">
    <i class="fas fa-edit bg-white rounded-circle p-3 shadow"></i>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
  <script src="./main.js"></script>
</body>

</html>