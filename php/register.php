<?

include('db.php');


$login = $_POST['login'];
$password = $_POST['password'];
$name = $_POST['name'];

mysqli_query($connection, "INSERT INTO `users` SET `name` = '" . $name . "', `login` = '" . $login . "', `pass` = '" . $password . "'");


?>
