<?php
declare(strict_types=1);
// ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/EmailTest.php
use zxc\Linear;
use zxc\BamboniException;
use PHPUnit\Framework\TestCase;

include_once("vendor/rok9ru/trpo-core/LogAbstract.php");
include_once("vendor/rok9ru/trpo-core/LogInterface.php");
include_once("vendor/nightbiribidzhann/zxc/Log.php");
include_once("vendor/rok9ru/trpo-core/EquationInterface.php");
include_once("vendor/nightbiribidzhann/zxc/BamboniException.php");
include_once("vendor/nightbiribidzhann/zxc/Linear.php");
include_once("vendor/nightbiribidzhann/zxc/Quadratic.php");


final class QuadraticTest extends TestCase
{
    public function testQuadratic(): void
    {
        $this->expectException(zxc\BamboniException::class);

        $a = new zxc\Quadratic();
        $a->solve(0,0,0);
    }
	    public function testQuadratic2(): void
    {
        $this->expectException(zxc\BamboniException::class);

        $a = new zxc\Quadratic();
        $a->solve(0,0,2);
    }
	    public function testQuadratic3(): void
    {
		$solver = new zxc\Quadratic(2,6,4);
		$roots = $solver->solve(2,6,4);
		$this->assertEquals($roots,[-1, -2]);
	}
    
}
