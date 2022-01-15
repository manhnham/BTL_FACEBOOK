<?php 
  require_once("../functions/functions.php");
  session_start();
  ob_start();
// Check whether user is logged on or not
  require_once("check-admin.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <style>
    
  </style>
  <body>

  <?php 
    require "admin-templates/header.php";
  ?>



    <section id="main">
      <div class="container">
        <div class="row">
          <!-- <div class="col-md-3">
            <div class="list-group">
              <a href="index.html" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="posts.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Posts <span class="badge">33</span></a>
              <a href="users.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge">203</span></a>
            </div>

            <div class="well">
              <div class="progress">
                  <div class="progress-bar" ">
              </div>
            </div>
            <div class="progress">
                <div class="progress-bar" ">
                    40%
            </div>
          </div> -->
          <?php 
            require "admin-templates/navbar.php";
          ?>
            </div>
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Website Overview</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-4">
                  <div class="well dash-box">
                    <h2>
                      <span class="glyphicon glyphicon-user" aria-hidden="true"></span>

                      <?php 
                        $sql = "SELECT COUNT(`user_id`) `how_many_user` FROM `users`";
                        $query = mysqli_query($conn, $sql);
                        $row2 = mysqli_fetch_assoc($query);

                        echo $row2['how_many_user'];
                      ?>
                    </h2>
                    <h4>Người dùng</h4>
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    <?php 
                        $sql = "SELECT COUNT(`post_id`) `how_many_post` FROM `posts`";
                        $query = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($query);

                        echo $row['how_many_post'];
                      ?>
                    
                    
                    </h2>
                    <h4>Bài đăng</h4>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 123</h2>
                    <h4>Lượt xem</h4>
                  </div>
                </div>
              </div>
              </div>

              <!-- Latest Users -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Các thành viên mới</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                      <tr>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Tham gia</th>
                      </tr>
                      
                      <?php 
                      function printArrayList($array)
                      {
                          echo "<tr>";
                      
                          foreach($array as $k => $v) {
                              if (is_array($v)) {
                                  echo "<th>" . $k . "</th>";
                                  printArrayList($v);
                                  continue;
                              }
                      
                              echo "<th>" . $v . "</th>";
                          }
                      
                          echo "</tr>";
                      }
                      $sql = "SELECT `user_lastname`, `user_email`, `email_verified_at` FROM `users` ORDER BY `email_verified_at` ";
                      $query = mysqli_query($conn, $sql);
                      while ($rows = mysqli_fetch_assoc($query)){

                        printArrayList($rows);
                      };
                        
                      ?>
                      
                      
                    </table>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <?php 
      require "admin-templates/footer.php";
    ?>

    <!-- Modals -->

    <!-- Add Page -->
    
</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
