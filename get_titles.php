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


function get_title($url)
{
    $doc = new DOMDocument();
    $html=file_get_contents($url);
    $doc->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));
    $elements=$doc->getElementsByTagName('title');
    return $elements[0]->nodeValue;
}
