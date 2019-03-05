<?php
session_start();
$user_id = $_SESSION['user_id'];
$id_categ = $_SESSION['id_category'];
// $watch = $_POST['watch']; пока без него
include('db.php');

$name_content = $_POST['namecontent'];

$query = mysqli_query($connection, "SELECT `id_content` FROM `content` WHERE `name` = '$name_content' AND `id_category` = '$id_categ'
");
$result = mysqli_fetch_assoc($query);
$id_content = $result['id_content'];
$query = mysqli_query($connection, "DELETE FROM `test_bd`.`user_content` WHERE `user_content`.`id_user` = '$user_id' AND `user_content`.`id_content` = '$id_content' LIMIT 1;
");

switch ($id_categ) {
    case 1:
        header('Location: ../films.php');
        break;
    case 2:
        header('Location: ../serials.php');
        break;
    case 3:
        header('Location: ../books.php');
        break;
    case 4:
        header('Location: ../music.php');
        break;
    case 5:
        header('Location: ../other.php');
        break;
}
?>