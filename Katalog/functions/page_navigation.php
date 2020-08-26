<?php
/**
 * Кнопки навигации
 */
namespace functions;

include "config.php";

function page_navigation(){
    $page = isset($_GET['page']) ? $_GET['page']:1;
    $num = 10;
    $page = isset($_GET['page']) ? $_GET['page']:1;
    $result = pg_query("SELECT COUNT(*) FROM public.goods");
    $posts = pg_fetch_assoc($result);
    $total = intval((($posts['count'] - 1) / $num) + 1);
    if ($page != 1) $pervpage = '<a href=Index.php?page=1><<</a>
                                 <a href=Index.php?page='. ($page - 1) .'><</a> '; 
    else 
        $pervpage="";
    if ($page != $total) $nextpage = ' <a href=Index.php?page='. ($page + 1) .'>></a>
                                   <a href=Index.php?page=' .$total. '>>></a>';
    else 
        $nextpage="";

// Находим две ближайшие станицы с обоих краев, если они есть
    if($page - 2 > 0) $page2left = ' <a href=Index.php?page='. ($page - 2) .'>'. ($page - 2) .'</a> | ';
    else 
        $page2left='';
    if($page - 1 > 0) $page1left = '<a href=Index.php?page='. ($page - 1) .'>'. ($page - 1) .'</a> | ';
    else 
        $page1left='';
    if($page + 2 <= $total) $page2right = ' | <a href=Index.php?page='. ($page + 2) .'>'. ($page + 2) .'</a>';
    else 
        $page2right="";
    if($page + 1 <= $total) $page1right = ' | <a href=Index.php?page='. ($page + 1) .'>'. ($page + 1) .'</a>';
    else 
        $page1right="";


// Вывод меню
    echo  ($pervpage) , ($page2left) , ($page1left),'<b>' , ($page) ,'</b>', ($page1right) , ($page2right) , ($nextpage);
}
?> 