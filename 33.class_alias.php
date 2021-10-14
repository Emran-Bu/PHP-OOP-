<?php

    class myClass{
        public $name;
    }

    class_alias("myClass", "mc");

    $obj1 = new myClass();
    $obj1->name = "Hello";
    echo $obj1->name;

    echo "<br>";

    $obj2 = new mc();
    $obj2->name = "World";
    echo $obj2->name;

?>