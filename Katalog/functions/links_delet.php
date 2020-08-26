<?php

namespace functions;
/**
 * Вывод элементов на экран
 */

function links_delet($start){
    global $connect;
    $query= "SELECT id_goods FROM public.goods full join public.cat ON fid_cat = id_cat  LIMIT 10 OFFSET $start";
    $res=pg_query($connect,$query);
    echo "<br>";
    echo "<br>";
    
    
    while ($row = pg_fetch_assoc($res)) {
        echo "<br>";
        echo('<a href=functions/delete_goods.php?page='.($row['id_goods']). '</a> удалить' );
        echo "<br>";
    }
    
}


?>