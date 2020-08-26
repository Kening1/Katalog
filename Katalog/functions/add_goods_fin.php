<?php

namespace functions;

include 'config.php';

?>

<html>
<head>
	<title>Пример использования текстового поля</title>
</head>
<body>
	<?php 
	   global $connect;
	   $cat=$_POST['Category'];
	   $name=$_POST['name'];
	   $num=$_POST['numbers'];        
	   $att1=$_POST['att1'];
	   $att2= $_POST['att2'];
	   $att3= $_POST['att3'];
	   $result=pg_query("SELECT id_goods FROM Public.goods ORDER BY id_goods DESC LIMIT 1");
	   $posts = pg_fetch_assoc($result);
	   $posts= intval($posts['id_goods'])+1;
	   $query_goods="INSERT INTO public.goods (id_goods,name_goods,fid_cat,numbers) 
                  VALUES ('$posts','$name','$cat','$num')";
	   $result_att=pg_query("SELECT id_attribute FROM Public.attributes ORDER BY id_attribute DESC LIMIT 1");
	   $posts_att= pg_fetch_assoc($result_att);
	   $posts_att= intval($posts_att['id_attribute'])+1;
	   $query_att="INSERT INTO public.attributes (id_attribute,fid_catatt,fid_goodsatt,att_1,att_2,att_3) 
                    VALUES ('$posts_att','$cat','$posts','$att1','$att2','$att3')";
	   if (pg_query($connect,$query_goods) && pg_query($connect,$query_att))
	   {
	       echo "Товар успешно добавлен!";
	   }
	   else
	   {
	       echo "Ошибка добавления товара";
	   }
	?>
	<a href='/Katalog/Index.php?page=1'> На главную</a>

</body>
</html>