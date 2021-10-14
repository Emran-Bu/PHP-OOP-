<?php

    class student {
        public $course = "PHP";
        public $ID = 101;
        private $first_name;
        private $last_name;

        public function getName($fname, $lname){
            $this->first_name = $fname;
            $this->last_name = $lname;
        }

        public function __sleep()
        {
            return array('first_name', 'last_name');
        } 

    }

    $obj = new student();
    $obj->getName("Emran", "Hasan");
    $srl = serialize($obj);
    echo $srl;

?>