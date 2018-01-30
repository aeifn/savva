
<pre>
<ol>
  <?php foreach($result->items as $item): ?>
    <li><a href="<?=$item->link?>" target="_blank"><?=$item->title?></a> | <a href="add.php?url=<?=urlencode($item->link)?>" target="_blank">Добавить!</a></li>
  <?php endforeach ?>
</ol>
</pre>
