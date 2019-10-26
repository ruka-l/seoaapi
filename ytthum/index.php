<?php
include ("simple_html_dom.php"); 
$type = $_GET["id"];
    if($type==""){
        exit("Type must not be blank");
    } else {
        echo "https://img.youtube.com/vi/$type/maxresdefault.jpg";
    }
    
?>