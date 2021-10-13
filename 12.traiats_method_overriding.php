<?php

    // trait hello{
    //     public function sayhello() {
    //         echo "Hello From traits. <br>";
    //     }
    // }

    // class base{
    //     public function sayhello() {
    //         echo "Hello from base class <br>";
    //     }
    // }

    // class child extends base{
    //     use hello;
    //     public function sayhello() {
    //         echo "Hello from child class <br>";
    //     }
    // }

    // $test = new child();
    // $test->sayhello();

?>

<?php

    // trait hello{
    //     public function sayhello() {
    //         echo "Hello From Hello traits. <br>";
    //     }
    // }

    // trait hi{
    //     public function sayhello() {
    //         echo "Hello from hi trait <br>";
    //     }
    // }

    // class child{
    //     use hello, hi{
    //         hello::sayhello insteadof hi;
    //         hi::sayhello as newhello;
    //     }
    // }

    // $test = new child();
    // $test->sayhello();
    // $test->newhello();

?>

<?php

    trait hello{
        private function sayhello() {
            echo "Hello From Hello traits. <br>";
        }
    }

    class base{
        use hello{
            hello::sayhello as public newhello;
        }
    }

    $test = new base();
    $test->newhello();

?>