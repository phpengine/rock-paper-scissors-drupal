<?php

class RPSNewControllerBaseClassTest extends PHPUnit_Framework_TestCase {

    public function setUp() {
        require_once("../bootstrap.php");
    }

    public function testControllerBaseInstantiates() {
        $controllerBaseObject = new Controller\Base(new mockBaseDrupalHelper()) ;
        $this->assertTrue( is_object($controllerBaseObject) );
    }

    public function testControllerBaseHasContentProperty() {
        $controllerBaseObject = new Controller\Base(new mockBaseDrupalHelper()) ;
        $this->assertTrue( property_exists($controllerBaseObject,'content') );
    }

    public function testControllerBaseHasContentPropertyWithEmptyArrayValueOnInstantiation() {
        $controllerBaseObject = new Controller\Base(new mockBaseDrupalHelper()) ;
        $reflectionObject = new ReflectionObject($controllerBaseObject);
        $controllerBaseContentProperty = $reflectionObject->getProperty('content');
        $controllerBaseContentProperty->setAccessible(true);
        $controllerBaseContentPropertyValue = $controllerBaseContentProperty->getValue($controllerBaseObject);
        $this->assertSame( $controllerBaseContentPropertyValue, array() );
    }

    public function testControllerBaseSetsDrupalHelperPropertyWhenNoParamGiven() {
        $controllerBaseObject = new Controller\Base() ;
        $reflectionObject = new ReflectionObject($controllerBaseObject);
        $controllerBaseDrupalHelperProperty = $reflectionObject->getProperty('drupalHelper');
        $controllerBaseDrupalHelperProperty->setAccessible(true);
        $controllerBaseDrupalHelperPropertyValue = $controllerBaseDrupalHelperProperty->getValue($controllerBaseObject);
        $this->assertFalse( is_null($controllerBaseDrupalHelperPropertyValue) );
    }

    public function testControllerBaseSetsDrupalHelperPropertyToCorrectClassWhenNoParamGiven() {
        $controllerBaseObject = new Controller\Base() ;
        $reflectionObject = new ReflectionObject($controllerBaseObject);
        $controllerBaseDrupalHelperProperty = $reflectionObject->getProperty('drupalHelper');
        $controllerBaseDrupalHelperProperty->setAccessible(true);
        $controllerBaseDrupalHelperPropertyValue = $controllerBaseDrupalHelperProperty->getValue($controllerBaseObject);
        $this->assertTrue( $controllerBaseDrupalHelperPropertyValue instanceof \Core\DrupalHelper );
    }

}

class mockBaseDrupalHelper {

    public function getFunc($function, $params = array() ) {
        return true;
    }

}
