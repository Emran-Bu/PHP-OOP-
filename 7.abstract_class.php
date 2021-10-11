<?php

abstract class base {
        public $name;

        abstract protected function show ($a, $b);
    }

    class derived extends base {

        public function show ($c, $d) {
            // echo $c + $d;
            echo 'Hello';
        }
    }

    $test = new derived();
    echo $test->show(15, 10);

?>