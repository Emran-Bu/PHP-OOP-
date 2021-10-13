<?php

class person{
        public $name;
        public function __construct($n)
        {
            $this->name = $n;
            echo "Name : " . $this->name;
        }
    }

    $test = new person('Emran');

?>

<!-- magic method list -->

<h1>magic method list</h1>

<ul>
    <li>__construct()</li>
    <li>__destruct()</li>
    <li>__get()</li>
    <li>__set()</li>
    <li>__isset()</li>
    <li>__unset()</li>
    <li>__autoload()</li>
    <li>__clone()</li>
    <li>__sleep()</li>
    <li>__wakeup()</li>
    <li>__call()</li>
    <li>__callStatic()</li>
    <li>__toString()</li>
    <li>__invoke()</li>
</ul>
