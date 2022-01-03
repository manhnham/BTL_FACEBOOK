<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <!-- main style -->
    <link rel="stylesheet" href="profile.css" />
</head>

<body class="bg-gray postion-relative">
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
                        <span class="input-group-prepend d-lg-none" id="searchMenu" data-bs-toggle="dropdown"
                            aria-expanded="false" data-bs-auto-close="outside">
                            <div class="input-group-text bg-gray border-0 rounded-circle" style="min-height: 40px">
                                <i class="fas fa-search text-muted"></i>
                            </div>
                        </span>
                        <!-- desktop -->
                        <span class="input-group-prepend d-none d-lg-block" id="searchMenu" data-bs-toggle="dropdown"
                            aria-expanded="false" data-bs-auto-close="outside">
                            <div class="input-group-text bg-gray border-0 rounded-pill"
                                style="min-height: 40px; min-width: 230px">
                                <i class="fas fa-search me-2 text-muted"></i>
                                <p class="m-0 fs-7 text-muted">Tìm kiếm trên Facebook</p>
                            </div>
                        </span>
                        <!-- search menu -->
                        <ul class="dropdown-menu overflow-auto border-0 shadow p-3" aria-labelledby="searchMenu"
                            style="width: 20em; max-height: 600px">
                            <!-- search input -->
                            <li>
                                <input type="text" class="rounded-pill border-0 bg-gray dropdown-item"
                                    placeholder="Tìm..." autofocus />
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
                                        <img src="https://scontent.fhan6-1.fna.fbcdn.net/v/t1.6435-1/p100x100/74465629_1917275761751079_3827880308250771456_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=7206a8&_nc_ohc=YQTmOMaD0e4AX_UqDji&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan6-1.fna&oh=00_AT9I9hS8Z6mSCiOvZ8pvvkf_KkRTnCUJx1lJiu31gb4K6g&oe=61EA0D0D"
                                            alt="avatar" class="rounded-circle me-2"
                                            style="width: 35px; height: 35px; object-fit: cover" />
                                        <p class="m-0">Nam</p>
                                    </div>
                                    <button type="button" class="btn-close p-0 m-0" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
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
                                        <img src="https://scontent.fhan6-1.fna.fbcdn.net/v/t1.6435-1/p100x100/138624825_1909673372517303_3002946972548105971_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=7206a8&_nc_ohc=8oeWXafwdwwAX9Bs43z&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan6-1.fna&oh=00_AT9HsaIoMawnmFKXmFoikggCHMkc2_yRSkVz08xPEDIvng&oe=61EA95FF"
                                            alt="avatar" class="rounded-circle me-2"
                                            style="width: 35px; height: 35px; object-fit: cover" />
                                        <p class="m-0">Minh</p>
                                    </div>
                                    <button type="button" class="btn-close p-0 m-0" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
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
                                        <img src="https://scontent.fhan6-1.fna.fbcdn.net/v/t39.30808-1/p100x100/265608411_1287766848365078_2044468679411445333_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=7206a8&_nc_ohc=3KR09bARupwAX_qdyus&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.fhan6-1.fna&oh=00_AT-YiME78wbJfbbWwBV-ZD2xes8dmtM88xBBAdzAxBmFmw&oe=61C85482"
                                            alt="avatar" class="rounded-circle me-2"
                                            style="width: 35px; height: 35px; object-fit: cover" />
                                        <p class="m-0">Duy</p>
                                    </div>
                                    <button type="button" class="btn-close p-0 m-0" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
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
                    <a href="profile.php" style="text-decoration: none">
                    <div class="align-items-center justify-content-center d-none d-xl-flex">
                      
                            <img src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-1/cp0/c163.42.291.292a/s80x80/245265801_1782202625303869_6260711662080745064_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=7206a8&_nc_ohc=FYu6UtXBGq8AX9fq_Ed&_nc_ht=scontent-sin6-2.xx&oh=00_AT_A4VjMPBpTiJpYkWyLb5VKaW3YbZTbc5p8R8fH_bQT8w&oe=61C83115"
                                class="rounded-circle me-2" alt="avatar"
                                style="width: 38px; height: 38px; object-fit: cover" />
                            <p class="m-0" style="color:black">Anata Manh</p>

                    </div>
                    </a>
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
                                <div class="input-group-text bg-gray border-0 rounded-pill"
                                    style="min-height: 40px; min-width: 230px">
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
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/9-o1e6LN_TX.png"
                                            alt="icon from fb" class="rounded-circle"
                                            style="width: 48px; height: 48px; object-fit: cover" />
                                    </div>
                                    <div>
                                        <p class="m-0">Sự kiện</p>
                                        <span class="fs-7 text-muted">Tổ chức hoặc tìm sự kiện cùng những hoạt động khác
                                            trên mạng và ở
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
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/tSXYIzZlfrS.png"
                                            alt="icon from fb" class="rounded-circle"
                                            style="width: 48px; height: 48px; object-fit: cover" />
                                    </div>
                                    <div>
                                        <p class="m-0">Bạn bè</p>
                                        <span class="fs-7 text-muted">Tìm kiếm bạn bè hoặc những người bạn có thể
                                            biết</span>
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
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/Im_0d7HFH4n.png"
                                            alt="icon from fb" class="rounded-circle"
                                            style="width: 48px; height: 48px; object-fit: cover" />
                                    </div>
                                    <div>
                                        <p class="m-0">Nhóm</p>
                                        <span class="fs-7 text-muted">Kết nối với những người cùng chung sở
                                            thích.</span>
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
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yo/r/hLkEFzsCyXC.png"
                                            alt="icon from fb" class="rounded-circle"
                                            style="width: 48px; height: 48px; object-fit: cover" />
                                    </div>
                                    <div>
                                        <p class="m-0">Bảng tin</p>
                                        <span class="fs-7 text-muted">Xem bài viết phù hợp của những người và Trang bạn
                                            theo dõi.</span>
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
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/0gH3vbvr8Ee.png"
                                            alt="icon from fb" class="rounded-circle"
                                            style="width: 48px; height: 48px; object-fit: cover" />
                                    </div>
                                    <div>
                                        <p class="m-0">Trang</p>
                                        <span class="fs-7 text-muted">Khám phá và kết nối với các doanh nghiệp trên
                                            Facebook.</span>
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
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y1/r/uGfRd5KPhOI.png"
                                            alt="icon from fb" class="rounded-circle"
                                            style="width: 48px; height: 48px; object-fit: cover" />
                                    </div>
                                    <div>
                                        <p class="m-0">Video chơi game</p>
                                        <span class="fs-7 text-muted">Xem,kết nối với những game và người phát trực tiếp
                                            mà bạn yêu
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
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yn/r/XEWvxf1LQAG.png"
                                            alt="icon from fb" class="rounded-circle"
                                            style="width: 48px; height: 48px; object-fit: cover" />
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
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yG/r/A1HlI2LVo58.png"
                                            alt="icon from fb" class="rounded-circle"
                                            style="width: 48px; height: 48px; object-fit: cover" />
                                    </div>
                                    <div>
                                        <p class="m-0">Watch</p>
                                        <span class="fs-7 text-muted">Đích đến của video phù hợp với sở thích và quan hệ
                                            kết nối của
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
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yy/r/xH4w-lk44we.png"
                                            alt="icon from fb" class="rounded-circle"
                                            style="width: 48px; height: 48px; object-fit: cover" />
                                    </div>
                                    <div>
                                        <p class="m-0">Facebook Pay</p>
                                        <span class="fs-7 text-muted">Một cách dễ dàng,bảo mật để thanh toán trên các
                                            ứng dụng bạn đang
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
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/ys/r/9BDqQflVfXI.png"
                                            alt="icon from fb" class="rounded-circle"
                                            style="width: 48px; height: 48px; object-fit: cover" />
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
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yI/r/WcCzeboYevF.png"
                                            alt="icon from fb" class="rounded-circle"
                                            style="width: 48px; height: 48px; object-fit: cover" />
                                    </div>
                                    <div>
                                        <p class="m-0">Hoạt động quảng cáo gần đây</p>
                                        <span class="fs-7 text-muted">Xem toàn bộ quảng cáo mà bạn đã tương tác trên
                                            Facebook.</span>
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
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y7/r/AYj2837MmgX.png"
                                            alt="icon from fb" class="rounded-circle"
                                            style="width: 48px; height: 48px; object-fit: cover" />
                                    </div>
                                    <div>
                                        <p class="m-0">Kỷ niệm</p>
                                        <span class="fs-7 text-muted">Lướt xem ảnh,video và bài viết cũ của bạn trên
                                            Facebook.</span>
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
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yr/r/2uPlV4oORjU.png"
                                            alt="icon from fb" class="rounded-circle"
                                            style="width: 48px; height: 48px; object-fit: cover" />
                                    </div>
                                    <div>
                                        <p class="m-0">Đã lưu</p>
                                        <span class="fs-7 text-muted">Tìm bài viết,ảnh và video mà bạn đã lưu để xem
                                            sau.</span>
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
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/kULMG0uFcEQ.png"
                                            alt="icon from fb" class="rounded-circle"
                                            style="width: 48px; height: 48px; object-fit: cover" />
                                    </div>
                                    <div>
                                        <p class="m-0">Thời tiết</p>
                                        <span class="fs-7 text-muted">Kiểm tra dự báo thời tiết tại địa phương và đăng
                                            ký nhận thông báo về
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
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/qR88GIDM38e.png"
                                            alt="icon from fb" class="rounded-circle"
                                            style="width: 48px; height: 48px; object-fit: cover" />
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
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yJ/r/EWFR9xI64Mg.png"
                                            alt="icon from fb" class="rounded-circle"
                                            style="width: 48px; height: 48px; object-fit: cover" />
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
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/tKwWVioirmj.png"
                                            alt="icon from fb" class="rounded-circle"
                                            style="width: 48px; height: 48px; object-fit: cover" />
                                    </div>
                                    <div>
                                        <p class="m-0">Trung tâm khoa học khí hậu
                                        </p>
                                        <span class="fs-7 text-muted">Tìm hiểu về vấn đề biến đổi khí hậu và tác động
                                            của hiện tượng
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
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yc/r/y7p-dcTnGV_.png"
                                            alt="icon from fb" class="rounded-circle"
                                            style="width: 48px; height: 48px; object-fit: cover" />
                                    </div>
                                    <div>
                                        <p class="m-0">Ứng phó khẩn cấp
                                        </p>
                                        <span class="fs-7 text-muted">Tìm thông tin mới nhất về các cuộc khủng hoảng
                                            diễn ra trên thế
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
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/A2tHTy6ibgT.png"
                                            alt="icon from fb" class="rounded-circle"
                                            style="width: 48px; height: 48px; object-fit: cover" />
                                    </div>
                                    <div>
                                        <p class="m-0">Chiến dịch gây quỹ
                                        </p>
                                        <span class="fs-7 text-muted">Quyên góp và gây quỹ cho tổ chức phi lợi nhuận và
                                            mục đích cá
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
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/YF1bztyGuX-.png"
                                            alt="icon from fb" class="rounded-circle"
                                            style="width: 48px; height: 48px; object-fit: cover" />
                                    </div>
                                    <div>
                                        <p class="m-0">Messenger</p>
                                        <span class="fs-7 text-muted">Chat ngay tức thì với bạn bè và những người đã kết
                                            nối.</span>
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
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y2/r/HBcx-giUZ2Y.png"
                                            alt="icon from fb" class="rounded-circle"
                                            style="width: 48px; height: 48px; object-fit: cover" />
                                    </div>
                                    <div>
                                        <p class="m-0">Messenger nhí</p>
                                        <span class="fs-7 text-muted">Cho phép bé nhắn tin với bạn thân và gia
                                            đình.</span>
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
                                <i class="fas fa-ellipsis-h text-muted mx-2" type="button"
                                    data-bs-toggle="dropdown"></i>
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
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckChecked" checked />
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
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckChecked" checked />
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
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckChecked" checked />
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
                        <div class="input-group-text bg-gray border-0 rounded-pill"
                            style="min-height: 40px; min-width: 230px">
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
                                    <img src="https://scontent.xx.fbcdn.net/v/t1.6435-1/p100x100/126067354_2908745192698577_8146764994838893083_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=dbb9e7&_nc_ohc=dcl8wecFz3QAX8r0NQ5&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=00_AT-u5oID5ZG09RD1ZcRp0I4h2sdKiDOE2xh0OoynQiAg_A&oe=61E72345"
                                        alt="avatar" class="rounded-circle"
                                        style="width: 58px; height: 58px; object-fit: cover" />
                                </div>
                                <div>
                                    <p class="fs-7 m-0">Dũng</p>
                                    <span class="fs-7 text-muted">alo &#8226; 5h</span>
                                </div>
                            </div>
                            <!-- small avatar -->
                            <div class="p-2">
                                <img src="https://scontent.xx.fbcdn.net/v/t1.6435-1/p100x100/126067354_2908745192698577_8146764994838893083_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=dbb9e7&_nc_ohc=dcl8wecFz3QAX8r0NQ5&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=00_AT-u5oID5ZG09RD1ZcRp0I4h2sdKiDOE2xh0OoynQiAg_A&oe=61E72345"
                                    alt="avatar" class="rounded-circle"
                                    style="width: 15px; height: 15px; object-fit: cover" />
                            </div>
                        </div>
                    </li>
                    <!-- message 2 -->
                    <li class="my-2 p-1" type="button" data-bs-toggle="modal" data-bs-target="#singleChat2">
                        <div class="d-flex align-items-center justify-content-between">
                            <!-- big avatar -->
                            <div class="d-flex align-items-center justify-content-evenly">
                                <div class="p-2">
                                    <img src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-1/p100x100/255439613_1193874801134654_5404726746443343278_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=7206a8&_nc_ohc=SmILFkcxNtsAX8X-0NW&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-2.xx&oh=00_AT8YuJCiy8fTs_Mx_nhCBRWo27CJ__Y--035YFXkX_PKrg&oe=61C87A14"
                                        alt="avatar" class="rounded-circle"
                                        style="width: 58px; height: 58px; object-fit: cover" />
                                </div>
                                <div>
                                    <p class="fs-7 m-0">
                                        Tú</p>
                                    <span class="fs-7 text-muted">Dậy học &#8226; 2m</span>

                                </div>
                            </div>
                            <!-- small avatar -->
                            <div class="p-2">
                                <img src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-1/p100x100/255439613_1193874801134654_5404726746443343278_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=7206a8&_nc_ohc=SmILFkcxNtsAX8X-0NW&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-2.xx&oh=00_AT8YuJCiy8fTs_Mx_nhCBRWo27CJ__Y--035YFXkX_PKrg&oe=61C87A14"
                                    alt="avatar" class="rounded-circle"
                                    style="width: 15px; height: 15px; object-fit: cover" />
                            </div>
                        </div>
                    </li>
                    <!-- message 3 -->
                    <li class="my-2 p-1" type="button" data-bs-toggle="modal" data-bs-target="#singleChat3">
                        <div class="d-flex align-items-center justify-content-between">
                            <!-- big avatar -->
                            <div class="d-flex align-items-center justify-content-evenly">
                                <div class="p-2">
                                    <img src="https://scontent-sin6-4.xx.fbcdn.net/v/t1.6435-1/p100x100/199903032_501572354384297_5620014206431070850_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=7206a8&_nc_ohc=vsYDi_3aFFIAX8qhC9_&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-4.xx&oh=00_AT9obZ1uA-LmlaeUk6JUGpE1I5Lr_OnEQQpbrVFt1hp5zA&oe=61E71BFF"
                                        alt="avatar" class="rounded-circle"
                                        style="width: 58px; height: 58px; object-fit: cover" />
                                </div>
                                <div>
                                    <p class="fs-7 m-0">Vũ Nguyễn</p>
                                    <span class="fs-7 text-muted">Mai 8h nhé &#8226; 9h</span>
                                </div>
                            </div>
                            <!-- small avatar -->
                            <div class="p-2">
                                <img src="https://scontent-sin6-4.xx.fbcdn.net/v/t1.6435-1/p100x100/199903032_501572354384297_5620014206431070850_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=7206a8&_nc_ohc=vsYDi_3aFFIAX8qhC9_&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-4.xx&oh=00_AT9obZ1uA-LmlaeUk6JUGpE1I5Lr_OnEQQpbrVFt1hp5zA&oe=61E71BFF"
                                    alt="avatar" class="rounded-circle"
                                    style="width: 15px; height: 15px; object-fit: cover" />
                            </div>
                        </div>
                    </li>
                    <!-- message 4 -->
                    <li class="my-2 p-1" type="button" data-bs-toggle="modal" data-bs-target="#singleChat4">
                        <div class="d-flex align-items-center justify-content-between">
                            <!-- big avatar -->
                            <div class="d-flex align-items-center justify-content-evenly">
                                <div class="p-2">
                                    <img src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-1/p100x100/233871925_816119029274130_5731177625957293562_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=7206a8&_nc_ohc=b5ubUsprwGgAX-Hsh93&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-2.xx&oh=00_AT-pDG0Cld8_ZhMjnYFDhz2fKLtN3k9nyLm7iuL4JsegCg&oe=61C71FC1"
                                        alt="avatar" class="rounded-circle"
                                        style="width: 58px; height: 58px; object-fit: cover" />
                                </div>
                                <div>
                                    <p class="fs-7 m-0">Khải Phạm</p>
                                    <span class="fs-7 text-muted">Chess đê &#8226; 10h</span>
                                </div>
                            </div>
                            <!-- small avatar -->
                            <div class="p-2">
                                <img src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-1/p100x100/233871925_816119029274130_5731177625957293562_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=7206a8&_nc_ohc=b5ubUsprwGgAX-Hsh93&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-2.xx&oh=00_AT-pDG0Cld8_ZhMjnYFDhz2fKLtN3k9nyLm7iuL4JsegCg&oe=61C71FC1"
                                    alt="avatar" class="rounded-circle"
                                    style="width: 15px; height: 15px; object-fit: cover" />
                            </div>
                        </div>
                    </li>
                    <!-- message 5 -->
                    <li class="my-2 p-1" type="button" data-bs-toggle="modal" data-bs-target="#singleChat5">
                        <div class="d-flex align-items-center justify-content-between">
                            <!-- big avatar -->
                            <div class="d-flex align-items-center justify-content-evenly">
                                <div class="p-2">
                                    <img src="https://scontent.xx.fbcdn.net/v/t1.30497-1/p100x100/143086968_2856368904622192_1959732218791162458_n.png?_nc_cat=1&ccb=1-5&_nc_sid=dbb9e7&_nc_ohc=b6VoV_Mga9IAX-B89tb&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=00_AT-XRu0ke-fO8W-Lb4HJAr7lS6n7RBfcXt67PXCJ7WCRVQ&oe=61E8B3D1"
                                        alt="avatar" class="rounded-circle"
                                        style="width: 58px; height: 58px; object-fit: cover" />
                                </div>
                                <div>
                                    <p class="fs-7 m-0">Phu</p>
                                    <span class="fs-7 text-muted">Chiều học nhé &#8226; 7d</span>
                                </div>
                            </div>
                            <!-- small avatar -->
                            <div class="p-2">
                                <img src="https://scontent.xx.fbcdn.net/v/t1.30497-1/p100x100/143086968_2856368904622192_1959732218791162458_n.png?_nc_cat=1&ccb=1-5&_nc_sid=dbb9e7&_nc_ohc=b6VoV_Mga9IAX-B89tb&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=00_AT-XRu0ke-fO8W-Lb4HJAr7lS6n7RBfcXt67PXCJ7WCRVQ&oe=61E8B3D1"
                                    alt="avatar" class="rounded-circle"
                                    style="width: 15px; height: 15px; object-fit: cover" />
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
                                    <img src="https://scontent.xx.fbcdn.net/v/t1.30497-1/p100x100/143086968_2856368904622192_1959732218791162458_n.png?_nc_cat=1&ccb=1-5&_nc_sid=dbb9e7&_nc_ohc=b6VoV_Mga9IAX-B89tb&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=00_AT-XRu0ke-fO8W-Lb4HJAr7lS6n7RBfcXt67PXCJ7WCRVQ&oe=61E8B3D1"
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
                                    <img src="https://scontent.xx.fbcdn.net/v/t1.6435-1/p100x100/126067354_2908745192698577_8146764994838893083_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=dbb9e7&_nc_ohc=dcl8wecFz3QAX8r0NQ5&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=00_AT-u5oID5ZG09RD1ZcRp0I4h2sdKiDOE2xh0OoynQiAg_A&oe=61E72345"
                                        alt="avatar" class="rounded-circle"
                                        style="width: 58px; height: 58px; object-fit: cover" />
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
                                    <img src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-1/p100x100/255439613_1193874801134654_5404726746443343278_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=7206a8&_nc_ohc=SmILFkcxNtsAX8X-0NW&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-2.xx&oh=00_AT8YuJCiy8fTs_Mx_nhCBRWo27CJ__Y--035YFXkX_PKrg&oe=61C87A14"
                                        alt="avatar" class="rounded-circle"
                                        style="width: 58px; height: 58px; object-fit: cover" />
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
                                    <img src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-1/p100x100/233871925_816119029274130_5731177625957293562_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=7206a8&_nc_ohc=b5ubUsprwGgAX-Hsh93&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-2.xx&oh=00_AT-pDG0Cld8_ZhMjnYFDhz2fKLtN3k9nyLm7iuL4JsegCg&oe=61C71FC1"
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
                                    <img src="https://scontent-sin6-4.xx.fbcdn.net/v/t1.6435-1/p100x100/199903032_501572354384297_5620014206431070850_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=7206a8&_nc_ohc=vsYDi_3aFFIAX8qhC9_&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent-sin6-4.xx&oh=00_AT9obZ1uA-LmlaeUk6JUGpE1I5Lr_OnEQQpbrVFt1hp5zA&oe=61E71BFF"
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
                        <img src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-1/cp0/c163.42.291.292a/s80x80/245265801_1782202625303869_6260711662080745064_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=7206a8&_nc_ohc=FYu6UtXBGq8AX9fq_Ed&_nc_ht=scontent-sin6-2.xx&oh=00_AT_A4VjMPBpTiJpYkWyLb5VKaW3YbZTbc5p8R8fH_bQT8w&oe=61C83115"
                            alt="avatar" class="rounded-circle me-2"
                            style="width: 45px; height: 45px; object-fit: cover" />
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
    <!--main-->
    <div class="container">
        <div class="profile-page tx-13">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="profile-header">
                        <div class="cover">
                            <div class="gray-shade"></div>
                            <figure>
                                <img src="https://bootdey.com/img/Content/bg1.jpg" class="img-fluid"
                                    alt="profile cover">
                            </figure>
                            <div class="cover-body d-flex justify-content-between align-items-center">

                                <div>

                                    <img class="profile-pic" src="https://bootdey.com/img/Content/avatar/avatar6.png"
                                        alt="profile">
                                    <span class="profile-name">Anata Manh</span>
                                    <form action="upload.php" method="post" enctype="multipart/form-data">
                                       
                                        <input type="file" name="myfile">
                                        <input type="submit" name="sbmUpload" value="Upload">
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="header-links">
                            <ul class="links d-flex align-items-center mt-3 mt-md-0">
                           
                                <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-image mr-1 icon-md">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                        <polyline points="21 15 16 10 5 21"></polyline>
                                    </svg>
                                    <a class="pt-1px d-none d-md-block" href="#">Photos</a> 
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row profile-body">
                <!-- left wrapper start -->
                <div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
                    <div class="card rounded">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="card-title mb-0">Giới thiệu</h6>
                            
                            </div>
                            <p>Rất vui được làm quen với mọi người.</p>
                            <div class="mt-3">
                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Sống tại:</label>
                                <p class="text-muted">Hà Nội</p>
                            </div>
                            <div class="mt-3">
                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Đến từ:</label>
                                <p class="text-muted">Hà Nội</p>
                            </div>
                            <div class="mt-3">
                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Trạng thái:</label>
                                <p class="text-muted">Độc thân</p>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <!-- left wrapper end -->
                <!-- middle wrapper start -->
                <div class="col-md-8 col-xl-6 middle-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="card rounded">
                                <div class="card-header">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="img-xs rounded-circle"
                                                src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                                            <div class="ml-2">
                                                <p>Mike Popescu</p>
                                                <p class="tx-11 text-muted">1 min ago</p>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="mb-3 tx-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Accusamus minima delectus nemo unde quae recusandae assumenda.</p>
                                    <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar6.png"
                                        alt="">
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex post-actions">
                                        <a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-heart icon-md">
                                                <path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                </path>
                                            </svg>
                                            <p class="d-none d-md-block ml-2">Like</p>
                                        </a>
                                        <a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-message-square icon-md">
                                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                                </path>
                                            </svg>
                                            <p class="d-none d-md-block ml-2">Comment</p>
                                        </a>
                                        <a href="javascript:;" class="d-flex align-items-center text-muted">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-share icon-md">
                                                <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                                                <polyline points="16 6 12 2 8 6"></polyline>
                                                <line x1="12" y1="2" x2="12" y2="15"></line>
                                            </svg>
                                            <p class="d-none d-md-block ml-2">Share</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card rounded">
                                <div class="card-header">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="img-xs rounded-circle"
                                                src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                                            <div class="ml-2">
                                                <p>Mike Popescu</p>
                                                <p class="tx-11 text-muted">5 min ago</p>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="dropdownMenuButton3"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-more-horizontal icon-lg pb-3px">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="19" cy="12" r="1"></circle>
                                                    <circle cx="5" cy="12" r="1"></circle>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-meh icon-sm mr-2">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <line x1="8" y1="15" x2="16" y2="15"></line>
                                                        <line x1="9" y1="9" x2="9.01" y2="9"></line>
                                                        <line x1="15" y1="9" x2="15.01" y2="9"></line>
                                                    </svg> <span class="">Unfollow</span></a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-corner-right-up icon-sm mr-2">
                                                        <polyline points="10 9 15 4 20 9"></polyline>
                                                        <path d="M4 20h7a4 4 0 0 0 4-4V4"></path>
                                                    </svg> <span class="">Go to post</span></a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-share-2 icon-sm mr-2">
                                                        <circle cx="18" cy="5" r="3"></circle>
                                                        <circle cx="6" cy="12" r="3"></circle>
                                                        <circle cx="18" cy="19" r="3"></circle>
                                                        <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                                        <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                                    </svg> <span class="">Share</span></a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-copy icon-sm mr-2">
                                                        <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                                        <path
                                                            d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1">
                                                        </path>
                                                    </svg> <span class="">Copy link</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="mb-3 tx-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <img class="img-fluid" src="../../../assets/images/sample2.jpg" alt="">
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex post-actions">
                                        <a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-heart icon-md">
                                                <path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                </path>
                                            </svg>
                                            <p class="d-none d-md-block ml-2">Thích</p>
                                        </a>
                                        <a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-message-square icon-md">
                                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                                </path>
                                            </svg>
                                            <p class="d-none d-md-block ml-2">Bình luận</p>
                                        </a>
                                        <a href="javascript:;" class="d-flex align-items-center text-muted">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-share icon-md">
                                                <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                                                <polyline points="16 6 12 2 8 6"></polyline>
                                                <line x1="12" y1="2" x2="12" y2="15"></line>
                                            </svg>
                                            <p class="d-none d-md-block ml-2">Chia sẻ</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- middle wrapper end -->
                <!-- right wrapper start -->
                <div class="d-none d-xl-block col-xl-3 right-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="card rounded">
                                <div class="card-body">
                                    <h6 class="card-title">Kho Ảnh</h6>
                                    <div class="latest-photos">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <figure>
                                                    <img class="img-fluid"
                                                        src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="col-md-4">
                                                <figure>
                                                    <img class="img-fluid"
                                                        src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="col-md-4">
                                                <figure>
                                                    <img class="img-fluid"
                                                        src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="col-md-4">
                                                <figure>
                                                    <img class="img-fluid"
                                                        src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="col-md-4">
                                                <figure>
                                                    <img class="img-fluid"
                                                        src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="col-md-4">
                                                <figure>
                                                    <img class="img-fluid"
                                                        src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="col-md-4">
                                                <figure class="mb-0">
                                                    <img class="img-fluid"
                                                        src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="col-md-4">
                                                <figure class="mb-0">
                                                    <img class="img-fluid"
                                                        src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="col-md-4">
                                                <figure class="mb-0">
                                                    <img class="img-fluid"
                                                        src="https://bootdey.com/img/Content/avatar/avatar9.png" alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- right wrapper end -->
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>