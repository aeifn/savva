<hr/>

<?php
$found = 2018;
$curdate = date('Y');
$founder = "Алексей Савватеев";
 ?>

&copy; <?= $found==$curdate ? "$found" : "$found&ndash;$curdate"; ?>
&nbsp;<?=$founder?>

</body>
</html>
