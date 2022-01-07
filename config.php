<?php
$con = mysqli_connect("localhost","","root","live_search");

if(!$con){
    echo"Kết nối thất bại" .mysqli_conn_error();

}
?>