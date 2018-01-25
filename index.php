<h1>Ссылки на ресурсы Савватеева</h1>
<ul>
<li><a href="urls.txt">Скачать текстом</a></li>
<li><a href="database.sqlite3">Скачать базой данных</a></li>
</ul>
<hr />
<?php

$db = new SQLite3("database.sqlite");

$result=$db->query('SELECT _rowid_,url,title FROM urls');
echo ( "<table>" );
while ($res = $result->fetchArray()) {
	
	$url=$res["url"];
	$title=$res["title"];
	$rowid=$res["rowid"];
	
	echo("
		<tr style=\"background:#ddd;\">
		<td style=\"font-size:.5em;\">$rowid</td>
		<td>$title</td>
		<td><a href=\"$url\">$url</a></td>
		</tr>
	");
}

echo ("</table>");
?>
