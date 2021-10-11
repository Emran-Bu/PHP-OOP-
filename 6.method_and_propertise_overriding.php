<?php

use derived as GlobalDerived;

class base {
        public $name = "Parent Class";

        public function show ($a, $b) {
            return $a * $b;
        }
    }

    class derived extends base {
        public $name = "Child Class";

        public function show ($a, $b) {
            return $a + $b;
        }
    }

    $test = new derived();
    echo $test->show(5, 10);

?>