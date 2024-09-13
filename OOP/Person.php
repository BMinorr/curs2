<?php

class Person
{
    private $name = "ALex";
    private $phone = 0123456;
    public function __construct()
    {
        echo "__construct is called" . PHP_EOL;
    }

    public function __destruct()
    {
        echo "__destruct is called" . PHP_EOL;
    }

    public function __get($propName)
    {
        if($propName === "name") {
            return $this->name;
        }
        return "Property \"$propName\" does not exist" . PHP_EOL;
    }
}

$p = new Person();
echo $p;