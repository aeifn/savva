<?php
/* Заполняем заголовки в базе данных
   (данные берем из страниц)
*/

$db = new SQLite3("database.sqlite");

$result=$db->query('SELECT _rowid_, url FROM urls');
while ($res = $result->fetchArray()) {
    $rowid=$res["rowid"];
    $title = get_title($res["url"]);
    $db->exec("UPDATE urls SET title=\"$title\" WHERE _rowid_=\"$rowid\"");
}

require_once("include/functions.inc");
