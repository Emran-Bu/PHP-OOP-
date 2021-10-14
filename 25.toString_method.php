<?php

    class abc {
        public function __toString()
        {
            return "Can't print object as a string of class : " . get_class($this);
        }
    }

    $obj = new abc();
    echo $obj;

?>