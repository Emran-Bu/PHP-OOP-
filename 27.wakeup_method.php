<?php

    class student {

        public $course = "PHP";
        public $ID = 101;
        private $first_name;
        private $last_name;
        private $conn;

        public function getName($fname, $lname){
            $this->first_name = $fname;
            $this->last_name = $lname;
        }

        public function __construct()
        {
            $this->conn = mysqli_connect();
        } 

        public function __sleep()
        {
            mysqli_close($this->conn);
            return array('first_name', 'last_name');
        } 

        public function __wakeup()
        {
            $this->conn = mysqli_connect();
            echo "This is wakeup method";
        } 

    }

    $obj = new student();
    $obj->getName("Emran", "Hasan");
    $srl = serialize($obj);
    $unsrl = unserialize($srl);
    
    echo "<pre>";
    print_r($unsrl);
    echo "<pre>";

?>