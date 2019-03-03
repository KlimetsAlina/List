<?php
session_start();
$user_id = $_SESSION['user_id'];
$id_categ = $_SESSION['id_category'];
include('db.php');

	//выбираем весь контент нашего пользователя
$query = mysqli_query($connection, "SELECT * FROM `user_content` WHERE `id_user` = '$user_id'");

$ids_content1 = array();
$ids_content0 = array();
$i =0;
$j =0;
	//заполняем массивы id-шниками контента, раздельно просмотренные от непросмотренных
   while ($row = mysqli_fetch_assoc($query)) {
		if($row['watched']){
			$ids_content1[$i] = $row['id_content'];
			$i++;
		} else {
			$ids_content0[$j] = $row['id_content'];
			$j++;
		}
    }
		// получается, что мы берем абсолютно весь контент пользователя, разбираем его на просмотренное/непросмотренное, а только потом выбираем нужную категорию.
			
	function get_name_arr($arayid, $conect, $idcat){
		$j =0;
		$countarr = count($arayid);
		
		for($i = 0; $i < $countarr; $i++) {
		$selecttext = "SELECT * FROM `content` WHERE `id_content` = '$arayid[$i]'" ;
		$query_name = mysqli_query($conect, $selecttext);		
		$countent_info = mysqli_fetch_assoc($query_name); // массив, где содержится имя и категория		
			if( $countent_info['id_category'] == $idcat){
				$array_content[$j] = $countent_info['name'];
				$j++;
			}
		}
		return $array_content;
	}
	
		//массивы для хранения названий нужного контента, которые будут уже выводиться на странице
	$array_content1 = get_name_arr($ids_content1, $connection, $id_categ);
	$array_content0 = get_name_arr($ids_content0, $connection, $id_categ);
?>