<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\finish.css">
    <title>Document</title>
</head>
<body>
    <?php
    # Include connection
    require_once "config.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $targetDirectory = 'assets/people'; // Specify the target directory where the image will be saved
    $targetFile = $targetDirectory . basename($_FILES['image']['name']);
    
    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
        echo 'Image uploaded successfully.';
    } else {
        echo 'Error uploading image.';
    }
    }
    
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
            $targetDirectory = 'assets/people'; // Specify the target directory where the image will be saved
            $profilePicture = $targetDirectory . basename($_FILES['image']['name']);

            if (move_uploaded_file($_FILES['image']['tmp_name'], $profilePicture)) {
                echo 'Image uploaded successfully.';
            } else {
                echo 'Error uploading image.';
            }
        }

        $profile_err = $background_err = $description_err = "";
        $profile = $email = $description = $username = "";

        
        $username = $_SESSION["username"];

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $backgroundPicture = $targetDirectory . basename($_FILES['fileUpload']['name']);
            $description = $_POST['desc'];

            // Insert data into the database
            $sql = "UPDATE users SET profile_pic = '$profilePicture', description = '$description' WHERE username = '$username'";
            
            if (mysqli_query($link, $sql)) {
                echo "Data inserted successfully.";
                echo '<script>window.location.href = "index.php";</script>'; // Redirect to index.php using JavaScript
            } else {
                echo "Error inserting data: " . mysqli_error($link);
            }
            mysqli_close($link);

            
        }

        echo '<form action="" class="finish">';
        echo     '<h3>Finish signing up!</h3><br>';
        echo     '<hr>';
        echo     '<div class="profile">';
        echo         '<h4>Profile picture</h4>';
        echo         '<div class="profile-pic">';
        echo             '<img src="assets\unknown.jpg" alt="" class="empty pr">';
        echo             '<label for="file-upload1" class="upload">Upload profile image</label><br>';
        echo             '<input id="file-upload1" class="hidden" type="file" name="fileUpload" accept="image/*" /><br>';
        echo         '</div>';
        echo     '</div>';
        echo     '<hr>';
        echo     '<div class="bg">';
        echo         '<h4>Background picture</h4>';
        echo         '<div class="bg-pic">';
        echo             '<img src="assets\unknown.jpg" alt="" class="empty bgg">';
        echo             '<label for="file-upload2" class="upload">Upload background image</label><br>';
        echo             '<input id="file-upload2" class="hidden" type="file" name="fileUpload" accept="image/*" /><br>';
        echo         '</div>';
        echo     '</div>';
        echo     '<hr>';
        echo     '<div class="description">';
        echo         '<label for="desc">Add a brief description about yourself</label><br>';
        echo         '<textarea name="desc" id="desc" cols="30" rows="10"></textarea><br>';
        echo     '</div>';
        echo     '<button type="submit" class="btn"><span>Create Account</span></button>';
        echo '</form>';
    ?>
    <script src="js\finish.js"></script>
</body>
</html>
