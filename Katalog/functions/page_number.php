<?php

/**
 * Определение страницы
 */
namespace functions;


include "config.php";

function page_number(){
    $num = 10;
    $page = isset($_GET['page']) ? $_GET['page']:1;
    $result = pg_query("SELECT COUNT(*) FROM public.goods");
    $posts = pg_fetch_assoc($result);
    $total = intval((($posts['count'] - 1) / $num) + 1);
    $page = intval($page);
    if(empty($page) or $page < 0) $page = 1;
    if($page > $total) $page = $total;
    $start = $page * $num - $num; 
    return $start;
}

?>