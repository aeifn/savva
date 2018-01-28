<?php
/* Тут выводим раздел */

 ?>
  <tr style="background:#ddd;">
    <td style="font-size:.5em;">
      <?=$res["rowid"]?>
    </td>
    <td>
      <?=$res["title"]?>
    </td>
    <td>
      <a href="<?=$res[" url "]?>" target="_blank">
        <?=substr($res["url"], 0, 100)?>
      </a>
    </td>
  </tr>
