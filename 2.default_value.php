<?php

    class person {
        public $name = "Emran"; //default value
        public $age = 20; // //default value value

        function show(){
            echo $this->name . " - " . $this->age;
        }
    }

    $p1 = new person();
    // $p1->name = "Emran Hasan";
    // $p1->age = 25;

    $p1->show();

?>