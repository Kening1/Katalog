<?php
namespace functions;
/**
 * Отображаем полную информацию по выбранному товару
 */

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Обзор товара</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
 	<div class="wrapper">
 		<div class="content"><a href='/Katalog/Index.php?page=1'> На главную </a> </div>
 		<div class="sidebar">
 		<?php 
 		include 'config.php';
 		global $connect;
 		$page = isset($_GET['page']) ? $_GET['page']:1;
 		$page=intval($page);
 		$query= "SELECT * FROM public.goods full join public.cat ON fid_cat = id_cat
        full join public.attributes ON id_goods = fid_goodsatt
        WHERE id_goods=$page" ;
 		$res=pg_query($connect,$query);
 		while ($row = pg_fetch_assoc($res)) {
 		    echo "<br>";
 		    echo "id:",($row['id_goods']);
 		    echo "<br>";
 		    echo "Название:",($row['name_goods']);
 		    echo "<br>";
 		    echo " Категория:",($row['name_cat']);
 		    echo "<br>";
 		    echo ($row['attcat_1']),": ", ($row['att_1']);
 		    echo "<br>";
 		    echo ($row['attcat_2']),": ", ($row['att_2']);
 		    echo "<br>";
 		    echo ($row['attcat_3']),": ", ($row['att_3']);
 		}
 		?>
 		</div>
 	</div>

</body>
</html>