<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\profile.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    <?php
        # Include connection
        require_once "config.php";

        
        session_start();
        $id = $_SESSION["id"];
        $username = $_SESSION["username"];
        $_SESSION["loggedin"] = TRUE;
        
        $sql="SELECT * FROM users WHERE user_id=".$id;
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);

        
        echo '<div class="background-pic" style="background-image: url(haa.png);"></div>';
        echo '<header class="top">';
        echo '    <img src="'.htmlspecialchars($row['profile_pic']).'" alt="" class="profile-pic">';
        echo '    <h2 class="name">'.htmlspecialchars($row['name']).'</h2>';
        echo '    <p class="description">'.htmlspecialchars($row['description']).'</p>';
        echo '    <h3 class="followers"><span class="follower-count">'.htmlspecialchars($row['follower_count']).'</span>';
        echo '        <span class="eng"> followers</span>';
        echo '        <span class="fr">Abonnées</span>';
        echo '        <span class="ger">Anhänger</span>';
        echo '        <span class="ita">seguaci</span>';
        echo '        <span class="spa">seguidores</span>';
        echo '        <span class="port">seguidores</span>';
        echo '        <span class="finn">seuraajia</span>';
        echo '        <span class="nor">følgere</span>';
        echo '        <span class="pol">Obserwujący</span>';
        echo '        <span class="swd">anhängare</span>';
        echo '        <span class="jp">フォロワー</span>';
        echo '        <span class="kr">추종자</span>';
        echo '        <span class="cn">追随者</span>';
        echo '        <span class="tr">takipçiler</span>';
        echo '    </h3>';
        echo '</header>';
    ?>

    
    
    <div class="posts">
        <h3>Posts</h3>
        <br>
        <?php
        # Include connection
        require_once "config.php";
        $id = $_SESSION["id"];
        $username = $_SESSION["username"];
        $_SESSION["loggedin"] = TRUE;
        $sql = 'SELECT * from posts where user_id='.$id.' ORDER BY post_id DESC';
        $result = mysqli_query($link, $sql);

        

        // Loop through the posts and display them in a feed
        while ($row = mysqli_fetch_assoc($result)) {

            echo '<div class="post">';
            echo '    <div class="post-info">';
            echo '        <div class="images">';
            //echo '            <img src="'.htmlspecialchars($row['picture']).'" alt="" class="food-pics image1">';
            echo '        </div>';
            $ext = pathinfo($row['picture'], PATHINFO_EXTENSION);
            if ($ext == "mp4" || $ext == "avi"){
            echo '    <video style="width=100%;height=auto;aspect-ration=16/9" class="size" controls>';
            echo '    <source class="size" src="'.htmlspecialchars($row['picture']).'" type="video/mp4">';
            echo '    <source class="size" src="'.htmlspecialchars($row['picture']).'" type="video/ogg">';
            echo ' Your browser does not support the video tag.';
            echo '</video>';
            }
                if ($ext == "jpg" || $ext == "png" || $ext == "jpeg") {
                
            echo '<a href="recipe.html">';
            echo '    <img src="'.htmlspecialchars($row['picture']).'"alt="" class="food-pics image1 size">';
            echo '</a>';
                
            }
            echo '        <div class="reactions">';
            echo '            <div class="likes">';
            echo '                <i class="bx bx-heart" style="color:#ff0000"  ></i>';
            echo '                <p>'.htmlspecialchars($row['num_likes']).'</p>';
            echo '            </div>';
            echo '        </div>';
            echo '        <div class="description">';
            echo '            <p class="steps">'.htmlspecialchars($row['description']).'</p>';
            echo '        </div>';
            echo '    </div>';
            echo '</div><br><br>';
        }
        echo '</div>';
            ?>
    <script src="js\lang.js"></script>
    <script src="js\dark.js"></script>
</body>
</html>