<?php

    class abc{
        private $first_name;
        private $last_name;

        private function getName($fname, $lname)
        {
            $this->first_name = $fname;
            $this->last_name = $lname;
        }

        public function __call($method, $arg)
        {
        //    echo "This is private or non existing method : $method";
        //    echo "<br>";
        //    print_r($arg);

            if (method_exists($this, $method)) {
                call_user_func_array([$this, $method], $arg);
            } else {
                echo "This is private or non existing method : $method";
            }
            

        }
    }

    $test = new abc();
    $test->getName('Emran', 'Hasan');
    // $test->personal();

    echo "<pre>";
    print_r($test);
    echo "</pre>";

?>