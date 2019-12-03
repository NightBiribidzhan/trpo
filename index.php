<?php
ini_set("display_errors",1);error_reporting(-1);
include_once("core/EquationInterface.php");
include_once("core/LogInterface.php");
include_once("core/LogAbstract.php");
include_once("zxc/BamboniException.php");
include_once("zxc/Linear.php");
include_once("zxc/Quadratic.php");
include_once("zxc/Log.php");

$a = 1;
$b = 9;
$c = 1;

try {
	$solver = new zxc\Quadratic($a, $b, $c);
	$roots = $solver->ur2($a, $b, $c);
	
	if (is_array($roots)) {
		zxc\Log::log("two roots");
		zxc\Log::log("roots: " . $roots[0] . " " . $roots[1]);
	} else {
		zxc\Log::log("one root");
		zxc\Log::log("root: " . $roots);
	}
}catch(zxc\BamboniException $ex) {
	zxc\Log::log($ex->getMessage());
}
zxc\Log::write();
?>
