<?
namespace functions;

?>


<html>
<head>
	<title>Пример использования текстового поля</title>
</head>
<body>
	<form method= "POST" action="add_goods_att.php">
	Выберите Категорию
	<select name="Category">
	<?php 
	include 'config.php';
	global $connect;
	$iter=0;
	$query= "SELECT name_cat FROM public.cat";
	$res=pg_query($connect,$query);
	while ($row = pg_fetch_assoc($res)) {
	    ++$iter;
	    echo '<option value="'.$iter.'" >'. $row['name_cat'] .'</option>';	    
	}
	?>
	</select>
	<br>
	<input type="submit" value= "Далее">
</form>
<a href='/Katalog/Index.php?page=1'> На главную</a>
</body>
</html>