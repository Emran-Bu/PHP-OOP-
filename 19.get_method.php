<?php

    class abc{
        private $name = "Emran Hasan";

        public function __get($property)
        {
            echo "You are trying to access non existing or private property ($property)";
        }
    }

    $test = new abc();
    echo $test->name;
    echo "<br>";

?>

<?php

    class xyz{
        private $data = ["name" => "Emran", "age" => 20, "gender" => "male"];

        public function __get($key)
        {
           if (array_key_exists($key, $this->data)) {
                return $this->data[$key];
           } else {
               return "This key ($key) is not defined";
           }
        }
    }

    $test1 = new xyz();
    echo $test1->gender;

?>