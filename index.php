<?php

class Robot
{
    public function greeting()
    {
        return 'Hello!';
    }

    final public function id()
    {
        return uniqid();
    }
}

class Android extends Robot
{
    public function greeting()
    {
        //return 'Hello, I am Android!';    Cach 1
        $greeting = parent::greeting();
        return $greeting . " I am Android";
    }

    public function id() //with the 'final' in parent's method, can't overriding in chid class.
    {
        return uniqid('Android-');
    }
}

$robot = new Robot();
echo $robot->greeting() . "<br>";

$android = new Android();
echo $android->greeting();