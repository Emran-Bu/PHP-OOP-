<?php

    class student{
        public $a;
        public $b;

        public function __construct($a ,$b){
            $this->a = $a;
            $this->b = $b;
        }

        // public function sum()
        // {
        //     echo $this->a + $this->b;
        // }

        public function __invoke()
        {
            echo $this->a * $this->b;
        }
    }

    $test = new student(50, 50);
    
    // $test->sum();

    $test();
   
?>