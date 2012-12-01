<?php

class EbayCodePracticeCoreControlClassTest extends PHPUnit_Framework_TestCase {

    private $control;
    private $availableControls;

    public function setUp() {
        require_once("bootstrap.php");
        $this->control = new Core\Control() ;
        $this->availableControls = array("Index");
    }

    public function testexecuteControlReturnsAnArray() {
        foreach ($this->availableControls as $availableControl) {
            $currentControlOutput = $this->control->executeControl($availableControl);
            $this->assertTrue( is_array($currentControlOutput) );
        }
    }

    public function testexecuteControlReturnsAnArrayOfCorrectStructure() {
        foreach ($this->availableControls as $availableControl) {
            $currentControlOutput = $this->control->executeControl($availableControl);
            $this->assertTrue( array_key_exists("view", $currentControlOutput) );
            $this->assertTrue( array_key_exists("pageVars", $currentControlOutput) );
        }
    }

}