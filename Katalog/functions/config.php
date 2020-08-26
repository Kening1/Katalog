<?php

namespace functions;
/**
* Ужасное подключение к базе данных через одну строчку (о_О)
**/
$connect=pg_connect("host=localhost port=5432 dbname=DBtraining password=1 user=postgres") or die ("Ошибка подключения");
pg_set_client_encoding($connect,"UTF8");



?>