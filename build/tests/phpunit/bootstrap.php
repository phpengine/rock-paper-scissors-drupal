<?php

$bootStrap = new bootStrapForTests();
$bootStrap->launch();

class bootStrapForTests {

    public static function getBasePath() {
        return str_replace('build/tests/phpunit','',dirname(__FILE__)) ; }

}