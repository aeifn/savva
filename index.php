<?php

/*
Эта страница ведет себя как контроллер
(собирает информацию с базы данных и передает их в вид)
*/

/* Настройки */
$title = "Ссылки на ресурсы Савватеева";

/* Header */
include_once("include/header.inc");

/* Список разделов */
require_once("include/sections.inc");

/* Подключаем модель */
require_once("include/models/model.inc");

$model = new Model("database.sqlite");

/* Для каждого раздела рисуем секцию */
foreach ($sections as $key=>$section):
  include("include/index/section.inc");
endforeach;

/* Footer */
include_once("include/footer.inc");
?>
