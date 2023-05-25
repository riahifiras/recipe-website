<?php
error_reporting(0);
# Include connection
require_once "config.php";
session_start();
error_reporting(0);
$username = $_SESSION["username"];
 
$msg = "";
 
// If upload button is clicked ...
if (isset($_POST['upload'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./assets/people/" . $filename;
    $description = $_POST['desc']; // Get the description from the textarea
    $full = "assets/people/".$filename;
    $db = mysqli_connect("localhost", "root", "", "recipe");
 
    // Get all the submitted data from the form
    //$sql = "INSERT INTO users (profile_pic) VALUES ('$filename')";
    $sql = "UPDATE users SET profile_pic='$full', description='$description' WHERE username='$username'";
    // Execute query
    mysqli_query($db, $sql);
    move_uploaded_file($tempname, $folder);
    echo "<script>" . "window.location.href='./index.html';" . "</script>";
}
?>
 
<!DOCTYPE html>
<html>
 
<head>
    <title>Image Upload</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/finish.css">
</head>
 
<body>
    <div class="finish">
    <form class="form" method="POST" action="" enctype="multipart/form-data">
        <h3>Finish signing up!</h3><br>
        <hr>
        <div class="profile">
            <h4>Profile picture</h4>
            <div class="profile-pic">
                <img src="assets/unknown.jpg" alt="" class="empty pr">
                <label for="file-upload1" class="upload">Upload profile image</label><br>
                <input id="file-upload1" class="hidden" type="file" type="file" accept="image/*" name="uploadfile" value="" />
            </div>    
        </div>
        <hr>
             <div class="description">
                 <label for="desc">Add a brief description about yourself</label><br>
                 <textarea name="desc" id="desc" cols="30" rows="10"></textarea><br>
             </div>
        <hr>
        <button class="btn" type="submit" name="upload">Create Account</button>
    </form>
    </div>
    
    <script src="js\lang.js"></script>
    <script src="js\dark.js"></script>
    <script src="js/finish.js"></script>
</body>
 
</html>