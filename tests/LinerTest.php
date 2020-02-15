<?php
declare(strict_types=1);
// ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/EmailTest.php
use zxc\Linear;
use zxc\BamboniException;
use PHPUnit\Framework\TestCase;

//require_once "src/Email.php";
include_once("vendor/rok9ru/trpo-core/LogAbstract.php");
include_once("vendor/rok9ru/trpo-core/LogInterface.php");
include_once("vendor/nightbiribidzhann/zxc/Log.php");
include_once("vendor/rok9ru/trpo-core/EquationInterface.php");
include_once("vendor/nightbiribidzhann/zxc/BamboniException.php");
include_once("vendor/nightbiribidzhann/zxc/Linear.php");
include_once("vendor/nightbiribidzhann/zxc/Quadratic.php");


final class LinerTest extends TestCase
{
	 public function testLinearUr(): void
    {
        $this->expectException(zxc\BamboniException::class);

        $a = new zxc\Linear();
        $a->ur(0,1);
    }
		 public function testLinearUr2(): void
    {
        $this->expectException(zxc\BamboniException::class);

        $a = new zxc\Linear();
        $a->ur(0,4);
    }
	    public function testLinearUr3(): void
    {
		$solver = new zxc\Linear();
		$root = $solver->ur(1,2);
		$this->assertEquals($root,[-2]);
    }
	public function testLinearUr4(): void
    {
		$solver = new zxc\Linear();
		$root = $solver->ur(2,6);
		$this->assertEquals($root,[-3]);
    }
	
}
