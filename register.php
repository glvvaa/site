<?php

session_start();
if ( isset($_SESSION ['user'])) {
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
          <!-- Форма регистрации -->

 <form action="vendor/singup.php" method="post" enctype="multipart/form-data">
     <label> ФИО </label>
     <input type="text" name="full_name" placeholder="Введите свое полное имя">
     <label> Логин </label>
     <input type="text" name="login" placeholder="Введите свой логин">
     <label> Почта </label>
     <input type="email" name="email" placeholder="Введите свою почту">
     <label> Изображение профиля </label>
     <input type="file" name="avatar">
     <label> Пароль </label>
     <input type="password" name="password" placeholder="Введите пароль "/>
     <label> Подтверждение пароля</label>
     <input type="password" name="password_confirm" placeholder="Подтвердите пароль "/>
     <button type = "submit" class= "register-btn"> Зарегаться </button>

     <p>
         У вас нет аккаунта ? - <a href="index.php"> Авторизируйтесь </a>!
     </p>


    <p class="msg none "> lorem ipsum. </p>

 </form>
 
 <script src = "assets/js/jquery-3.7.1.min.js"></script>
          <script src = "assets/js/mais.js"></script>

</body>
</html>