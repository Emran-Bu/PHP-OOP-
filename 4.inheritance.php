<?php

    class employee {
        public $name;
        public $id;
        public $salary;

        function __construct ($n, $i, $s) {
            $this->name = $n;
            $this->id = $i;
            $this->salary = $s;
        }

        function info (){
            echo "<h3>Employee Profile</h3> <br>";
            echo "<h6>Employee Name : $this->name </h6>";
            // echo "<h6>Employee Profile</h6>";
        }
    }

    $e1 = new employee('Ehav', 'emp1001', 2000);
    $e1->info();
    
?>