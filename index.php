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

foreach (["a", "b", "c"] as $co) {
    echo "Enter " . $co . ": ";
    $line = stream_get_line(STDIN, 1024, PHP_EOL);
    $co_arr[$co] = $line === "" ? 0 : $line;
}
$a=readline("a=");
$b=readline("b=");  
$c=readline("c=");    
//$a = $co_arr["a"];
//$b = $co_arr["b"];
//$c = $co_arr["c"];
zxc\Log::log('Version '.file_get_contents('version'));
//zxc\Log::log("Entered numbers: " . implode(", ", $co_arr));

try {
    zxc\Log::log("Equation: $a*x^2 + $b*x + $c = 0");
    $solver = new zxc\Quadratic($a, $b, $c);
    zxc\Log::log("Roots: " . implode(", ", $solver->solve($a, $b, $c)));
} catch (zxc\BamboniException $ex) {
    zxc\Log::log($ex->getMessage());
}
zxc\Log::write();
?>
