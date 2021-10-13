<?php

class person{
        public $name;
        public function __construct($n)
        {
            $this->name = $n;
            echo "Name : " . $this->name;
        }
    }

    $test = new person('Emran');

?>