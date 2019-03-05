<?php
session_start();
$_SESSION['id_category'] = 1;
include('php/selectContent.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="Content-language" content="ru"/>
<link rel="stylesheet" type="text/css" href="css/dialog-polyfill.css">
<link rel="stylesheet" href="css/style.css">
<title>Твои фильмы</title>
<meta name="description" content="Фильмы, просмотренные тобою"/>
</head>
<body>
<nav>
	<ul>
		<li onclick="location.href='index.php';"><a href="index.php" >Home</a></li>
		<li class="selected"><a href="#">Фильмы</a></li>
		<li onclick="location.href='serials.php';"><a href="serials.php">Сериалы</a></li>
		<li onclick="location.href='books.php';"><a href="books.php">Книги</a></li>
		<li onclick="location.href='music.php';"><a href="music.php">Музыка</a></li>
		<li onclick="location.href='other.php';"><a href="other.php">Другое</a></li>
	</ul>
	</nav>
<div id="allcontent">
<div class="list">
   <h2>Просмотренные</h2>
    <ul> 
    <?php 
	$arr_length = count($array_content1);
	for($i = 0; $i < $arr_length; $i++) {	
	echo '<li>' . $array_content1[$i] . '<a class="del_a" onclick="select_content(this);"></a></li>';
	}
	?>	
    <li id="show1" onclick="setwatch(1)"> + </li>
</ul>
</div>
<div class="list">
   <h2>Хочу посмотреть</h2>
    <ul>
	<?php 
	$arr_length = count($array_content0);
	for($i = 0; $i < $arr_length; $i++) {	
	echo '<li>' . $array_content0[$i] . '<a class="del_a" onclick="select_content(this);"></a></li>';
	}
	?>		
    <li id="show0" onclick="setwatch(0)"> + </li>
</ul>
</div>
</div>
	<dialog class="dialog" id="add">
     <h3> Добавление элемента </h3>
		<form method="POST" action="php/addContent.php" name="addform">
        <input type="text" placeholder="Название" name="name" class="input_data"> <br>
        <input type="submit" value="Добавить" class="dialog-button">
        <input type="button" onclick="dialogAdd.close();" value="Отмена" class="dialog-button">
		<input type="text"  name="watch" value="watch" style="display:none;">
		</form>
	</dialog>
	
	<dialog class="dialog" id="delete">
     <h3> Удалить элемент? </h3>
		<form method="POST" action="php/deleteContent.php" name="deleteform">
        <input type="text" name="namecontent" value="Название" class="input_data" readonly> <br>
        <input type="submit" value="Удалить" class="dialog-button">
        <input type="button" onclick="dialogDelete.close();" value="Отмена" class="dialog-button">
		</form>
	</dialog>
	
<script src="js/dialog-polyfill.js"></script>
<script src="js/dialog.js"></script>
<script src="js/forforms.js"></script>
</body>
</html>