<?php
# Initialize the session
session_start();

# If user is not logged in then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='index.html';" . "</script>";
  exit;
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\feed.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Feed</title>
</head>



<body>
    <div class="out"></div>
    <div id="above">
        <a class="title" href="#">
           Brika
        </a>
    </div>
    <div class="add">
        <div class="exit-button">
            <h2>
                <span class="eng">Add post:</span>
                <span class="fr">Ajouter un article :</span>
                <span class="ger">Beitrag hinzufügen:</span>
                <span class="ita">Aggiungi messaggio:</span>
                <span class="spa">Añadir publicación:</span>
                <span class="port">Adicionar postagem:</span>
                <span class="finn">Lisää viesti:</span>
                <span class="nor">Legg til innlegg:</span>
                <span class="pol">Dodaj wpis:</span>
                <span class="swd">Lägg till inlägg:</span>
                <span class="jp">投稿を追加:</span>
                <span class="kr">게시물 추가:</span>
                <span class="cn">添加帖子：</span>
                <span class="tr">Gönderi ekle:</span>
            </h2>
            <button class="exit"><i class='bx bx-x'></i></button>
        </div>
        <div>
            <h5>
                <span class="eng">Add description:</span>
                <span class="fr">Ajouter une description:</span>
                <span class="ger">Beschreibung hinzufügen:</span>
                <span class="ita">Aggiungi una descrizione:</span>
                <span class="spa">Agregar descripción:</span>
                <span class="port">Adicionar descrição:</span>
                <span class="finn">Lisää kuvaus:</span>
                <span class="nor">Legg til beskrivelse:</span>
                <span class="pol">Dodaj opis:</span>
                <span class="swd">Lägg till beskrivning:</span>
                <span class="jp">説明を追加：</span>
                <span class="kr">설명 추가:</span>
                <span class="cn">添加说明：</span>
                <span class="tr">Açıklama ekle:</span>
            </h5>
            <textarea id="cool" name="description" rows="4" cols="50" placeholder="Description">           
            </textarea>
        </div>  
        <div>
            <h5>
                <span class="eng">Add ingredients:</span>
                <span class="fr">Ajouter des ingrédients:</span>
                <span class="ger">Zutaten hinzufügen:</span>
                <span class="ita">Aggiungere gli ingredienti:</span>
                <span class="spa">Agregar ingredientes:</span>
                <span class="port">Adicionar ingredientes:</span>
                <span class="finn">Lisää ainekset:</span>
                <span class="nor">Tilsett ingredienser:</span>
                <span class="pol">Dodaj składniki:</span>
                <span class="swd">Lägg till ingredienser:</span>
                <span class="jp">材料を追加します。</span>
                <span class="kr">재료 추가:</span>
                <span class="cn">添加成分：</span>
                <span class="tr">Malzemeleri ekleyin:</span>
            </h5>
            <div class="ingredients">
                <input id="ingredient" type="text" placeholder="ingredient" class="box">
                <input id="howMuch" type="text" placeholder="quantity" class="box"> 
                <button class="box add-btn">
                    <span class="eng">Add ingredient</span>
                    <span class="fr">Ajouter l'ingrédient</span>
                    <span class="ger">Zutat hinzufügen</span>
                    <span class="ita">Aggiungi l'ingrediente</span>
                    <span class="spa">Agregar ingrediente</span>
                    <span class="port">Adicionar ingrediente</span>
                    <span class="finn">Lisää ainesosa</span>
                    <span class="nor">Tilsett ingrediens</span>
                    <span class="pol">Dodaj składnik</span>
                    <span class="swd">Tillsätt ingrediens</span>
                    <span class="jp">成分を追加</span>
                    <span class="kr">재료 추가</span>
                    <span class="cn">添加配料</span>
                    <span class="tr">içerik ekle</span>
                </button>
            </div>
            <table id="ingredients">
                <tr>
                    <th>
                        <span class="eng">Ingredients</span>
                        <span class="fr">Ingrédients</span>
                        <span class="ger">Zutaten</span>
                        <span class="ita">ingredienti</span>
                        <span class="spa">Ingredientes</span>
                        <span class="port">Ingredientes</span>
                        <span class="finn">Ainesosat</span>
                        <span class="nor">Ingredienser</span>
                        <span class="pol">Składniki</span>
                        <span class="swd">Ingredienser</span>
                        <span class="jp">材料</span>
                        <span class="kr">재료</span>
                        <span class="cn">原料</span>
                        <span class="tr">İçindekiler</span>
                    </th>
                    <th>
                        <span class="eng">Quantity</span>
                        <span class="fr">Quantité</span>
                        <span class="ger">Menge</span>
                        <span class="ita">Quantità</span>
                        <span class="spa">Cantidad</span>
                        <span class="port">Quantidade</span>
                        <span class="finn">Määrä</span>
                        <span class="nor">Mengde</span>
                        <span class="pol">Ilość</span>
                        <span class="swd">Kvantitet</span>
                        <span class="jp">量</span>
                        <span class="kr">수량</span>
                        <span class="cn">数量</span>
                        <span class="tr">Miktar</span>
                    </th>
                </tr>
                <tr>
                    <td>Sugar</td>
                    <td>200g</td>
                </tr>
                <tr>
                    <td>Flour</td>
                    <td>400g</td>
                </tr>
                <tr>
            </table>
            <h4>
                <span class="eng">Upload files</span>
                <span class="fr">Télécharger des fichiers</span>
                <span class="ger">Daten hochladen</span>
                <span class="ita">Caricare files</span>
                <span class="spa">Subir archivos</span>
                <span class="port">Fazer upload de arquivos</span>
                <span class="finn">Lataa tiedostoja</span>
                <span class="nor">Last opp filer</span>
                <span class="pol">Prześlij pliki</span>
                <span class="swd">Ladda upp filer</span>
                <span class="jp">ファイルのアップロード</span>
                <span class="kr">파일 업로드하다</span>
                <span class="cn">上传文件</span>
                <span class="tr">Dosyaları yükle</span>
            </h4>
            <label for="img">
                <span class="eng">Select files:</span>
                <span class="fr">Sélectionnez des fichiers:</span>
                <span class="ger">Dateien auswählen:</span>
                <span class="ita">Seleziona i file:</span>
                <span class="spa">Selecciona archivos:</span>
                <span class="port">Selecionar arquivos:</span>
                <span class="finn">Valitse tiedostot:</span>
                <span class="nor">Velg filer:</span>
                <span class="pol">Wybierz pliki:</span>
                <span class="swd">Välj filer:</span>
                <span class="jp">ファイルを選択:</span>
                <span class="kr">파일 선택:</span>
                <span class="cn">选择文件：</span>
                <span class="tr">Dosyaları seçin:</span>
            </label>
            <input type="file" name="file-upload" id="file-upload">
            <label for="file-upload" class="custom-upload-button">Upload File</label>
            <br><br>
            <button class="box add-btn">
                <span class="eng">Post</span>
                <span class="fr"></span>
                <span class="ger">posten</span>
                <span class="ita">postare</span>
                <span class="spa">publicar</span>
                <span class="port">postar</span>
                <span class="finn">julkaista</span>
                <span class="nor">poste</span>
                <span class="pol">wysłać</span>
                <span class="swd">posta</span>
                <span class="jp">投稿します</span>
                <span class="kr">게시하다</span>
                <span class="cn">发布</span>
                <span class="tr">göndermek</span>
            </button>
        </div>
    </div>
    <div class="pluss" id="pluss">
        <div class="exit-button">
            <h2></h2>
            <button class="exit"><i class='bx bx-x'></i></button>
        </div>
        <button class="settings">
            <i class='bx bx-cog'></i>
            <span>
                <span class="eng">Settings</span>
                <span class="fr">Paramètres</span>
                <span class="ger">Einstellungen</span>
                <span class="ita">Impostazioni</span>
                <span class="spa">Ajustes</span>
                <span class="port">Configurações</span>
                <span class="finn">asetukset</span>
                <span class="nor">Innstillinger</span>
                <span class="pol">Ustawienia</span>
                <span class="swd">inställningar</span>
                <span class="jp">設定</span>
                <span class="kr">설정</span>
                <span class="cn">设置</span>
                <span class="tr">Ayarlar</span>
            </span>
        </button>
        <button class="mode">
            <i class='bx bx-moon' ></i>
            <span>
                <span class="eng">Change mode</span>
                <span class="fr">Changer le mode</span>
                <span class="ger">Modus ändern</span>
                <span class="ita">Cambia modalità</span>
                <span class="spa">Modo de cambio</span>
                <span class="port">Mudar modo</span>
                <span class="finn">Vaihda tila</span>
                <span class="nor">Endre modus</span>
                <span class="pol">Zmień tryb</span>
                <span class="swd">Ändra läge</span>
                <span class="jp">モード変更</span>
                <span class="kr">모드 변경</span>
                <span class="cn">改变模式</span>
                <span class="tr">Modu değiştir</span>
            </span>
        </button>
        <button class="report">
            <i class='bx bx-error-circle'></i>
            <span>
                <span class="eng">Report a problem</span>
                <span class="fr">Signaler un problème</span>
                <span class="ger">Ein Problem melden</span>
                <span class="ita">Segnala un problema</span>
                <span class="spa">Informar de un problema</span>
                <span class="port">Reportar um problema</span>
                <span class="finn">Ilmoita ongelmasta</span>
                <span class="nor">Rapporter et problem</span>
                <span class="pol">Zgłoś problem</span>
                <span class="swd">Rapportera ett problem</span>
                <span class="jp">問題を報告します</span>
                <span class="kr">문제 신고</span>
                <span class="cn">报告一个问题</span>
                <span class="tr">Problemi şikayet et</span>
            </span>
        </button>
        <a href="logout.php" id="poweroff">
            <button class="deconnexion">
                <i class='bx bx-power-off'></i>
                <span>
                    <span class="eng">Log out</span>
                    <span class="fr">déconnecter</span>
                    <span class="ger">Ausloggen</span>
                    <span class="ita">Disconnettersi</span>
                    <span class="spa">Cerrar sesión</span>
                    <span class="port">Sair</span>
                    <span class="finn">Kirjautua ulos</span>
                    <span class="nor">Logg ut</span>
                    <span class="pol">Wyloguj</span>
                    <span class="swd">Logga ut</span>
                    <span class="jp">ログアウト</span>
                    <span class="kr">로그 아웃</span>
                    <span class="cn">登出</span>
                    <span class="tr">Çıkış Yap</span>
                </span>
            </button>
        </a>
    </div>
    <div class="Notifications">
        
        <div class="exit-button">
            <h2>
                <span class="eng">Notifications</span>
                <span class="fr">Notifications</span>
                <span class="ger">Benachrichtigungen</span>
                <span class="ita">Notifiche</span>
                <span class="spa">Notificaciones</span>
                <span class="port">Notificações</span>
                <span class="finn">Ilmoitukset</span>
                <span class="nor">Varsler</span>
                <span class="pol">Powiadomienia</span>
                <span class="swd">Aviseringar</span>
                <span class="jp">通知</span>
                <span class="kr">알림</span>
                <span class="cn">通知</span>
                <span class="tr">Bildirimler</span>
            </h2>
            <button class="exit"><i class='bx bx-x'></i></button>
        </div>
        <a href="profile.php" class="notif">
            <img class="profile-pic" src="assets/unnamed.png" alt="">
            <span><b>kattous</b> has a new recipe</span>
        </a>
        <a href="profile.php" class="notif">
            <img class="profile-pic" src="assets/unnamed.png" alt="">
            <span><b>kattous far7an</b> has a new recipe</span> 
        </a>
        <a href="profile.php" class="notif">
            <img class="profile-pic" src="assets/unnamed.png" alt="">
            <span><b>kattous farhoud</b> likes your new recipe</span>
        </a>
        <a href="profile.php" class="notif">
            <img class="profile-pic" src="assets/unnamed.png" alt="">
            <span><b>kattous farhoud</b> likes your new recipe</span>
        </a> 
        <a href="profile.php" class="notif">
            <img class="profile-pic" src="assets/unnamed.png" alt="">
            <span><b>kattous farhoud</b> likes your new recipe</span>
        </a>
        <a href="profile.php" class="notif">
            <img class="profile-pic" src="assets/unnamed.png" alt="">
            <span><b>kattous farhoud</b> likes your new recipe</span>
        </a> 
        <a href="profile.php" class="notif">
            <img class="profile-pic" src="assets/unnamed.png" alt="">
            <span><b>kattous farhoud</b> likes your new recipe</span>
        </a> 
        <a href="profile.php" class="notif">
            <img class="profile-pic" src="assets/unnamed.png" alt="">
            <span><b>kattous farhoud</b> likes your new recipe</span>
        </a> 
    </div>
    <div class="search-window">
        <div class="exit-button">
            <h2>
                <span class="eng">Search</span>
                <span class="fr">Recherche</span>
                <span class="ger">Suchen</span>
                <span class="ita">Ricerca</span>
                <span class="spa">Buscar</span>
                <span class="port">Procurar</span>
                <span class="finn">Hae</span>
                <span class="nor">Søk</span>
                <span class="pol">Szukaj</span>
                <span class="swd">Sök</span>
                <span class="jp">検索</span>
                <span class="kr">찾다</span>
                <span class="cn">搜索</span>
                <span class="tr">Aramak</span>
            </h2>
            <button class="exit"><i class='bx bx-x'></i></button>
        </div>
        <div class="bar">
            <input type="text" class="item" placeholder="Search..">
            <button class="search-btn"><i class='bx bx-search-alt-2'></i></button>
        </div>
    </div>

    <div class="leaderboard-window">
        <div class="exit-button">
            <h2>
                <span class="eng">Leaderboard</span>
                <span class="fr">Classement</span>
                <span class="ger">Bestenliste</span>
                <span class="ita">Classifica</span>
                <span class="spa">Tabla de clasificación</span>
                <span class="port">Entre os melhores</span>
                <span class="finn">Tulostaulu</span>
                <span class="nor">Leaderboard</span>
                <span class="pol">Tablica wyników</span>
                <span class="swd">Leaderboard</span>
                <span class="jp">リーダーボード</span>
                <span class="kr">리더보드</span>
                <span class="cn">排行榜</span>
                <span class="tr">Liderler Sıralaması</span>
            </h2>
            <button class="exit"><i class='bx bx-x'></i></button>
        </div>
        <div class="leaderboardd">
            <a href="recipe.html" class="recipe-of-the-week">
                <h2>
                    <span class="eng">Recipe of the week</span>
                    <span class="fr">Recette de la semaine</span>
                    <span class="ger">Rezept der Woche</span>
                    <span class="ita">Ricetta della settimana</span>
                    <span class="spa">receta de la semana</span>
                    <span class="port">receita da semana</span>
                    <span class="finn">Viikon resepti</span>
                    <span class="nor">Ukens oppskrift</span>
                    <span class="pol">Przepis tygodnia</span>
                    <span class="swd">Veckans recept</span>
                    <span class="jp">今週のレシピ</span>
                    <span class="kr">금주의 레시피</span>
                    <span class="cn">本周食谱</span>
                    <span class="tr">haftanın tarifi</span>
                </h2>
                <img src="assets\burger.png" alt="" class="rotw-pic">
                <h2 class="rotw-name">French Baguette</h2>
            </a>
            <div class="leaderboard">
                <h3> La creme de la creme</h3>
                
                <ul class="top10">
                    <li>
                        <a href="profile.php" class="link-to-profile">
                        <div id="first">
                            <img class="profile-pic" src="assets/unnamed.png" alt="">
                            <span>kattous farhoud</span>
                        </div>
                        </a>
                    </li>
                    
                    <li>
                        <a href="profile.php" class="link-to-profile">
                        <div id="second">
                            <img class="profile-pic" src="assets/unnamed.png" alt="">
                            <span>kattous mezyen</span>
                        </div>
                        </a>
                    </li>
                    
                    <li>
                        <a href="profile.php" class="link-to-profile">
                        <div id="third">
                            <img class="profile-pic" src="assets/unnamed.png" alt="">
                            <span>kattous far7an</span>
                        </div>
                        </a>
                    </li>
                    
                    <li>
                    <a href="profile.php" class="link-to-profile">
                        <div>
                            <img class="profile-pic" src="assets/unnamed.png" alt="">
                            <span>kattous ji3an</span>
                        </div>
                    </a>
                    </li>
                    
                    <li>
                    <a href="profile.php" class="link-to-profile">
                        <div>
                            <img class="profile-pic" src="assets/unnamed.png" alt="">
                            <span>kattous chab3an</span>
                        </div>
                    </a>
                    </li>
                    
                    <li>
                    <a href="profile.php" class="link-to-profile">
                        <div>
                            <img class="profile-pic" src="assets/unnamed.png" alt="">
                            <span>kattous chef</span>
                        </div>
                    </a>
                    </li>
                    
                    <li>
                    <a href="profile.php" class="link-to-profile">
                        <div>
                            <img class="profile-pic" src="assets/unnamed.png" alt="">
                            <span>kattous 7azin</span>
                        </div>
                    </a>
                    </li>
                    
                    <li>
                    <a href="profile.php" class="link-to-profile">
                        <div>
                            <img class="profile-pic" src="assets/unnamed.png" alt="">
                            <span>kattous omi sisi</span>
                        </div>
                    </a>
                    </li>
                    
                    <li>
                    <a href="profile.php" class="link-to-profile">
                        <div>
                            <img class="profile-pic" src="assets/unnamed.png" alt="">
                            <span>kattous mda7da7</span>
                        </div>
                    </a>
                    </li>

                    <li>
                    <a href="profile.php" class="link-to-profile">
                        <div>
                            <img class="profile-pic" src="assets/unnamed.png" alt="">
                            <span>kattous</span>
                        </div>
                    </a>
                    </li> 
                </ul>
            </div>
        </div>
    </div>
    
    <div class="containter" >
        <div class="left">
            <a class="title logo" href="#">
               Brika
            </a>
            <div class="buttons">
            
            <a href="profile.php" class="link-to-profile">
            <button class="button profile">
                <div>
                    <?php
                        # Include connection
                        require_once "config.php";
                        $id = $_SESSION["id"];
                        $username = $_SESSION["username"];
                        $_SESSION["loggedin"] = TRUE;
                        
                        $sql="SELECT * FROM users WHERE user_id=".$id;
                        $result = mysqli_query($link, $sql);
                        $row = mysqli_fetch_assoc($result);
                        echo '<img class="profile-pic" src="'.htmlspecialchars($row['profile_pic']).'" alt="">';
                    ?>
                    <span class="left-btn">  Profile</span>
                </div>
            </button>
            </a>

            <button class="button search">
                <div>
                    <i class='bx bx-search-alt-2'></i>
                    <span class="left-btn"> Search</span>
                </div>    
            </button>

            <button class="button ranking" id="ranking">
                <div>
                    <i class='bx bx-trophy' undefined ></i>
                    <span class="left-btn"> Ranking</span>
                </div>    
            </button>
            
            <button class="button home">
                <div>
                    <i class='bx bx-home' ></i>
                    <span class="left-btn"> Home</span>
                </div>
            </button>
            <button class="button notifications">
                <div>
                    <i class='bx bx-bell' ></i>
                    <span class="left-btn"> Notifications</span>
                </div>
            </button>
            <button class="button create">
                <div>
                    <i class='bx bx-plus' ></i>
                    <span class="left-btn"> Create</span>
                </div>
            </button>
            <button class="button more">
                <div>
                    <i class='bx bx-dots-horizontal-rounded' ></i>
                    <span class="left-btn"> More</span>

                </div>
            </button>
            </div>
        </div>   

            
            
        <div class="medium">
            <br>
            <?php
                # Include connection
                require_once "config.php";

                $sql = "SELECT * from posts";
                $result = mysqli_query($link, $sql);

                // Loop through the posts and display them in a feed
                while ($row = mysqli_fetch_assoc($result)) {
                    $sql2 = "SELECT name,profile_pic FROM users where user_id=".htmlspecialchars($row['user_id']);
                    $result2 = mysqli_query($link, $sql2);
                    $row2 = mysqli_fetch_assoc($result2);
                    echo '<div class="post">';
                    echo     '<div class="post-info-top">';
                    echo         '<div class="top-left">';
                    echo             '<a href="profile.php" class="link-to-profile"><div class="author">';
                    echo                 '<img src="'.$row2['profile_pic'].'" alt="couldnt load image" class="author-image">';
                    echo                 '<h3 class="author-name">'.$row2['name'].'</h3>';
                    echo             '</div></a>';
                    echo             '<div class="time">';
                    echo                 '<span> •13h</span>';
                    echo             '</div>';
                    echo         '</div>';
                    echo         '<button class="post-more"><i class="bx bx-dots-horizontal-rounded  menu" ></i></button>';
                    echo     '</div>';
                    echo     '<div class="post-info">';
                    echo         '<div class="images">';
                    echo             '<a href="recipe.html"><img src="'.htmlspecialchars($row['picture']).'"alt="" class="food-pics image1"></a>';
                    echo         '</div>';
                    echo         '<div class="reactions">';
                    echo             '<div class="likes">';
                    echo                 '<button class="heart"><i class="bx bx-heart" style="color:#ff0000"  ></i></button>';
                    echo                 '<p>'.htmlspecialchars($row['num_likes']).'</p>';
                    echo             '</div>';
                    echo         '</div>';

                    echo         '<div class="description">';
                    echo             '<p class="steps">' . nl2br(htmlspecialchars($row['description'])) . '</p>';
                    echo         '</div>';
                    echo     '</div>';
                        
                    echo '</div>';
                    echo '<br>';
                    echo '<hr>';
                    echo '<br>';
                }

            ?>
            
        <div class="right">
            <a href="recipe.html" class="recipe-of-the-week">
                <h2>
                    <span class="eng">Recipe of the week</span>
                    <span class="fr"></span>
                    <span class="ger"></span>
                    <span class="ita"></span>
                    <span class="spa"></span>
                    <span class="port"></span>
                    <span class="finn"></span>
                    <span class="nor"></span>
                    <span class="pol"></span>
                    <span class="swd"></span>
                    <span class="jp"></span>
                    <span class="kr"></span>
                    <span class="cn"></span>
                    <span class="tr"></span>
                </h2>
                <img src="assets\burger.png" alt="" class="rotw-pic">
                <h2 class="rotw-name">French Baguette</h2>
            </a>
            <div class="leaderboard">
                <h3> La creme de la creme</h3>
                
                <ul class="top10">
                    <li>
                        <a href="profile.php" class="link-to-profile">
                        <div id="first">
                            <img class="profile-pic" src="assets/unnamed.png" alt="">
                            <span>kattous farhoud</span>
                        </div>
                        </a>
                    </li>
                    
                    <li>
                        <a href="profile.php" class="link-to-profile">
                        <div id="second">
                            <img class="profile-pic" src="assets/unnamed.png" alt="">
                            <span>kattous mezyen</span>
                        </div>
                        </a>
                    </li>
                    
                    <li>
                        <a href="profile.php" class="link-to-profile">
                        <div id="third">
                            <img class="profile-pic" src="assets/unnamed.png" alt="">
                            <span>kattous far7an</span>
                        </div>
                        </a>
                    </li>
                    
                    <li>
                    <a href="profile.php" class="link-to-profile">
                        <div>
                            <img class="profile-pic" src="assets/unnamed.png" alt="">
                            <span>kattous ji3an</span>
                        </div>
                    </a>
                    </li>
                    
                    <li>
                    <a href="profile.php" class="link-to-profile">
                        <div>
                            <img class="profile-pic" src="assets/unnamed.png" alt="">
                            <span>kattous chab3an</span>
                        </div>
                    </a>
                    </li>
                    
                    <li>
                    <a href="profile.php" class="link-to-profile">
                        <div>
                            <img class="profile-pic" src="assets/unnamed.png" alt="">
                            <span>kattous chef</span>
                        </div>
                    </a>
                    </li>
                    
                    <li>
                    <a href="profile.php" class="link-to-profile">
                        <div>
                            <img class="profile-pic" src="assets/unnamed.png" alt="">
                            <span>kattous 7azin</span>
                        </div>
                    </a>
                    </li>
                    
                    <li>
                    <a href="profile.php" class="link-to-profile">
                        <div>
                            <img class="profile-pic" src="assets/unnamed.png" alt="">
                            <span>kattous omi sisi</span>
                        </div>
                    </a>
                    </li>
                    
                    <li>
                    <a href="profile.php" class="link-to-profile">
                        <div>
                            <img class="profile-pic" src="assets/unnamed.png" alt="">
                            <span>kattous mda7da7</span>
                        </div>
                    </a>
                    </li>

                    <li>
                    <a href="profile.php" class="link-to-profile">
                        <div>
                            <img class="profile-pic" src="assets/unnamed.png" alt="">
                            <span>kattous</span>
                        </div>
                    </a>
                    </li> 
                </ul>
            </div>
        </div>   
    </div>
    <script src="js\feed.js"></script>
    <script src="js\lang.js"></script>
    <script src="js\dark.js"></script>
</body>
</html>
