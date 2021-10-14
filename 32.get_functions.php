<!-- get class -->
<?php

    class myClass{
        public function getName(){
            echo "Class Name Is : " . get_class($this) . "<br>";
        }
    }

    $obj = new myClass();
    $obj->getName();
    
?>

<!-- get parent class -->
<?php

    class abc{
        
    }

    class xyz extends abc{
        public function getName(){
            echo "Parent Class Name Is : " . get_parent_class($this) . "<br>";
        }
    }

    $obj = new xyz();
    $obj->getName();   

?>

<!-- get class methods -->
<?php

    class methodClass{

        public function __construct(){
            echo "<br> get class methods :  <br>";
            echo "<pre>";
            print_r(get_class_methods($this));
            echo "</pre>";
        }

        public function myFun1(){
            
        }

        private function myFun2(){

        }

    }

    $obj = new methodClass();
    $class_method = get_class_methods('methodClass');
    echo "<pre>";
    print_r($class_method);
    echo "</pre>";

?>

<!-- get class vars -->
<?php

    class varClass{

        public $var;
        public $var1 = "Hello";
        public $var2 = 2021;
        private $var3;

        public function __construct(){
            $this->var = "Wow";
            $this->var3 = "Thank you";
            echo "<br> get class vars :  <br>";
            echo "<pre>";
            print_r(get_class_vars(__CLASS__));
            echo "</pre>";
        }

    }

    $obj = new varClass();
    $class_vars = get_class_vars(get_class($obj));
    echo "<pre>";
    print_r($class_vars);
    echo "</pre>";

?>

<!-- get objects variables  -->
<?php

    class objClass{

        public $var;
        public $var1 = "Hello";
        public $var2 = 2021;
        private $var3;

        public function __construct(){
            $this->var = "Wow";
            $this->var3 = "Thank you";
            echo "<br> get objects vars :  <br>";
            echo "<pre>";
            print_r(get_object_vars($this));
            echo "</pre>";
        }

    }

    $obj = new objClass();
    $class_vars = get_object_vars($obj);
    echo "<pre>";
    print_r($class_vars);
    echo "</pre>";

?>

<!-- get called classes  -->
<?php

    class callClass{
        public static function callFun(){
            echo "get called classes : " . "<br>";
            echo "<pre>";
            var_dump(get_called_class());
            echo "</pre>";
        }
    }

    class derivedCallClass extends callClass{

    }

    callClass::callFun();
    derivedCallClass::callFun();

?>

<!-- get declare classes  -->
<?php

    echo "get declare classes : " . "<br>";

    class declareClass{
        
    }

    class declareClass2{

    }

    echo "<pre>";
    print_r(get_declared_classes());
    echo "</pre>";

?>


<!-- get declare interfaces  -->
<?php

    echo "get declare interfaces : " . "<br>";

    class interfaceClass{
        
    }

    class interfaceClass2{

    }

    echo "<pre>";
    print_r(get_declared_interfaces());
    echo "</pre>";

?>

<!-- get declare traits  -->
<?php

    echo "get declare trait : " . "<br>";

    trait trait1{
        
    }

    trait trait2{

    }

    echo "<pre>";
    print_r(get_declared_traits());
    echo "</pre>";

?>


<h2>List of get functions.</h2>
<ul>
    <li>get_class</li>
    <li>get_parent_class</li>
    <li>get_class_methods</li>
    <li>get_class_vars</li>
    <li>get_object_vars</li>
    <li>get_called_class</li>
    <li>get_declared_classes</li>
    <li>get_declared_interfaces</li>
    <li>get_declared_traits</li>
    <li>class_alias</li>
</ul>