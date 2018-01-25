<html>
<head>
	<title><?=$title?></title>
</head>
<body>
<h1><?=$title?></h1>

<table>
  <tr>

    <td>
<ul>
<li><a href="urls.txt">Скачать текстом</a></li>
<li><a href="database.sqlite3">Скачать базой данных</a></li>
</ul>
</td>

<td>

</td>
</tr>
</table>

<hr />



<?php

foreach ($sections as $key=>$section) {

?>

<h2><?=$key?> — <?=$section?></h2>

<table>

  <?php

  $result=$model->get_section($key);


  while ($res = $result->fetchArray()) {

  	$url=$res["url"];
  	$title=$res["title"];
  	$rowid=$res["rowid"];

  ?>
  		<tr style="background:#ddd;">
  		<td style="font-size:.5em;"><?=$rowid?></td>
  		<td><?=$title?></td>
  		<td><a href="<?=$url?>" target="_blank"><?=$url?></a></td>
  		</tr>

      <?php
  }?>

  </table>
<?php
}
?>



</body>
</html>
