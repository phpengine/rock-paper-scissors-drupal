<?php


class EbayRPSGameViewClassTest extends PHPUnit_Framework_TestCase {

    private $route ;
    private $control ;
    private $view ;


    public function setUp() {

        require_once("bootstrap.php");

        require_once(bootstrapForTests::getBasePath()."src/sites/all/modules/ebay_rpsgame/routerClass.php");
        $this->route = new EbayRPSGameRouterClass();

        require_once(bootstrapForTests::getBasePath()."src/sites/all/modules/ebay_rpsgame/controlclass.php");
        $this->control = new EbayRPSGameControlClass();

        require_once(bootstrapForTests::getBasePath()."src/sites/all/modules/ebay_rpsgame/viewclass.php");
        $this->view = new EbayRPSGameViewClass() ;

        $route = $this->route->run();
        $pageVars = $this->control->run($route);
    }

    public function testdoDisplaySteps() {
        $reflector = new ReflectionMethod($this->view, "doDisplaySteps");
        $reflector->setAccessible(true);
        $htmlvar = $reflector->invoke($this->view);
        // check that output starts correctly
        $this->assertStringStartsWith("<!--BEGIN .recent-wrap -->", $htmlvar );
        // check that output ends correctly
        $this->assertStringEndsWith("<!--END .recent-wrap --></div>", $htmlvar );
    }


	
    /**
    * this tests the header html starts correctly
    *//*
    public function testcreateHeaderHtml() {
	$reflector = new ReflectionMethod($this->view, "createHeaderHtml");
	$reflector->setAccessible(true);
	$htmlvar = $reflector->invoke($this->view);
	// check that output starts correctly
	$this->assertStringStartsWith("<!-- BEGIN html -->", $htmlvar );
    }*/

	
    /**
    * this tests the footer html ends correctly
    *//*
    public function testcreateFooterHtml() {
	$reflector = new ReflectionMethod($this->view, "createFooterHtml");
	$reflector->setAccessible(true);
	$htmlvar = $reflector->invoke($this->view);
	// check that output starts correctly
	$this->assertStringEndsWith("</html>", $htmlvar );
    }*/


}
