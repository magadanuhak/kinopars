<?php
require "vendor/autoload.php";
use PHPHtmlParser\Dom;
if(isset($_GET['id'])) {
    $dom = new Dom;
    $dom->loadFromUrl('https://www.kinopoisk.ru/film/'.$_GET['id'].'/');
    $title = $dom->find('.moviename-title-wrapper')[0];
    $description = $dom->find('.brand_words')[0];
    $image = $dom->find('.popupBigImage img')[0]->getAttribute('src');;
//echo $title->text; // "click here"
//echo $description->text;
//echo $image->getAttribute('src');
//echo $description->text;
//    $response = [
//      'title' => $title,
//      'description' => $description,
//      'image' => $image
//    ];
//    echo json_encode($response);
    ?>

    <?
}