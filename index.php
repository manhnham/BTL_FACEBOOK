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
      <p class="w-75 mx-auto fs-4 mx-lg-0">Facebook giúp bạn kết nối và chia sẻ với mọi người trong cuộc sống của bạn.
      </p>
    </div>
    <!-- form card -->
    <div style="max-width: 28rem; width: 100%">
      <!-- login form -->
      <!-- first was form tag -->
      <div class="bg-white shadow rounded p-3 input-group-lg">
        <input type="email" class="form-control my-3" placeholder="Email hoặc số điện thoại" />
        <input type="password" class="form-control my-3" placeholder="Mật khẩu" />
        <a><button class="btn btn-primary w-100 my-3">Đăng nhập</button></a>
        <a href="#" class="text-decoration-none text-center">
          <p>Quên mật khẩu?</p>
        </a>
        <!-- create form -->
        <hr />
        <div class="text-center my-4">
          <button class="btn btn-success btn-lg" type="button" data-bs-toggle="modal" data-bs-target="#createModal">Tạo
            tài khoản mới</button>
        </div>
        <!-- create modal -->
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true"
        >
          <div class="modal-dialog modal-dialog-centered"
         >
            <div class="modal-content"
           >
              <!-- head -->
              <div class="modal-header">
                <div>
                  <h2 class="modal-title" id="exampleModalLabel">Đăng ký</h2>
                  <span class="text-muted fs-7">Nhanh chóng và dễ dàng.</span>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <!-- body -->
              <div class="modal-body" >
                <form action="process.php" method="post">
                  <!-- names -->
                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Họ" name="name" />
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Tên" name="lastName" />
                    </div>
                  </div>
                  <!-- email & pass -->
                  <input type="email" class="form-control my-3" name="email"  placeholder="Số di động hoặc Email"  />
                  <input type="password" class="form-control my-3" name="password" placeholder="Mật khẩu mới"
                  required="" />
                  <!-- DOB -->
                  <div class="row my-3">
                    <span class="text-muted fs-7">Sinh nhật <i class="fas fa-question-circle" data-bs-toggle="popover"
                        type="button"
                        data-bs-content="And here's some amazing content. It's very engaging. Right?"></i></span>
                    <div class="col">
                      <select class="form-select" name="dates">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                      </select>
                    </div>
                    <div class="col">
                      <select class="form-select" name="months">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                         <option value="11">11</option>
                         <option value="12">12</option>
                      </select>
                    </div>
                    <div class="col">
                      <select class="form-select" name="years">
                        <option value="2021">2021</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                      </select>
                    </div>
                  </div>
                  <!-- gender -->
                  <div class="row my-3">
                    <span class="text-muted fs-7">Giới Tính <i class="fas fa-question-circle" data-bs-toggle="popover"
                        type="button"
                        data-bs-content="And here's some amazing content. It's very engaging. Right?"></i></span>
                    <div class="col">
                      <div class="border rounded p-2">
                        <label class="form-check-label" for="flexRadioDefault1">Nữ </label>
                        <input class="form-check-input" type="radio" name="genders" id="flexRadioDefault1" value = "female" />
                      </div>
                    </div>
                    <div class="col">
                      <div class="border rounded p-2">
                        <label class="form-check-label" for="flexRadioDefault1">Nam </label>
                        <input class="form-check-input" type="radio" name="genders" id="flexRadioDefault2" value = "male" />
                      </div>
                    </div>
                    <!-- <div class="col">
                      <div class="border rounded p-2">
                        <label class="form-check-label" for="flexRadioDefault1">Tùy chọn </label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" />
                      </div>
                    </div> -->
                  </div>
                  
                  <!-- disclaimer -->
                  <div>
                    <span class="text-muted fs-7">Bằng cách nhấp vào Đăng ký, bạn đồng ý với Điều khoản, Chính sách dữ
                      liệu và Chính sách cookie của chúng tôi. Bạn có thể nhận được thông báo của chúng tôi qua SMS và
                      hủy nhận bất kỳ lúc nào.</span>
                  </div>
                  <!-- btn -->
                  <div class="text-center mt-3">
                    <button type="submit" class="btn btn-success btn-lg" data-bs-dismiss="modal" name="btnRegister">Đăng ký</button>
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
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
 
</body>

</html>
