<?php

$bootStrap = new bootStrapForTests();
$bootStrap->launch();

class bootStrapForTests {

    public function launch() {
        $basePath = str_replace('build/tests/phpunit', "", dirname(__FILE__));
        require_once ($basePath."src/sites/all/modules/gc_rpsgame/AutoLoad.php");
        $autoLoader = new \Core\autoLoader();
        $autoLoader->launch();
    }

}