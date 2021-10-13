<?php

    require("class/first.php");
    require("class/second.php");

    function spl__autoload($class){
        require "class/" . $class . ".php";
    }
    
    $first = new first();
    echo "<br>";
    $second = new second();

?>