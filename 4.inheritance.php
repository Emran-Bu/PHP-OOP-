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
            echo "<h3>Employee Profile</h3>";
            echo "<p>Employee Name : $this->name </p>";
            echo "<p>Employee Id : $this->id </p>";
            echo "<p>Employee Salary : $this->salary </p>";
        }
    }

    class manager extends employee{
        public $ta = 1000;
        public $pa = 300;
        public $totalSalary;

        function info (){
            $this->totalSalary = $this->salary + $this->ta + $this->pa;
            echo "<h3>Manager Profile</h3>";
            echo "<p>Manager Name : $this->name </p>";
            echo "<p>Manager Id : $this->id </p>";
            echo "<p>Manager Salary : $this->totalSalary </p>";
        }
    }

    $e1 = new employee('Ehav', 'emp1981', 2000);
    $e1->info();

    $m1 = new manager('Emran', 'm1547', 10000);
    $m1->info();

?>