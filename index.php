
<?php
  session_start();

  if (isset ($_SESSION ['user'])) {
      header('Location: profile.php');
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация </title>
    <link rel = "stylesheet" href="assets/css/main.css">
</head>
<body>
          <!-- Форма авторизации -->

 <form>
     <label> Логин </label>
     <input type="text"  name= "login" placeholder="Введите свой логин ">
     <label> Пароль </label>
     <input type="password" name= "password" placeholder="Введите свой пароль ">
     <button type="submit" class="login-btn"> Войди в меня </button> <br>

     <p>
         У вас нет аккаунта ? - <a href="/register.php"> Зарегистрируйтесь </a>!
     </p>

     <p class="msg none"> Lorem ipsum dolor sit amet.</p>

 </form>


          <script src = "assets/js/jquery-3.7.1.min.js"></script>
          <script src = "assets/js/mais.js"></script>

</body>
</html>