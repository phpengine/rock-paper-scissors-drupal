<?php

Namespace Model;

class JuicyCVPage extends BasePage {

    public function setTitle() {
        $this->title = "Juicy Bits"; }

    public function setSubTitle() {
        $this->subTitle = "The Juicy Bits of my CV"; }

    public function setContent() {
        $this->content = "Some of the most juicy bits of my CV are here, in some nice bite sized chunks."; }

}