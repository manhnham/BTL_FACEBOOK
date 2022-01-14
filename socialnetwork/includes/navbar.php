<div class="usernav">
    <?php
        $sql2 = "SELECT COUNT(*) AS count FROM friendship 
                 WHERE friendship.user2_id = {$_SESSION['user_id']} AND friendship.friendship_status = 0";
        $query2 = mysqli_query($conn, $sql2);
        $row = mysqli_fetch_assoc($query2);
    ?>
    <div class="row align-items-center">
        <!-- search -->
        <div class="col d-flex align-items-center">
            <!-- logo -->
            <a href="home.php">
                <i class="fab fa-facebook text-primary" style="font-size: 3rem"></i>

            </a>
            <!-- search bar -->
            <div class="input-group ms-2" type="button">

                <!-- mobile -->

                <!-- desktop -->
                <span class="input-group-prepend d-none d-lg-block" id="searchMenu" data-bs-toggle="dropdown"
                    aria-expanded="false" data-bs-auto-close="outside">
                    <div class="input-group-text bg-gray border-0 rounded-pill"
                        style="min-height: 40px; min-width: 230px">
                        <i class="fas fa-search me-2 text-muted"></i>
                        <form method="get" action="search.php" onsubmit="return validateField()">
                            <select name="location" style="display: none;">
                                <option value="names">Names</option>
                                <option value="emails">Emails</option>
                                <option value="hometowns">Hometowns</option>
                                <option value="posts">Posts</option>
                            </select>
                            <input type="text" class="rounded-pill border-0 bg-gray dropdown-item" placeholder="Tìm..."
                                 name="query" id="query">
                                <input type="submit"
                value="Search" id="querybutton" style="display: none;">
                        </form>


                    </div>
                </span>
                <!-- search menu -->
                <ul class="dropdown-menu overflow-auto border-0 shadow p-3" aria-labelledby="searchMenu"
                    style="width: 20em; max-height: 600px">
                    <!-- search input -->
                    <!-- <li>
                <input type="text" class="rounded-pill border-0 bg-gray dropdown-item" placeholder="Tìm..." autofocus="">
              </li> -->
                    <!-- search 1 -->

                </ul>
            </div>
        </div>
        <!-- nav -->
        <div class="col d-none d-xl-flex justify-content-center ">
            <!-- home -->
            <div class="mx-4 nav__btn nav__btn-active">
                <a href="home.php">
                    <button type="button" class="btn px-4">
                        <i class="fas fa-home text-muted fs-4"></i>
                    </button>
                </a>

            </div>

            <!-- friend -->
            <div class="mx-4 nav__btn">
                <a href="requests.php">
                    <button type="button" class="btn px-4">
                        <i class="fas fa-user-friends text-muted fs-4">(<?php echo $row['count'] ?>)</i>
                    </button>
                </a>

            </div>
            <!-- Watch -->
            <!-- <div class="mx-4 nav__btn">
            <button type="button" class="btn px-4">
              <i class="fab fa-youtube text-muted fs-4"></i>
            </button>
          </div> -->
            <!-- Market place -->
            <!-- <div class="mx-4 nav__btn">
            <button type="button" class="btn px-4">
              <i class="fas fa-store text-muted fs-4"></i>
            </button>
          </div> -->

            <!-- group -->
            <div class="mx-4 nav__btn">
                <a href="friends.php">
                    <button type="button" class="btn px-4">
                        <i type="button" class="position-relative fas fa-users text-muted fs-4">
                        </i>
                    </button>
                </a>

            </div>


        </div>
        <!-- menus -->
        <div class="col-3 d-flex align-items-center justify-content-end">
            <!-- avatar -->
            <a href="profile.php" style="text-decoration: none">
                <div class="align-items-center justify-content-center d-none d-xl-flex">
                    <?php 
            // $image = "data/images/profiles/".$_SESSION['user_id'].".jpg";
            // $image2 = "data/images/profiles/".$_SESSION['user_id'].".png";
            // if (file_exists($image)) 
            // echo "<img class='rounded-circle me-2' style='width: 38px; height: 38px; object-fit: cover' src=\"".$image."\" alt=\"error\">";
            // else if (file_exists($image2)) 
            // echo "<img class='rounded-circle me-2' style='width: 38px; height: 38px; object-fit: cover' src=\"".$image2."\" alt=\"error\">";
            
            ?>

                    <p class="m-0" style="color:black">
                        <?php
            
            $query = mysqli_query($conn, "SELECT * FROM `users` WHERE `user_id`='".$_SESSION['user_id']."'");
            $row = mysqli_fetch_assoc($query);
            echo $row['user_firstname']." ".$row['user_lastname'];
            // echo $row['user_firstname'] . ' ' . $row['user_lastname']; 
            ?>
                    </p>

                </div>
            </a>
            <!-- main menu -->

        </div>
        <!-- chat -->

        <!-- Phần thông báo -->

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
            <a href="logout.php">
                <i class="fas fa-sign-out-alt"></i>

            </a>
        </div>
        <!-- secondary menu dd -->
        <ul class="dropdown-menu border-0 shadow p-3" aria-labelledby="secondMenu" style="width: 23em">
            <!-- avatar -->
            <li class="dropdown-item p-1 rounded d-flex" type="button">
                <img src="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-1/cp0/c163.42.291.292a/s80x80/245265801_1782202625303869_6260711662080745064_n.jpg?_nc_cat=102&amp;ccb=1-5&amp;_nc_sid=7206a8&amp;_nc_ohc=FYu6UtXBGq8AX9fq_Ed&amp;_nc_ht=scontent-sin6-2.xx&amp;oh=00_AT_A4VjMPBpTiJpYkWyLb5VKaW3YbZTbc5p8R8fH_bQT8w&amp;oe=61C83115"
                    alt="avatar" class="rounded-circle me-2" style="width: 45px; height: 45px; object-fit: cover">
                <div>
                    <p class="m-0">Anata Manh</p>
                    <p class="m-0 text-muted">Xem trang cá nhân của bạn</p>
                </div>
            </li>
            <hr>
            <!-- feedback -->

            <hr>
            <!-- options -->
            <!-- 1 -->

        </ul>
        <!-- end -->
    </div>

    <div class="globalsearch">
        
    </div>
</div>

<script>
function validateField() {
    var query = document.getElementById("query");
    var button = document.getElementById("querybutton");
    if (query.value == "") {
        query.placeholder = 'Type something!';
        return false;
    }
    return true;
}
</script>