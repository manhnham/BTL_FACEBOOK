<?php
// Include the database configuration file
include 'db.php';

// Get images from the database
$result = mysqli_query($db,"SELECT * FROM images ORDER BY uploaded_on DESC");

if(mysqli_num_rows > 0){
    while($row = mysqli_fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>