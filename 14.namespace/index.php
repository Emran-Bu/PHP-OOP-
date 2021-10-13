<?php

    require('products.php');
    require('testing.php');
    require('list.php');

    use emran\root\pending\pro\list as li;

    $obj = new pro\product();
    echo "<br>";
    $obj1 = new test\product();
    echo "<br>";
    $obj2 = new li\product();

    
    function wow(){
        echo " <br> wow from index page";
    }

    li\wow();

?>