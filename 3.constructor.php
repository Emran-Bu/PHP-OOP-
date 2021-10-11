<?php

    class person {
        public $name, $age;

        function __construct($name="Emran Hasan", $age=20)
        {
            $this->name = $name;
            $this->age = $age;
        }

        function show () {
            echo $this->name . " - " . $this->age . "<br>";
        }
    }

    $p1 = new person ();
    $p2 = new person ("Emran", 40);
    $p3 = new person ("Ehav", 15);
    // $p1->name = "Emran";
    // $p1->age = 20;
    $p1->show();
    $p2->show();
    $p3->show();

    ?>