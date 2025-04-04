<?php

abstract class Person
{
    abstract public function greet();
}

class English extends Person
{
    public function greet()
    {
        return 'Hello';
    }
}

class German extends Person
{
    public function greet()
    {
        return 'Hallo';
    }
}

class French extends Person
{
    public function greet()
    {
        return 'Bonjour';
    }
}

function greeting ($people)
{
    foreach ($people as $person)
    {
        echo $person->greet() . "<br>";
    }
}

$people = [
	new English(),
	new German(),
	new French()
];

greeting($people);

//polymorphism using interface
interface Greeting
{
    public function greet();
}

class English1 implements Greeting
{
    public function greet()
    {
        return 'Hello';
    }
}

class German1 implements Greeting
{
    public function greet()
    {
        return 'Hallo';
    }
}

class France1 implements Greeting
{
    public function greet()
    {
        return 'Bonjour';
    }
}

greeting($people);