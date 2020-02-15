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


final class EmailTest extends TestCase
{
//    public function testCanBeCreatedFromValidEmailAddress(): void
//    {
//        $this->assertInstanceOf(
//            Email::class,
//            Email::fromString('user@example.com')
//        );
//    }
//
//    public function testCannotBeCreatedFromInvalidEmailAddress(): void
//    {
//        $this->expectException(InvalidArgumentException::class);
//
//        Email::fromString('invalid');
//    }

	
	 public function testLinearUr(): void
    {
       // $this->assertClassHasAttribute('x', zxc\Linear::class);
        $this->expectException(zxc\BamboniException::class);

        $a = new zxc\Linear();
        $a->ur(0,1);
    }

    public function testLinearUr2(): void
    {
        $this->assertClassHasAttribute('x', zxc\Linear::class);
        $a = new zxc\Linear();
        $a->ur(2,0);
        //$this->assertEquals(0,$a->getx());
    }

    public function testQuadratic(): void
    {
        $this->expectException(zxc\BamboniException::class);

        $a = new zxc\Quadratic();
        $a->solve(0,0,0);
    }

    public function testQuadratic2(): void
    {
        $this->assertClassHasAttribute('x', zxc\Linear::class);
        $a = new zxc\Quadratic();
        $a->solve(2,0, 0);
        //$this->assertEquals(0,$a->getx());
    }


//     public function testQuadraticUr() : void
//     {
//        $this->assertNotEmpty(zxc\Quadratic::class);
//     }
}
