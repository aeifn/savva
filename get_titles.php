<?php
/* Заполняем заголовки в базе данных
   (данные берем из страниц)
*/

ini_set("display_errors",0);
$url = "http://php.net/manual/ru/domdocument.loadhtmlfile.php";

$doc = new DOMDocument();
$doc->loadHTML(file_get_contents($url));
$elements=$doc->getElementsByTagName('title');

echo $elements[0]->nodeValue;


$db = new SQLite3("database.sqlite");

$result=$db->query('SELECT _rowid_, url FROM urls');
while ($res = $result->fetchArray()) {
	$rowid=$res["rowid"];
	echo "\n\n";
	echo $rowid;
	echo "\n";
	echo $res["url"];
	echo "\n";
	$title = get_title($res["url"]);
	echo "$title";
	$db->exec("UPDATE urls SET title=\"$title\" WHERE _rowid_=\"$rowid\"");
}


function get_title($url) {
	$doc = new DOMDocument();
	$html=file_get_contents($url);
	$doc->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));
	$elements=$doc->getElementsByTagName('title');
	return $elements[0]->nodeValue;
}



?>
