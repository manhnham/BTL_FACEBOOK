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
    <title>Admin Area | Users</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <?php 
      require "admin-templates/header.php";
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
                <h3 class="panel-title">Users</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                      <div class="col-md-12">
                          <input class="form-control" type="text" placeholder="Filter Users...">
                      </div>
                </div>
                <br>
                <table class="table table-striped table-hover">
                  <tr>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Ngày tham gia</th>
                  </tr>
                <?php 
                      function printArrayList($array)
                      {
                        global $row;
                          echo "<tr>";
                      
                          foreach($array as $k => $v) {
                              if (is_array($v)) {
                                  echo "<td >" . $k . "</td>";
                                  printArrayList($v);
                                  continue;
                              }
                      
                              echo "<td>" . $v . "</td>";
                          }
                          echo '<td><a class="btn btn-danger" href="delete-user.php?id='.$row["user_id"].'">Delete</a></td>';
                          echo "</tr>";
                      }
                      $sql = "SELECT `user_lastname`, `user_email`, `email_verified_at` FROM `users` ORDER BY `email_verified_at` ";
                      $sql2 = "SELECT `user_id` FROM `users` ORDER BY `email_verified_at` ";
                      $query = mysqli_query($conn, $sql);
                      $query2 = mysqli_query($conn, $sql2);
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
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 
</div>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
