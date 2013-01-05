<?php

phpMDCiExecutor::execute();

class phpMDCiExecutor {

    public static function execute(){
        self::setWorkingDirectory();
        self::performTests(); }

    private function setWorkingDirectory(){
        $scriptLocation = dirname(__FILE__);
        chdir($scriptLocation); }

    private function performTests(){
        $basePath = str_replace('build/config/phpmd', "", dirname(__FILE__));
        $command = 'phpmd '.$basePath.'src/sites/all/modules/gc_helloworld xml '.dirname(__FILE__).'/rules/standard.xml ';
        $command .= ' --reportfile '.$basePath.'build/reports/phpmd/xml/report.xml';
        self::executeAndOutput($command); }

    private static function executeAndOutput($command) {
        $outputArray = array();
        exec($command, $outputArray);
        echo "\nOutput for Command $command:\n";
        foreach ($outputArray as $outputValue) {
            echo "$outputValue\n"; } }

}

?>