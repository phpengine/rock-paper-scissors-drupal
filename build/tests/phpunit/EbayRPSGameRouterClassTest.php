<?php

class EbayRPSGameRouterClassTest extends PHPUnit_Framework_TestCase {

    private $router;

    public function setUp() {
        require_once(bootstrapForTests::getBasePath()."/sites/all/modules/ebay_rpsgame/routerClass.php");
	    $this->router = new EbayRPSGameRouterClass() ;
    }

    public function testrun() {
        $testroute = $this->router->run();
        // check the returned array has 4 elements (keys + vals)
        $this->assertCount(4, $testroute );
        // check that array has key control
        $this->assertArrayHasKey("control", $testroute );
        // check that array has key action
        $this->assertArrayHasKey("action", $testroute );
    }

}