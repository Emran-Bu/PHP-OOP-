<?php

    class base {
        protected static $name = "Emran";
        function show(){
            echo static::$name;
            echo self::$name;
        }
    }

    class derived extends base {
        protected static $name = "Hasan";
    }

    $test = new derived();
    $test->show();

?>