<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/include/functions.inc";

require_once $_SERVER["DOCUMENT_ROOT"] . "/models/model.inc";


$model = new Model($_SERVER["DOCUMENT_ROOT"]."/database.sqlite");

$url = $_GET["url"];
$title = get_title($url);

$result = $model->insert($url, $title);

var_dump($result);

 ?>
