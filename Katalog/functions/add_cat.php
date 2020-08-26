<?php 
namespace functions;

include "config.php";
?>
<html>
<head>
	<title> Добавление Категории</title>
</head>
<body>
	<div class="wrapper">
 		<div class="content"><a href='/Katalog/Index.php?page=1'> На главную </a> </div>
 		<div class="sidebar">
		<?php
	       global $connect;
	       $category=$_POST['category'];
            $att1=$_POST['att1'];
            $att2=$_POST['att2'];
            $att3=$_POST['att3'];
            $result = pg_query("SELECT id_cat FROM Public.cat ORDER BY id_cat DESC LIMIT 1");
            $posts = pg_fetch_assoc($result);
            $posts= intval($posts['count'])+1;
            $query="INSERT INTO Public.cat (name_cat,id_cat,attcat_1,attcat_2,attcat_3) 
                    VALUES ('$category','$posts','$att1','$att2','$att3')";
            if (pg_query($connect,$query))
                {
                echo "Категория успешно добавлена!";
                }
            else 
                {
                echo "Ошибка добавления категории";
                }
           ?>
           </div>
     </div>
	</body>
</html>
