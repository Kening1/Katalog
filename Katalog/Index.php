<?php

use function functions\print_arr;
use function functions\page_number;
use function functions\page_navigation;
use function functions\links_goods;
use function functions\links_delet;


include 'functions/config.php';
include 'functions/print_arr.php';
include 'functions/page_number.php';
include 'functions/page_navigation.php';
include 'functions/links_goods.php';
include 'functions/links_delet.php';
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Каталог</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
 	<div class="wrapper">
 		<div class="content">Каталог Товаров
 		<a href=./functions/add_cat.html>Добавить Категорию</a>
 		<a href=./functions/add_goods.php>Добавить Товар</a>
 		</div>
 		<div class="sidebar">
 		<?php print_arr('id_goods',page_number());
 		?>
 		</div>
 		<div class="sidebar2">
 		<?php print_arr('name_goods',page_number());
 		?>
 		</div>
 		<div class="sidebar3">
 		<?php print_arr('numbers',page_number());
 		?>
 		</div>
 		<div class="sidebar4">
 		<?php print_arr('name_cat',page_number());
 		?>
 		</div>

 		<div class="sidebar5">
 		<?php links_goods(page_number());
 		?>
 		</div>
 		<div class="sidebar6">
 		<?php links_delet(page_number());
 		?>
 		</div>
 		<div class="page_navigation">
 		<br>
 		<?php page_navigation();
 		?>
 		</div>
 		
 	</div>

</body>
</html>



