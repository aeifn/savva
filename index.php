<?php

/*
Эта страница ведет себя как контроллер
(собирает информацию с базы данных и передает их в шаблоны)
*/

/* Готовим данные
========================================== */

/* Заголовок страницы */
$title = "Ссылки на ресурсы Савватеева";

/* Подключаем список разделов */
require_once "include/sections.inc";

/* Подключаем модель */
require_once "include/models/model.inc";

$model = new Model("database.sqlite");


/* Выводим страницу
========================================== */

/* Header */
include "include/header.inc";

/* Content */
include "include/index/index.inc";

/* Footer */
include "include/footer.inc";
