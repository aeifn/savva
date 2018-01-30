<html>
<head>
  <title>
  </title>
</head>
<body>
  <ol>

  <?php
  include "/usr/local/etc/savva.php";

  $q="Алексей+Савватеев";

  $url = "https://www.googleapis.com/customsearch/v1?key=".KEY."&cx=".CX."&dateRestrict=d7&q=$q";

  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    echo "<pre>";
  $result = curl_exec($ch);
  $result = json_decode($result);

  foreach($result->items as $item):
    ?>
    <li><a href="<?=$item->link?>" target="_blank"><?=$item->title?></a> | <a href="add.php?url=<?=$item->link?>" target="_blank">Добавить!</a></li>
    <?php
  endforeach;
  echo "</pre>";
   ?>
</ol>

</body>
</html>
