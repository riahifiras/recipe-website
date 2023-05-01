<?php
# Include connection
require_once "./config.php";

# Define variables and initialize with empty values
$username_err = $email_err = $password_err = $name_err ="";
$username = $email = $password = $name ="";

# Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  # Validate username
  if (empty(trim($_POST["username"]))) {
    $username_err = "Please enter a username.";
  } else {
    $username = trim($_POST["username"]);
    if (!ctype_alnum(str_replace(array("@", "-", "_"), "", $username))) {
      $username_err = "Username can only contain letters, numbers and symbols like '@', '_', or '-'.";
    } else {
      # Prepare a select statement
      $sql = "SELECT id FROM users WHERE username = ?";

      if ($stmt = mysqli_prepare($link, $sql)) {
        # Bind variables to the statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_username);

        # Set parameters
        $param_username = $username;

        # Execute the prepared statement 
        if (mysqli_stmt_execute($stmt)) {
          # Store result
          mysqli_stmt_store_result($stmt);

          # Check if username is already registered
          if (mysqli_stmt_num_rows($stmt) == 1) {
            $username_err = "This username is already registered.";
          }
        } else {
          echo "<script>" . "alert('Oops! Something went wrong. Please try again later.')" . "</script>";
        }

        # Close statement 
        mysqli_stmt_close($stmt);
      }
    }
  }

  if (empty(trim($_POST["name"]))) {
    $name_err = "Please enter a name.";
  } else {
    $name = trim($_POST["name"]);
    if (!ctype_alnum(str_replace(array("@", "-", "_"), "", $name))) {
      $name_err = "name can only contain letters, numbers and symbols like '@', '_', or '-'.";
    } else {
      # Prepare a select statement
      $sql = "SELECT id FROM users WHERE name = ?";

      if ($stmt = mysqli_prepare($link, $sql)) {
        # Bind variables to the statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_name);

        # Set parameters
        $param_name = $name;

        # Execute the prepared statement 
        if (mysqli_stmt_execute($stmt)) {
          # Store result
          mysqli_stmt_store_result($stmt);

          # Check if name is already registered
          if (mysqli_stmt_num_rows($stmt) == 1) {
            $name_err = "This name is already registered.";
          }
        } else {
          echo "<script>" . "alert('Oops! Something went wrong. Please try again later.')" . "</script>";
        }

        # Close statement 
        mysqli_stmt_close($stmt);
      }
    }
  }

  if (empty(trim($_POST["password"]))) {
    $password_err = "Please enter a password.";
  } else {
    $password = trim($_POST["password"]);
    if (!ctype_alnum(str_replace(array("@", "-", "_"), "", $password))) {
      $password_err = "password can only contain letters, numbers and symbols like '@', '_', or '-'.";
    } else {
      # Prepare a select statement
      $sql = "SELECT id FROM users WHERE password = ?";

      if ($stmt = mysqli_prepare($link, $sql)) {
        # Bind variables to the statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_password);

        # Set parameters
        $param_password = $password;

        # Execute the prepared statement 
        if (mysqli_stmt_execute($stmt)) {
          # Store result
          mysqli_stmt_store_result($stmt);

          # Check if password is already registered
          if (mysqli_stmt_num_rows($stmt) == 1) {
            $password_err = "This password is already registered.";
          }
        } else {
          echo "<script>" . "alert('Oops! Something went wrong. Please try again later.')" . "</script>";
        }

        # Close statement 
        mysqli_stmt_close($stmt);
      }
    }
  }

  # Validate email 
  if (empty(trim($_POST["email"]))) {
    $email_err = "Please enter an email address";
  } else {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_err = "Please enter a valid email address.";
    } else {
      # Prepare a select statement
      $sql = "SELECT id FROM users WHERE email = ?";

      if ($stmt = mysqli_prepare($link, $sql)) {
        # Bind variables to the statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_email);

        # Set parameters
        $param_email = $email;

        # Execute the prepared statement 
        if (mysqli_stmt_execute($stmt)) {
          # Store result
          mysqli_stmt_store_result($stmt);

          # Check if email is already registered
          if (mysqli_stmt_num_rows($stmt) == 1) {
            $email_err = "This email is already registered.";
          }
        } else {
          echo "<script>" . "alert('Oops! Something went wrong. Please try again later.');" . "</script>";
        }

        # Close statement
        mysqli_stmt_close($stmt);
      }
    }
  }

  # Validate password
  if (empty(trim($_POST["password"]))) {
    $password_err = "Please enter a password.";
  } else {
    $password = trim($_POST["password"]);
    if (strlen($password) < 8) {
      $password_err = "Password must contain at least 8 or more characters.";
    }
  }

  # Check input errors before inserting data into database
  if (empty($username_err) && empty($email_err) && empty($password_err)&&empty($name_err)) {
    # Prepare an insert statement
    $sql = "INSERT INTO users(username , name,email ,password) VALUES (?, ?, ?,?)";

    if ($stmt = mysqli_prepare($link, $sql)) {
      # Bind varibales to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "sss",$param_email, $param_name, $param_username, $param_password);

      # Set parameters
      $param_name = $name;
      $param_username = $username;
      $param_email = $email;
      $param_password = password_hash($password, PASSWORD_DEFAULT);

      # Execute the prepared statement
    /*  if (mysqli_stmt_execute($stmt)) {
        echo "<script>" . "alert('Registeration completed successfully. Login to continue.');" . "</script>";
        echo "<script>" . "window.location.href='./login.php';" . "</script>";
        exit;
      } else {
        echo "<script>" . "alert('Oops! Something went wrong. Please try again later.');" . "</script>";
      }*/

      # Close statement
      mysqli_stmt_close($stmt);
    }
  }

  # Close connection
  mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="title">Brika</h1>
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" novalidate class="form">
            <input type="email" class="email input" placeholder="example@ensi.com" name="email" value="<?= $email; ?>">
            <small class="text-danger"><?= $email_err; ?></small>
            <input type="text" class="name input" placeholder="Full name" name="name" value="<?= $name; ?>">
            <input type="text" class="username input" placeholder="username" name="username" value="<?= $username; ?>">
            <small class="text-danger"><?= $username_err; ?></small>
            <input type="password" class="password1 input" placeholder="password" name="password" value="<?= $password; ?>">
            <small class="text-danger"><?= $password_err; ?></small>
            <!--<input type="password" class="password2 input" placeholder="Confirm password">-->
            <input class="btn" type="submit" name="submit" value="Sign Up">
            
              <!--<span class="eng">Sign up</span>
              <span class="fr">S'inscrire</span>
              <span class="ger">Anmeldung</span>
              <span class="ita">Iscrizione</span>
              <span class="spa">Inscribirse</span>
              <span class="port">Inscrever-se</span>
              <span class="finn">Kirjaudu</span>
              <span class="nor">Melde deg på</span>
              <span class="pol">Zapisać się</span>
              <span class="swd">Bli Medlem</span>
              <span class="jp">サインアップ</span>
              <span class="kr">가입하기</span>
              <span class="cn">报名</span>
              <span class="tr">Üye olmak</span>-->
            
        </form>
      
        <p>
            <span class="eng">Have an account?</span>
            <span class="fr">Avez-vous un compte?</span>
            <span class="ger">ein Konto haben?</span>
            <span class="ita">avere un conto?</span>
            <span class="spa">¿tener una cuenta?</span>
            <span class="port">ter uma conta?</span>
            <span class="finn">on tili?</span>
            <span class="nor">har en konto?</span>
            <span class="pol">mieć konto?</span>
            <span class="swd">har ett konto?</span>
            <span class="jp">アカウントを持っています？</span>
            <span class="kr">계정을 갖고있다?</span>
            <span class="cn">有一个账户？</span>
            <span class="tr">hesabın var mı</span>
        <a href="login.php">
            <span class="eng">Log In</span>
            <span class="fr">Connexion</span>
            <span class="ger">Anmeldung</span>
            <span class="ita">Login</span>
            <span class="spa">Acceso</span>
            <span class="port">Conecte-se</span>
            <span class="finn">Kirjaudu sisään</span>
            <span class="nor">Logg Inn</span>
            <span class="pol">Zaloguj sie</span>
            <span class="swd">Logga in</span>
            <span class="jp">ログイン</span>
            <span class="kr">로그인</span>
            <span class="cn">登录</span>
            <span class="tr">Giriş yapmak</span>
        </a></p>
    </div>
    <footer class="bottom">
        <div class="lang-btns">
            <button class="lang-btn lang-eng">English</button>
            <button class="lang-btn lang-fr">Français</button>
            <button class="lang-btn lang-ger">Deutsch</button>
            <button class="lang-btn lang-ita">Italiana</button>
            <button class="lang-btn lang-spa">Español</button>
            <button class="lang-btn lang-port">Português</button>
            <button class="lang-btn lang-finn">Suomalainen</button>
            <button class="lang-btn lang-nor">Norsk</button>
            <button class="lang-btn lang-pol">Polski</button>
            <button class="lang-btn lang-swd">Svenska</button>
            <button class="lang-btn lang-jp">日本語</button>
            <button class="lang-btn lang-kr">한국인</button>
            <button class="lang-btn lang-cn">中国人</button>
            <button class="lang-btn lang-tr">Türkçe</button>
        </div><br>
        <p class="copyright">
            <span class="eng">© Copyright 2023 | All Rights Reserved | ENSI-national school of computer science</span>
            <span class="fr">© Droits d'auteur 2023 | Tous droits réservés | ENSI - école nationale des sciences de l'informatique</span>
            <span class="ger">© Copyright 2023 | Alle Rechte vorbehalten | ENSI - Nationale Hochschule für Informatik</span>
            <span class="ita">© Diritto d'autore 2023 | Tutti i diritti riservati | ENSI - Scuola nazionale di informatica</span>
            <span class="spa">© Derechos de autor 2023 | Todos los derechos reservados | ENSI - escuela nacional de ciencias de la computación</span>
            <span class="port">© Direitos autorais 2023 | Todos os direitos reservados | ENSI - Escola Nacional de Informática</span>
            <span class="finn">© Copyright 2023 | Kaikki oikeudet pidätetään | ENSI - kansallinen tietojenkäsittelytieteiden koulu</span>
            <span class="nor">© Copyright 2023 | Alle rettigheter forbeholdt | ENSI - nasjonal skole for informatikk</span>
            <span class="pol">© Copyright 2023 | Wszelkie prawa zastrzeżone | ENSI - państwowa szkoła informatyczna</span>
            <span class="swd">© Copyright 2023 | Alla rättigheter reserverade | ENSI - nationell skola för datavetenskap</span>
            <span class="jp">© 著作権 2023 |無断複写・転載を禁じます | ENSI - コンピュータ サイエンスの国立学校</span>
            <span class="kr">© 저작권 2023 | 판권 소유 | ENSI - 국립 컴퓨터 과학 학교</span>
            <span class="cn">© 版权所有 2023 |版权所有 | ENSI-- 国家计算机科学学院</span>
            <span class="tr">© Copyright 2023 | Tüm hakları saklıdır | ENSI - ulusal bilgisayar bilimleri okulu</span>
        </p>
    </footer>
    <!--<button class="mode"><i class='bx bx-moon' ></i></button>-->
    <script src="lang.js"></script>
    <script src="dark.js"></script>
    <!--<script src="signup_verif.js"></script>-->
    
</body>
</html>