<?php
echo '<pre>';

$x = mysqli_connect('127.0.0.1','root','','vlad_test','3306');

$user = mysqli_query($x,'SELECT * FROM `users` where name = '.'"'.$_POST['name'].'"');
$user = mysqli_fetch_all($user);

if (count($user) == 0){
print_r('erore');
}
else { print_r('good');
}


