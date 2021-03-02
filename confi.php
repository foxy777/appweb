<?php
require './vendor/autoload.php';
Logger::configure("config.xml");
$logger = Logger::getLogger('myLogger');
$logger->info("This is an informational message.");
$logger->info("This is an informational message.");
$logger->error("I'm not feeling so good...");
?>