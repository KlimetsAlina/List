<?php
session_start();
$_SESSION['id_category'] = 3;
include('php/selectContent.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="Content-language" content="ru"/>
<link rel="stylesheet" href="css/style.css">

<title>Твои книги</title>
<meta name="description" content="Книги, прочитанные тобою"/>
</head>

<body>
<nav>
	<ul>
		<li onclick="location.href='index.php';"><a href="index.php" >Home</a></li>
		<li onclick="location.href='films.php';"><a href="films.php">Фильмы</a></li>
		<li onclick="location.href='serials.php';"><a href="serials.php">Сериалы</a></li>
		<li class="selected"><a href="#">Книги</a></li>
		<li onclick="location.href='music.php';"><a href="music.php">Музыка</a></li>
		<li onclick="location.href='other.html';"><a href="other.html">Другое</a></li>
	</ul>
	</nav>
	
<div id="allcontent">


<div class="list">
   <h2>Прочитанные</h2>
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
   <h2>Хочу прочесть</h2>
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
