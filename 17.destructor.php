<?php

    class abc{

        public $conn;
        public function __construct()
        {
            // $this->conn = mysqli_connect();
            echo "This is construct function <br>";
        }

        public function insert()
        {
            echo "This is insert function <br>";
        }

        public function __destruct()
        {
            // mysqli_close($this->conn);
            echo "This is destruct function <br>";
        }
    }

    $test = new abc();
    $test->insert();
    $test->insert();
    $test->insert();

?>