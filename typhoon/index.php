<?php
include ("simple_html_dom.php"); 

// Create DOM from URL or file
$html = file_get_html('https://search.naver.com/search.naver?where=m&sm=mtb_etc&mra=bkw3&query=%ED%83%9C%ED%92%8D');

foreach($html->find('img[width=305]') as $e) {
    echo $e->src . '<br>';
}

?>