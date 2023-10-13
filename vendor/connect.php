<?php

 $connect = mysqli_connect('localhost','root', '','vlad_test');
 if (!$connect){
   die ('error connect to DataBase');
 }