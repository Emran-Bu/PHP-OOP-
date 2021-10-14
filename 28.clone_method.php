<?php

    class student{
        public $name;
        public $course;

        public function __construct($n)
        {
            $this->name = $n;
        }

        public function setCourse(course $c)
        {
            $this->course = $c;
        }

        public function __clone()
        {
            $this->course = clone $this->course;
        }
    }

    class course{
        public $cname;

        public function __construct($cn)
        {
            $this->cname = $cn;
        }
    }

    $student1 = new student('Emran Hasan');

    $course1 = new course('PHP');

    $student1->setCourse($course1);

    $student2 = clone $student1;
    $student2->name = 'Eshan Babu';
    
    $student2->course->cname = "Python";
    // echo $student1->name;
    // echo $student2->name;
    echo "<pre>";
    print_r($student1);
    echo "</pre>";

    echo "<pre>";
    print_r($student2);
    echo "</pre>";

?>