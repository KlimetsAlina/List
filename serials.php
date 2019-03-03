<?php
session_start();
$_SESSION['id_category'] = 2;
include('php/selectContent.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="Content-language" content="ru"/>
<link rel="stylesheet" href="css/style.css">

<title>Твои сериалы</title>
<meta name="description" content="Cериалы, просмотренные тобою"/>
</head>

<body>
<nav>
	<ul>
		<li onclick="location.href='index.php';"><a href="index.php" >Home</a></li>
		<li onclick="location.href='films.php';"><a href="films.php">Фильмы</a></li>
		<li class="selected"><a href="#">Сериалы</a></li>
		<li onclick="location.href='books.php';"><a href="books.php">Книги</a></li>
		<li onclick="location.href='music.php';"><a href="music.php">Музыка</a></li>
		<li onclick="location.href='other.html';"><a href="other.html">Другое</a></li>
	</ul>
	</nav>
	
<div id="allcontent">

<div class="list">
   <h2>Просмотренные</h2>
    <ul>
	<?php 
	$arr_length = count($array_content1);
	for($i = 0; $i < $arr_length; $i++) {	
	echo '<li>' . $array_content1[$i] . ' </li>';
	}
	?>	
    <li> + </li>
</ul>
</div>

<div class="list">
   <h2>Хочу посмотреть</h2>
    <ul>
	<?php 
	$arr_length = count($array_content0);
	for($i = 0; $i < $arr_length; $i++) {	
	echo '<li>' . $array_content0[$i] . ' </li>';
	}
	?>	
    <li> + </li>
</ul>
</div>
   
    </div>
</body>
</html>
