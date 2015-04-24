<?php
    header ("Content-Type: text/plain");
    echo "Hello, Dear ".$_GET["name"]."!";
    /* Запрос
   HTTP 1.1 GET /print_name.php?name=Sarah

   Ответ
   Content-Type: text/plain
   Hello, Dear Sarah!*/
