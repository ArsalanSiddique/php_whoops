<?php
declare(strict_types=1);
require __DIR__ . '/vendor/autoload.php';

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

function add(int $a, int $b) {
    return $a+$b;
}

echo add(1, 2);







// try {


// } catch (Exception $e) {
//     echo $e->getMessage();
// }
