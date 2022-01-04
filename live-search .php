<?php
// Include the database configuration file
include ("config.php");
if (isset($_POST['input'])){
    $input = S_POST['input'];
    $query = "Select * from user_ account where username like '%{$input}%'";
    if(mysqli_num_rows > 0){
?>
<div class="title">
    <p>Tìm kiếm gần đây</p>
    <p>Xoá tất cả</p>
</div>
<?php
    while($row = mysqli_fetch_assoc()){
        $user_id = $row['id'];
        $user_name = $row['username'];
        $avartar = $row['avatar'];
        $email = $row['email'];
?>
<a href="profile.php?id=><?php echo $row['id'];?>">
<div class="searchresult_iteam">
    <img  class ="searchresult_avatar" src="<?php if($row["avatar"]==null){ echo 'images/a'; }else {echo'images/'.$row["avatar"];} ?>" alt="">
    <div class="search_result_name">
        <p class ="username">
            <?php echo $user_name ?>
        </p>
        <p class="useremail>
            <?php echo $email ?>

        </p>

    </div>

</div>
</a>