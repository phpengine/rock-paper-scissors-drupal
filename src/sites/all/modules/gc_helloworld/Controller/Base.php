<?php

Namespace Controller ;

class Base {

    public $content;
    public $drupalHelper;

    public function __construct($drupalHelper=null) {
        $this->content = array();
        if ($drupalHelper==null) {
            $this->drupalHelper = new \Core\DrupalHelper(); }
        else {$this->drupalHelper = $drupalHelper; }
        $this->drupalHelper->getFunc('drupal_add_css', 'sites/all/modules/gc_helloworld/Assets/css/daveCss.css'); }

}