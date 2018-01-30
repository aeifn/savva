<?php

  include $_SERVER["DOCUMENT_ROOT"] . "/include/functions.inc";

  $title = "Добавление ссылок";


  /* GLOBAL GOOGLE CONFIG */

  include "/usr/local/etc/savva.php";

  /* PREPARE CONTENT */

  /* Query */
  $q="Алексей Савватеев";

  /* API URL */

  $queryset =
  [
    "key" => KEY,
    "cx" => CX,
    "dateRestrict" => "d7",
    "q" => $q,
  ];

  $url = "https://www.googleapis.com/customsearch/v1?";

  $url .= http_build_query($queryset);

  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $result = curl_exec($ch);
  $result = json_decode($result);



  /* Выводим страницу */
  site_header();

  include $_SERVER["DOCUMENT_ROOT"] . "/templates/add/index.inc";

  site_footer();
