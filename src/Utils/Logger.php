<?php

namespace php_learn\Utils;

class Logger
{
    public function log($message)
    {
        var_dump('Log ' . $message);
    }
}