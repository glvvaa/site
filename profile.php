
<?php
  session_start();
if (!$_SESSION ['user']){
header('Location: /');
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
          <!-- Профиль -->

 <form >
    <img src="<?=$_SESSION ['user']['avatar'] ?>" width = "250"; alt=" ">
     <h2 style= "margin: 25px 0;"><?=$_SESSION ['user'][ 'full name'] ?> </h2>
     <a href= "#"><?=$_SESSION ['user']['email'] ?>
         <a href = "vendor/logout.php" class="logout"> Выйди отсюда
 </form>

</body>
</html>