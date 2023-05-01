<?php
# Initialize session
session_start();

# Check if user is already logged in, If yes then redirect him to index page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == TRUE) {
  echo "<script>" . "window.location.href='./'" . "</script>";
  exit;
}

# Include connection
require_once "./config.php";

# Define variables and initialize with empty values
$user_login_err = $user_password_err = $login_err = "";
$user_login = $user_password = "";

# Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty(trim($_POST["user_login"]))) {
    $user_login_err = "Please enter your username or an email id.";
  } else {
    $user_login = trim($_POST["user_login"]);
  }

  if (empty(trim($_POST["user_password"]))) {
    $user_password_err = "Please enter your password.";
  } else {
    $user_password = trim($_POST["user_password"]);
  }

  # Validate credentials 
  if (empty($user_login_err) && empty($user_password_err)) {
    # Prepare a select statement
    $sql = "SELECT id, username, password FROM users WHERE username = ? OR email = ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
      # Bind variables to the statement as parameters
      mysqli_stmt_bind_param($stmt, "ss", $param_user_login, $param_user_login);

      # Set parameters
      $param_user_login = $user_login;

      # Execute the statement
      if (mysqli_stmt_execute($stmt)) {
        # Store result
        mysqli_stmt_store_result($stmt);

        # Check if user exists, If yes then verify password
        if (mysqli_stmt_num_rows($stmt) == 1) {
          # Bind values in result to variables
          mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);

          if (mysqli_stmt_fetch($stmt)) {
            # Check if password is correct
            if (password_verify($user_password, $hashed_password)) {

              # Store data in session variables
              $_SESSION["id"] = $id;
              $_SESSION["username"] = $username;
              $_SESSION["loggedin"] = TRUE;

              # Redirect user to index page
              echo "<script>" . "window.location.href='./'" . "</script>";
              exit;
            } else {
              # If password is incorrect show an error message
              $login_err = "The email or password you entered is incorrect.";
            }
          }
        } else {
          # If user doesn't exists show an error message
          $login_err = "Invalid username or password.";
        }
      } else {
        echo "<script>" . "alert('Oops! Something went wrong. Please try again later.');" . "</script>";
        echo "<script>" . "window.location.href='./login.php'" . "</script>";
        exit;
      }

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
        <?php
          if (!empty($login_err)) {
            echo "<div class='alert alert-danger'>" . $login_err . "</div>";
          }
        ?>
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" novalidate class="form">
            <input type="text" class="username input" placeholder="username">
            <small class="text-danger"><?= $user_login_err; ?></small>
            <input type="password" class="password input" placeholder="password">
            <small class="text-danger"><?= $user_password_err; ?></small>  
            <button class="btn" type="submit">
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
        </button>          
        </form>
        
        <a href="">
            <span class="eng">Forgotten password?</span>
            <span class="fr">Mot de passe oublié?</span>
            <span class="ger">Passwort vergessen?</span>
            <span class="ita">Password dimenticata?</span>
            <span class="spa">¿Contraseña olvidada?</span>
            <span class="port">Palavra-chave esquecida?</span>
            <span class="finn">Unohtunut salasana?</span>
            <span class="nor">Glemt passord?</span>
            <span class="pol">Zapomniane hasło?</span>
            <span class="swd">Glömt lösenord?</span>
            <span class="jp">パスワードを忘れました？</span>
            <span class="kr">비밀번호를 잊으셨나요?</span>
            <span class="cn">忘记密码？</span>
            <span class="tr">Unutulan Şifre?</span>
        </a>
        <p>
            <span class="eng">Don't have an account?</span>
            <span class="fr">Vous n'avez pas de compte ?</span>
            <span class="ger">Sie haben kein Konto?</span>
            <span class="ita">Non hai un account?</span>
            <span class="spa">¿No tienes una cuenta?</span>
            <span class="port">Não tem uma conta?</span>
            <span class="finn">Eikö sinulla ole tiliä?</span>
            <span class="nor">Har du ikke en konto?</span>
            <span class="pol">Nie masz konta?</span>
            <span class="swd">Har du inget konto?</span>
            <span class="jp">アカウントをお持ちでない場合</span>
            <span class="kr">계정이 없습니까?</span>
            <span class="cn">没有帐户？</span>
            <span class="tr">Hesabınız yok mu?</span>
            <a href="signup.php">
                <span class="eng">Sign up</span>
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
                <span class="tr">Üye olmak</span>
            </a>
        </p>
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
    <script src="login_verif.js"></script>
    
</body>
</html>

