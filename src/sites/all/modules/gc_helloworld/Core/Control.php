<?php

Namespace Core ;

class Control {

    public function executeControl($control, $pageVars, $classParams=null) {
        $className = '\\Controller\\'.ucfirst($control);
        $controlObject = new $className($classParams);
        $executionResult = $controlObject->execute($pageVars);
        return $executionResult;
    }

}