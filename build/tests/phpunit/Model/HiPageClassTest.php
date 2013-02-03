<?php


class RPSNewModelHiPageClassTest extends PHPUnit_Framework_TestCase {

    public function setUp() {
        require_once("../bootstrap.php");
    }

    public function testObjectInstantiation() {
        $model = new \Model\HiPage();
        $this->assertTrue( is_object($model) );
    }

    public function testSetTitleSetsTitleProperty() {
        $model = new \Model\HiPage();
        $titlePropertyReflector = new \ReflectionProperty($model, 'title');
        $titlePropertyReflector->setAccessible(true);
        $titlePropertyReflector->setValue($model, null);
        $model->setTitle();
        $this->assertTrue( !is_null($titlePropertyReflector->getValue($model)) );
    }

    public function testSetTitleSetsTitlePropertyToString() {
        $model = new \Model\HiPage();
        $titlePropertyReflector = new \ReflectionProperty($model, 'title');
        $titlePropertyReflector->setAccessible(true);
        $titlePropertyReflector->setValue($model, null);
        $model->setTitle();
        $this->assertTrue(is_string($titlePropertyReflector->getValue($model)) );
    }

    public function testSetTitleSetsTitlePropertyToStringOfCorrectValue() {
        $model = new \Model\HiPage();
        $titlePropertyReflector = new \ReflectionProperty($model, 'title');
        $titlePropertyReflector->setAccessible(true);
        $titlePropertyReflector->setValue($model, '');
        $model->setTitle();
        $this->assertTrue( $titlePropertyReflector->getValue($model)=="Hi eBay" );
    }

    public function testSetSubTitleSetsSubTitleProperty() {
        $model = new \Model\HiPage();
        $subTitlePropertyReflector= new \ReflectionProperty($model, 'subTitle');
        $subTitlePropertyReflector->setAccessible(true);
        $subTitlePropertyReflector->setValue($model, null);
        $model->setSubTitle();
        $this->assertTrue( !is_null($subTitlePropertyReflector->getValue($model)) );
    }

    public function testSetSubTitleSetsSubTitlePropertyToString() {
        $model = new \Model\HiPage();
        $subTitlePropertyReflector= new \ReflectionProperty($model, 'subTitle');
        $subTitlePropertyReflector->setAccessible(true);
        $subTitlePropertyReflector->setValue($model, null);
        $model->setSubTitle();
        $this->assertTrue(is_string($subTitlePropertyReflector->getValue($model)) );
    }

    public function testSetSubTitleSetsSubTitlePropertyToStringLongerThan3() {
        $model = new \Model\HiPage();
        $subTitlePropertyReflector= new \ReflectionProperty($model, 'subTitle');
        $subTitlePropertyReflector->setAccessible(true);
        $subTitlePropertyReflector->setValue($model, null);
        $model->setSubTitle();
        $this->assertTrue(strlen($subTitlePropertyReflector->getValue($model))>3 );
    }

    public function testSetContentSetsContentProperty() {
        $model = new \Model\HiPage();
        $contentPropertyReflector= new \ReflectionProperty($model, 'content');
        $contentPropertyReflector->setAccessible(true);
        $contentPropertyReflector->setValue($model, null);
        $model->setContent();
        $this->assertTrue( !is_null($contentPropertyReflector->getValue($model)) );
    }

    public function testSetContentSetsContentPropertyToString() {
        $model = new \Model\HiPage();
        $contentPropertyReflector= new \ReflectionProperty($model, 'content');
        $contentPropertyReflector->setAccessible(true);
        $contentPropertyReflector->setValue($model, null);
        $model->setContent();
        $this->assertTrue(is_string($contentPropertyReflector->getValue($model)) );
    }

    public function testSetContentSetsContentPropertyToStringLongerThan3() {
        $model = new \Model\HiPage();
        $contentPropertyReflector= new \ReflectionProperty($model, 'content');
        $contentPropertyReflector->setAccessible(true);
        $contentPropertyReflector->setValue($model, null);
        $model->setContent();
        $this->assertTrue(strlen($contentPropertyReflector->getValue($model))>3 );
    }

    public function testGetPageDataReturnsArray() {
        $model = new \Model\HiPage();
        $this->assertTrue(is_array($model->getPageData()) );
    }

    public function testGetPageDataReturnsArrayOfCorrectStructure() {
        $model = new \Model\HiPage();
        $this->assertTrue( array_key_exists("title", $model->getPageData()) );
        $this->assertTrue( array_key_exists("subTitle", $model->getPageData()) );
        $this->assertTrue( array_key_exists("content", $model->getPageData()) );
    }


}
