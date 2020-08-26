<?php

namespace functions;
/**
 * Страница подтверждения удаления товара
 */
?>

<!doctype html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
	<title>Удаление товара</title>
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
                $query_att= "DELETE FROM public.Attributes
                                WHERE fid_goodsatt=$page";
                $query_goods="DELETE FROM public.goods
                                WHERE id_goods=$page";
                $res=pg_query($connect,$query_att) or die ("Не удалось удалить товар");
                $res=pg_query($connect,$query_goods) or die ("Не удалось удалить товар");
                echo "Запись Удалена";
                ?>
 		</div>
 	</div>

</body>
</html>