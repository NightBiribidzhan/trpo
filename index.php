<?php
ini_set("display_errors", 1);
error_reporting(-1);

require __DIR__ . '/vendor/autoload.php';

include_once("vendor/rok9ru/trpo-core/EquationInterface.php");
include_once("vendor/rok9ru/trpo-core/LogInterface.php");
include_once("vendor/rok9ru/trpo-core/LogAbstract.php");
include_once("vendor/nightbiribidzhann/zxc/BamboniException.php");
include_once("vendor/nightbiribidzhann/zxc/Linear.php");
include_once("vendor/nightbiribidzhann/zxc/Log.php");
include_once("vendor/nightbiribidzhann/zxc/Quadratic.php");

$co_arr = [];
$version = fopen("version", "r");

$a=readline("a=");
$b=readline("b=");  
$c=readline("c=");    
zxc\Log::log('Version '.file_get_contents('version'));
try {
    zxc\Log::log("Equation: $a*x^2 + $b*x + $c = 0");
    $solver = new zxc\Quadratic($a, $b, $c);
    zxc\Log::log("Roots: " . implode(", ", $solver->solve($a, $b, $c)));
} catch (zxc\BamboniException $ex) {
    zxc\Log::log($ex->getMessage());
}
zxc\Log::write();
?>
