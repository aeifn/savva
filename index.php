<?php

/*
Эта страница ведет себя как контроллер
(собирает информацию с базы данных и передает их в шаблоны)
*/

/* Готовим данные
========================================== */

/* Заголовок страницы */
$title = "Ссылки на ресурсы Савватеева";


require_once $_SERVER["DOCUMENT_ROOT"] .
"/include/functions.inc";

/* Подключаем список разделов */
require_once $_SERVER["DOCUMENT_ROOT"] .
"/models/sections.inc";

/* Подключаем модель */
require_once $_SERVER["DOCUMENT_ROOT"] .
"/models/model.inc";


$model = new Model("database.sqlite");


/* Выводим страницу
========================================== */

/* Header */
site_header();

/* Content */
include $_SERVER["DOCUMENT_ROOT"] . "/templates/index/index.inc";

/* Footer */
site_footer();
