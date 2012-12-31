<?php


class EbayRPSGameControlClassTest extends PHPUnit_Framework_TestCase {

    private $route ;
    private $control ;


    public function setUp() {
        require_once(bootstrapForTests::getBasePath()."/sites/all/modules/ebay_rpsgame/routerClass.php");
	    $this->route = new EbayRPSGameRouterClass();
        require_once(bootstrapForTests::getBasePath()."/sites/all/modules/ebay_rpsgame/controlclass.php");
        $this->control = new EbayRPSGameControlClass();
    }

    public function testrun() {
	    $pageVars = $this->control->run($this->route->run());
    }

    public function testgetRandomPlayerChoice() {
        $reflector = new ReflectionMethod($this->control, "getRandomPlayerChoice");
        $reflector->setAccessible(true);
        $choice = $reflector->invoke($this->control);
        $this->assertTrue( in_array($choice, array("rock", "paper", "scissors") ) );
    }

    public function testcalculateWinner() {
        // make the private method accessible then use it to generate inputs
        $reflector1 = new ReflectionMethod($this->control, "getRandomPlayerChoice");
        $reflector1->setAccessible(true);
        $player1 = $reflector1->invoke($this->control);
        $player2 = $reflector1->invoke($this->control);
        // use generated inputs to run the calculate winner method, after making
        // it accessible
        $reflector2 = new ReflectionMethod($this->control, "calculateWinner");
        $reflector2->setAccessible(true);
        $statusray = $reflector2->invoke($this->control, $player1, $player2 );
        // check the returned array has 2 elements
        $this->assertCount(2, $statusray );
        // check the returned array val 0 is string
        $this->assertTrue( strlen($statusray[0])>0 );
        // check the returned array val 1 is string
        $this->assertTrue( strlen($statusray[1])>0 );
        // check the val 0 is either win, draw or lose
        $this->assertTrue( in_array($statusray[0], array("win", "draw", "lose") ) );
        // check the val 1 is either win, draw or lose
        $this->assertTrue( in_array($statusray[1], array("win", "draw", "lose") ) );
    }

}
