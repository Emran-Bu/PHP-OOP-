<?php
    // deprecated as of php 7.2.0

    // require("class/first.php");
    // require("class/second.php");

    function spl__autoload($class){
        require "class/" . $class . ".php";
    }
    
    $first = new first();
    echo "<br>";
    $second = new second();

?>

<?php

    // for php 8.0.0 version

    // require 'class\first.php';
    // require 'class/second.php';

    spl_autoload_register(function ($class)
    {
        echo require 'class/' . $class . '.php';
    });
    
    $f = new first();
    echo '<br>';
    $s = new second();
    
?>