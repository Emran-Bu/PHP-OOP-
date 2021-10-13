<?php

    class student{
        public $course;
        private $first_name;
        private $last_name;

        public function setName($fname, $lname){
            $this->first_name = $fname;
            $this->last_name = $lname;
        }

        public function __isset($property)
        {
            echo isset($this->$property);
        }
    }

    $test = new student();
    $test->setName('Emran', 'Hasan');
    // $test->course = "OOP PHP";   
    echo isset($test->first_name);

?>

<?php

    class student2{
        private $detail = ['name' => 'Emran Hasan', 'gender' => 'Male', 'roll' => 2365];

        public function __isset($name)
        {
            echo isset($this->detail[$name]);
        }
    }

    $test1 = new student2();
    echo isset($test1->gender);

?>