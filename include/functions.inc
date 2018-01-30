<?php
function get_title($url)
{
    $doc = new DOMDocument();
    $html=file_get_contents($url);
    $doc->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));
    $elements=$doc->getElementsByTagName('title');
    return $elements[0]->nodeValue;
}
