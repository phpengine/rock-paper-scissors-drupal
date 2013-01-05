<?php

Namespace Controller ;

class Page extends Base {

    public function execute($pageVars) {
        $pageFactory = new \Model\PageFactory();
        $pageModel = $pageFactory->getPageModel($pageVars["route"]["action"]);;
        $this->content["pageData"] = $pageModel->getPageData();
        return array ("type"=>"view", "view"=>"standardPage", "pageVars"=>$this->content);
    }

}