<?php

$query = mysqli_query($conn, $sql);
if(!$query){
    echo mysqli_error($conn);
}
$width = '168px';
$height = '168px';
if(mysqli_num_rows($query) == 0){
    echo '<div class="userquery">';
    echo 'Không tim thấy người dùng hay bài viết nào với từ khóa: ' . $key;
    echo '<br><br>';
    echo '</div>';
} else {
    while($row = mysqli_fetch_assoc($query)){
        echo '<div class="userquery">';
        include 'includes/profile_picture.php';
        echo '<br>';
        echo '<a class="profilelink" href="profile.php?id=' . $row['user_id'] .'">' . $row['user_firstname'] . ' ' . $row['user_lastname'] . '<a>';
        echo '</div>';
        echo '<br>';
    }
}


?>