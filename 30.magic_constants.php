<?php

    namespace myNamespace;
    echo "Line Number : " . __LINE__ . "<br>";
    echo "The full path of this file is : " . __FILE__ . "<br>";
    echo "The full path of this Directory is : " . __DIR__ . "<br>";
    function myFunction(){
        echo "The function name is : " . __FUNCTION__ . "<br>";
    }
    myFunction();

    trait myTrait {
        public function getTraitName(){
            echo "The trait name is : " . __TRAIT__ ."<br>";
        }
    }

    class myClass{
        use myTrait;
        public function myclassFunction(){
            echo "The class name : " . __CLASS__ . "<br>";
            echo "The method name : " . __METHOD__ . "<br>";
            echo "The namespace name : " . __NAMESPACE__ . "<br>";
        }
    }

    $obj = new myClass();
    $obj->myclassFunction();

?>


<h3>List OF Magic Constants.</h3>
<ul>
    <li>__LINE__</li>
    <li>__FILE__</li>
    <li>__DIR__</li>
    <li>__FUNCTION__</li>
    <li>__CLASS__</li>
    <li>__METHOD__</li>
    <li>__NAMESPACE__</li>
    <li>__TRAIT__</li>
</ul>