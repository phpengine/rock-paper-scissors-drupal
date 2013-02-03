<?php

class RPSNewCoreDrupalHelperClassTest extends PHPUnit_Framework_TestCase {

    public function setUp() {
        require_once("../bootstrap.php");
    }

    public function testGetFuncWillExecuteALoadedFunction() {
        $dHelper = new Core\DrupalHelper() ;
        $valueFromDHelper = $dHelper->getFunc("ceil", "0.8");
        $this->assertTrue( !is_null($valueFromDHelper) );
    }

    public function testGetFuncWillExecuteALoadedFunctionAndReturnACorrectValue() {
        $dHelper = new Core\DrupalHelper() ;
        $valueFromDHelper = $dHelper->getFunc("ceil", "0.8");
        $valueFromDirectFunction = ceil("0.8");
        $this->assertTrue( $valueFromDHelper==$valueFromDirectFunction );
    }

}