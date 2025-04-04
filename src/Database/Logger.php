<?php
namespace php_learn\Database;

class Logger
{
    public function log($message)
    {
        var_dump('Log ' . $message . ' to the database.');
    }
}