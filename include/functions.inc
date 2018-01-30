<?php

function site_header()
{
  global $title;
  include $_SERVER["DOCUMENT_ROOT"]."/templates/header.inc";
}

function site_footer()
{
  include $_SERVER["DOCUMENT_ROOT"]."/templates/footer.inc";
}



function get_title($url)
{
    $doc = new DOMDocument();
    $html=file_get_contents($url);
    $doc->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));
    $elements=$doc->getElementsByTagName('title');
    return $elements[0]->nodeValue;
}
