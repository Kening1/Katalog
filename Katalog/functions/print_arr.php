<?php

namespace functions;
/**
* Вывод элементов на экран
*/

function print_arr($type,$start){
    global $connect;
    $query= "SELECT $type FROM public.goods full join public.cat ON fid_cat = id_cat  LIMIT 10 OFFSET $start";
    $res=pg_query($connect,$query);
    echo "<br>";
    switch ($type){
        case 'id_goods':
            echo 'id',"<br>";
            break;
        case 'name_goods':
            echo 'Название',"<br>";
            break;
        case 'numbers':
            echo 'Кол-во',"<br>";
            break;
        case 'name_cat':
            echo 'Категория',"<br>";
            break;
            
    }
    
    while ($row = pg_fetch_assoc($res)) {
        echo "<br>";
        echo($row[$type]);
        echo "<br>";
    }
 
}


    ?>