<?php

namespace functions;
/**
* Вывод ссылок на экран
*/

function links_goods($start){
    global $connect;
    $query= "SELECT id_goods FROM public.goods full join public.cat ON fid_cat = id_cat  LIMIT 10 OFFSET $start";
    $res=pg_query($connect,$query);
    echo "<br>";
    echo "ссылки";
    echo "<br>";
  
    
    while ($row = pg_fetch_assoc($res)) {
        echo "<br>";
        echo('<a href=functions/open_goods.php?page='.($row['id_goods']). '</a> открыть' );
        echo "<br>";
    }
 
}


    ?>