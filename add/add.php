<?php

include "../include/models/model.inc";
require_once "../include/functions.inc";


$model = new Model("../database.sqlite");


$url = $_GET["url"];
$title = get_title($url);


$result = $model->insert($url, $title);

var_dump($result);

 ?>
