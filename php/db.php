<?php
 $connection = mysqli_connect('127.0.0.1', 'root', '', 'test_bd');
if( $connection == false ){
    echo 'Не удалось подключиться </br>';
    echo mysqli_connect_error();
    exit();
} 
?>
