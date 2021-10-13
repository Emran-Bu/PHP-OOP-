<?php

    class school{
        public function getNames(student $names){
            echo '<ul>';
            foreach ($names->Names() as $name) {
                echo '<li>' . $name . '</li>';
            }
            echo '</ul>';
        }
    }

    class student{
        public function Names(){
            return ['Emran', 'Eshan', 'Ehav'];
        }
    }

    class library{

    }

    $lib = new library();
    $std = new student();
    $sch = new school();

    $sch->getNames($std);

?>