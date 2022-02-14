<?php


while(true){
    echo "\n\n Sending Request!";
    
    $suhs = file_get_contents("http://".$_SERVER['HTTP_HOST']."/cronroute");

    sleep(60);
}