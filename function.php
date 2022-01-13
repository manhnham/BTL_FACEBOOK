<?php
function Get_user_avatar($user_id, $connect)
{
    $query = "
    SELECT file_name FROM users, db_images
    WHERE users.id = '".$user_id."' AND db_images.id = users.avatar_id
    ";

    $statement = $connect->prepare($query);

    $statement->execute();

    $result = $statement->fetchAll();

    foreach($result as $row)
    {
        return '<img src="photo/'.$row['file_name'].'" width="25" class="img-circle" />';
    }
}