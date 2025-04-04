<?php


require 'src/Model/Customer.php';
require 'src/Model/Product.php';
require 'src/Database/Logger.php';
require 'src/Utils/Logger.php';

use php_learn\Model\{Customer, Product};

use php_learn\Utils\Logger;
use php_learn\Database\Logger as DatabaseLogger;

$customer = new Customer('Bob');

echo $customer->getName();

$product = new Product();

$loggers = [
    new Logger(),
    new DatabaseLogger()
];

foreach($loggers as $log)
{
    $log->log('Hello');
}
