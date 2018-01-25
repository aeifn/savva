<h2><?=$key?> — <?=$section?></h2>
<table>

<?php

$result=$model->get_section($key);

while ($res = $result->fetchArray()) {
      include("tr.inc");
}

?>

</table>
