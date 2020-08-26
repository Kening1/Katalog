<?php

namespace functions;
?>

<html>
<head>
	<title>Пример использования текстового поля</title>
</head>
<body>
	<form method= "POST" action="add_goods_fin.php">
	Введите аттрибуты
	
	<br><br>
	<?php 
	include 'config.php';
	global $connect;
	$iter=$_POST['Category'];
	$query= "SELECT attcat_1,attcat_2,attcat_3 FROM public.cat WHERE id_cat=$iter" or die ("EROR");
	$res=pg_query($connect,$query);
	while ($row = pg_fetch_assoc($res)) {
	    echo ("Категория".'<input name="Category" type="text" value="'.$iter.'" readonly>'. "<br>");
	    echo ("Название".'<input name="name" type="text">'. "<br>");
	    echo ("Количество".'<input name="numbers" type="text">'. "<br>");
	    echo ($row['attcat_1'].'<input name="att1" type="text">'. "<br>");
	    echo ($row['attcat_2'].'<input name="att2" type="text">'. "<br>");
	    echo ($row['attcat_3'].'<input name="att3" type="text">'. "<br>");
	}
	?>
	
	<INPUT type="submit" value= "Отправить">
</form>
	<a href='/Katalog/Index.php?page=1'> На главную</a>
</body>
</html>