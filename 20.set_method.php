<?php

    class abc{
        private $name;

        public function __get($property)
        {
            echo "You are trying to access non existing or private property ($property)";
        }

        public function __set($property, $value)
        {
            echo "This is non existing or private property :  $property";
        }
    }

    $test = new abc();
    $test->name = "Emran Hasan";
    echo "<br>";

?>

<?php

    class xyz{

        private $course;

        function show (){
            echo $this->course;
        }

        public function __get($property)
        {
            echo "You are trying to access non existing or private property ($property)";
        }

        public function __set($property, $value)
        {
            if (property_exists($this, $property)) {
                $this->$property = $value;
            } else {
                echo "Property does not exists : $property";
            }
            
        }

    }

    $test1 = new xyz();
    $test1->course = "PHP";
    // $test1->age = "PHP";
    $test1->show();

?>