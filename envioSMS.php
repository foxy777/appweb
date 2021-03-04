<?php
require './vendor/autoload.php';
//use Logger;
Logger::configure('config.xml');
$logger = Logger::getLogger("default");
/*echo "Información:----"
echo "Warning:----"
echo "Error:----"
// git checkout envioSMS
// git merge envioSMS
*/
$logger->info("This is an informational message.");
$logger->warn("I'm not feeling so good...");
$logger->error("I'm not feeling so good...");

//Modelo de factura de mi proyecto a
?>



