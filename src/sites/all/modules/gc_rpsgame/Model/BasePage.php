<?php

Namespace Model;

class BasePage {

    public $title;
    public $subTitle;
    public $content;

	public function __construct() {
        $this->setTitle();
        $this->setSubTitle();
        $this->setContent();
    }

    public function getPageData() {
        $pageData = array();
        $pageData["title"] = $this->title;
        $pageData["subTitle"] = $this->subTitle;
        $pageData["content"] = $this->content;
        return $pageData; }

}