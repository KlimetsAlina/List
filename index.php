<?php
session_start();?>
<!DOCTYPE html><html>
<head>
<meta charset="utf-8" />
<meta http-equiv="Content-language" content="ru"/>
<link rel="stylesheet" href="css/style.css">
<title>Главная</title>
<meta name="description" content="Список твоих фильмов, сериалов, книг, музыки и может чего то ещё (:"/>
</head>
<body>
<nav>
	<ul>
		<li class="selected"><a href="#" >Home</a></li>
		<li onclick="location.href='films.php';"><a href="films.php">Фильмы</a></li>
		<li onclick="location.href='serials.php';"><a href="serials.php">Сериалы</a></li>
		<li onclick="location.href='books.php';"><a href="books.php">Книги</a></li>
		<li onclick="location.href='music.php';"><a href="music.php">Музыка</a></li>
		<li onclick="location.href='other.php';"><a href="other.php">Другое</a></li>
	</ul>
	</nav>
<div id="allcontent">
<div class="home">
<?php
	echo '<p>Привет, ' . $_SESSION['login'] . '!</p>';
	?>
</div>
<div class="home">
    <p>    Рада тебя снова видеть!(: <br/>
 Можешь сохранить здесь всё то, что тебе понравилось и запомнилось в этом мире)</p>
</div>
</div>
</body>
</html>