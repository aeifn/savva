<h1>Ссылки на ресурсы Савватеева</h1>
<ul>
<li><a href="urls.txt">Скачать текстом</a></li>
<li><a href="database.sqlite3">Скачать базой данных</a></li>
</ul>
<hr />
<?php

$db = new SQLite3("database.sqlite3");

$result=$db->query('SELECT * FROM urls');
echo ( "<ol>" );
while ($res = $result->fetchArray()) {
	$url=$res["url"];
	echo("<li><a href=\"$url\">$url</a></li>");
}
echo ( "</ol>" );

?>
