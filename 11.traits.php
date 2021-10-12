<?php

    trait hello{
        public function sayhello(){
            echo "Hello everyone <br>";
        }
        public function sayhi(){
            echo "Hi everyone <br>";
        }
    }

    trait bye{
        public function saybye(){
            echo "Bye bye everyone <br>";
        }
    }

    class base{
        use hello, bye;
    }

    class base2{
        use hello;
    }

    $test = new base();
    // $test2 = new base2();
    $test->sayhello();
    $test->saybye();
    $test->sayhi();

?>