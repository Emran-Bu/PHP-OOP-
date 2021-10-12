<?php

    interface parent1 {
        function sum($a, $b);
    }

    interface parent2 {
        function sub($c, $d);
    }

    class calculation implements parent1, parent2{
        public function sum ($a, $b){
            echo "sum value of : " . $a + $b . "<br>";
        }

        public function sub ($c, $d){
            echo "sub value of : " . $c - $d;
        }
    }

    $test = new calculation();
    $test->sum(10, 20);
    $test->sub(20, 10);

?>