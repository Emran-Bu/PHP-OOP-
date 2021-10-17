<li>class_exists</li><br>
<?php

    class myClass{
        
    }

    if (class_exists('myClass')) {
        echo "This class is exists. <br><br>";
        $obj = new myClass();
    } else {
        echo "This class is not exists.<br><br>";
    }

?>

<li>interface_exists</li><br>
<?php

    interface myInterface{
        
    }

    if (interface_exists('myInterface')) {
        echo "This interface is exists.<br><br>";
        class interfaceClass implements myInterface{

        }
    } else {
        echo "This interface is not exists.<br><br>";
    }

?>

<li>method_exists</li><br>
<?php

    class myMethodClass{
        public function myMethod(){

        }
    }

    $obj = new myMethodClass();

    if (method_exists($obj ,'myMethod')) {
        echo "This method is exists.<br><br>";
        
    } else {
        echo "This method is not exists.<br><br>";
    }

?>

<li>trait_exists</li><br>
<?php

    trait myTrait{

    }

    if (trait_exists('myTrait')) {
        echo "This trait is exists.<br><br>";
        class traitClass{
            use myTrait;
        }
    } else {
        echo "This trait is not exists.<br><br>";
    }

?>

<li>property_exists</li><br>
<?php

    class propertyClass{
        public $name;
    }

    if (property_exists('propertyClass', 'name')) {
        echo "This property is exists.<br><br>";
        
    } else {
        echo "This property is not exists.<br><br>";
    }

?>

<li>is_a</li><br>
<?php

    class is_aClass{
        public $name;
    }

    $obj = new is_aClass();

    if (is_a($obj, 'is_aClass')) {
        echo "This object is of is_aClass.<br><br>";
        
    } else {
        echo "This object is not of is_aClass.<br><br>";
    }

?>

<li>is_subclass_of</li><br>
<?php

    class parentClass{
        public $name;
    }

    class childClass  extends parentClass{

    }

    $obj = new childClass();

    if (is_subclass_of($obj, 'parentClass')) {
        echo "This object is a object of sub Class of parent Class.<br><br>";
    } else {
        echo "This object is not a object of sub Class of parent Class.<br><br>";
    }

?>


<h1>List of Conditional operator</h1>
<ul>
    <li>class_exists</li>
    <li>interface_exists</li>
    <li>method_exists</li>
    <li>trait_exists</li>
    <li>property_exists</li>
    <li>is_a</li>
    <li>is_subclass_of</li>
</ul>