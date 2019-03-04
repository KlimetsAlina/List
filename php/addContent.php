<?php
session_start();
$user_id = $_SESSION['user_id'];
$id_categ = $_SESSION['id_category'];
$watch = $_POST['watch'];
include('db.php');

$name_content = trim($_POST['name']); // Удаляет пробелы (или другие символы) из начала и конца строки

// Если строка не пустая, то приступаем к работе
if (!empty($name_content)){

	// Смотрим весь контент (FROM `content`) из этой категории, если есть с таким же названием - берем его id, если такого контента еще нет - записываем в базу
	$id_content =0;
	
	$query = mysqli_query($connection, "SELECT * FROM `content` WHERE `id_category` = '$id_categ'");
	while ($row = mysqli_fetch_assoc($query)){
		// сравнение без учета регистра, если строки равны возвращает 0
		if ( strcasecmp ( $row['name'], $name_content ) == 0) {
			$id_content = $row['id_content']; // если нашли совпадение, берем id контента и записываем имеющийся контент к нашему пользователю
			$insert = mysqli_query($connection, "INSERT INTO `test_bd`.`user_content`(`id_user`, `id_content`, `watched`) VALUES ('$user_id', '$id_content', '$watch')"); 
			break; // выходим из цикла, потому что нашли что искали
			} ////
	}
	if( $id_content == 0){ // если мы не нашли совпадений, то id останется 0 (контента с id=0 в базе у нас нет) 
		$insert = mysqli_query($connection, "INSERT INTO `test_bd`.`content` (`id_content`, `name`, `id_category`) VALUES (NULL, '$name_content', '$id_categ')"); // надеемся, что всё успешно запишется, но по-хорошему нужна проверка успешности операции
		$query = mysqli_query($connection, "SELECT `id_content` FROM `content` WHERE `name` = '$name_content'");
		$result = mysqli_fetch_assoc($query);
		$id_content = $result['id_content'];
		$insert = mysqli_query($connection, "INSERT INTO `test_bd`.`user_content`(`id_user`, `id_content`, `watched`) VALUES ('$user_id', '$id_content', '$watch')");
	}
		
}
	/* else {
	//по-хорошему надо сказать пользователю, что вы ничего не ввели } */

// возвращаемся на нужную страницу
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
}

?>