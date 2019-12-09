<?php
ini_set("display_errors", 1);
error_reporting(-1);
include_once("core/EquationInterface.php");
include_once("core/LogInterface.php");
include_once("core/LogAbstract.php");
include_once("zxc/BamboniException.php");
include_once("zxc/Linear.php");
include_once("zxc/Quadratic.php");
include_once("zxc/Log.php");
$co_arr = [];
foreach (["a", "b", "c"] as $co) {
    echo "Enter " . $co . ": ";
    $line = stream_get_line(STDIN, 1024, PHP_EOL);
    $co_arr[$co] = $line === "" ? 0 : $line;
}

zxc\Log::log('Version '.file_get_contents('./version'));

$a = $co_arr["a"];
$b = $co_arr["b"];
$c = $co_arr["c"];
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
