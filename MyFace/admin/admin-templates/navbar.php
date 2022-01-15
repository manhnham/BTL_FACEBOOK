<?php 
  require_once("../functions/functions.php");
  ob_start();
// Check whether user is logged on or not
  require_once("check-admin.php");
?>
<div class="col-md-3">
            <div class="list-group">
              <a href="index.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Thống kê
              </a>
              <a href="posts.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Bài đăng <span class="badge"><?php 
                        $sql = "SELECT COUNT(`post_id`) `how_many_post` FROM `posts`";
                        $query = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($query);

                        echo $row['how_many_post'];
                      ?></span></a>
              <a href="users.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Người dùng <span class="badge"><?php 
                        $sql = "SELECT COUNT(`user_id`) `how_many_user` FROM `users`";
                        $query = mysqli_query($conn, $sql);
                        $row2 = mysqli_fetch_assoc($query);

                        echo $row2['how_many_user'];
                      ?></span></a>
            </div>

            <div class="well">
              <div class="progress">
                  <div class="progress-bar" ">
              </div>
            </div>
            <div class="progress">
                <div class="progress-bar" ">
            </div>
          </div>