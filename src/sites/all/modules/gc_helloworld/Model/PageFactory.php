<?php

Namespace Model;

class PageFactory {

    public function getPageModel($page) {
        $pageModelName = $this->getModelNameFromPage($page);
        return new $pageModelName();
    }

    private function getModelNameFromPage($page) {
        $pages = array("full-cv"=>"FullCV", "juicy-bits"=>"JuicyCV", "hi"=>"Hi" );
        $modelName = (isset($pages[$page])) ? $pages[$page] : null;
        $className = "\Model\\".$modelName.'Page' ;
        return new $className;
    }

}