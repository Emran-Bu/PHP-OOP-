<?php

    class base {
        private $name;

        public function __construct ($n) {
            $this->name = $n;
        }

        public function show () {
            echo "Name : " . $this->name;
        }
    }

    class derived extends base {
        public function get () {
            echo "Name : " . $this->name;
        }
    }

    // $d1 = new derived('Emran Hasan');
    // $d1->get();

    $b1 = new base('Emran Hasan');
    $b1->show();

?>