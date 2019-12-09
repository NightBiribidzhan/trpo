<?php
namespace zxc;
// Линейное уравнение a*x + b = 0
class Linear
{
	protected $x;
	function ur($a, $b)
	{
		Log::log("IMBA sensation: $a*x + $b = 0");
		if ($a != 0) 
		{
			$x = -1*$b/$a;
			$this->x = $x;
			//Log::log("Equation: $a*x + $b = 0");
			Log::log("Equation is linear");
			return array($x);
		}
		throw new BamboniException("doesn't exist");
	}
}
?>