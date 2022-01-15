<?php 
  require_once("../functions/functions.php");
  session_start();
  ob_start();
// Check whether user is logged on or not
  require_once("check-admin.php");
  if(isset($_SESSION["alert"])){
    $message = $_SESSION["alert"];
    unset($_SESSION["alert"]);
    echo '<script>
            alert("'.$message.'");
        </script>
    ';
}
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Posts</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <?php 
      require "admin-templates/header.php"
    ?>

   
    <section id="main">
      <div class="container">
        <div class="row">
          <?php 
            require "admin-templates/navbar.php";
          ?>
            </div>
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Posts</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                      <div class="col-md-12">
                          <input class="form-control" type="text" placeholder="Filter Posts...">
                      </div>
                </div>
                <br>
                <table class="table table-striped table-hover">
                  <tr>
                    <th>Tiêu đề</th>
                    <th>Thời gian đăng</th>
                  </tr>
                <?php 
                      function printArrayList($array)
                      {
                        global $row;

                          echo "<tr>";
                      
                          foreach($array as $k => $v) {
                              if (is_array($v)) {
                                  echo "<th>" . $k . "</th>";
                                  printArrayList($v);
                                  continue;
                              }
                      
                              echo "<th>" . $v . "</th>";
                          }
                          echo '<td><a class="btn btn-danger" href="delete-post.php?id='.$row["post_id"].'">Delete</a></td>';
                          echo "</tr>";
                      }
                      $sql = "SELECT `post_caption`, `post_time` FROM `posts`  ";
                      $sql2 = "SELECT `post_id` FROM `posts` ";
                      $query2 = mysqli_query($conn, $sql2);

                      $query = mysqli_query($conn, $sql);
                      while ($rows = mysqli_fetch_assoc($query)){
                        $row = mysqli_fetch_assoc($query2);

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
