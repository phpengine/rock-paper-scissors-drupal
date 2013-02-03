<?php

Namespace Core ;

class DrupalHelper {

    public function getFunc($function, $params = array() ) {
        if (function_exists($function)) {
            $executionResult = $function($params);
            return $executionResult; }
        return null;
    }

}