<?php

    class abc{
        public function first()
        {
            echo "this is first function <br>";
            return $this;
        }

        public function second()
        {
            echo "this is second function <br>";
            return $this;
        }

        public function third()
        {
            echo "this is third function <br>";
            return $this;
        }
    }

    $test = new abc();
    $test->first()->second()->third();

?>