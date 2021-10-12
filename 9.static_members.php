<?php

    class base {
        public static $name = "Emran Hasan";

        // public static function show () {
        //     echo self::$name;
        // }

        // public function __construct($n)
        // {
        //     self::$name = $n;
        // }
    }

    class derived extends base {
        public static function show () {
            echo parent::$name;
        }
    }

    $test = new derived();
    $test->show();

    // echo base::$name;
    // base::show();

?>