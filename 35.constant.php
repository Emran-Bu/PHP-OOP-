<?php

    class Constant{
        // public $roll1 = 45;
        // public $roll2 = 45;
        const roll = 45;
        public function output()
        {
            // return self::roll;
            // return $this->roll1 + $this->roll2;
            // return $a + $b;
            // return self::roll + self::roll;
            return self::roll;
        }
    }

    // $obj = new Constant();
    // echo $obj->output(45, 45);
    // echo $obj->output();

    echo Constant::roll . "<br>";

?>

<?php

    class Test{
        public static $name = "Emran";

        public static function show()
        {
            echo self::$name;
        }
    }

    //  Test::$name;
     Test::show();
?>