
<?php

/* Для каждого раздела рисуем секцию */
foreach (SECTIONS as $key=>$section):
  include "section.inc";
endforeach;
?>
<br/>
	<a href="/database.sqlite">Скачать базу данных (формат SQLite3)</a>
	|
	<a href="https://github.com/aeifn/savva">На Гитхабе</a>
