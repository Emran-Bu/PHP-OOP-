<?php

class student {
        private static function hello($name){
            echo "This is static hello function.<br>";
            echo "Hello " . $name;
        }

        public static function __callStatic($method, $arg)
        {
            if (method_exists(__class__, $method)) {
                call_user_func_array([__class__, $method], $arg);
            } else {
                echo "Method Does not Exists : $method";
            }
            
        }
    }

    student::hello("Emran");

?>