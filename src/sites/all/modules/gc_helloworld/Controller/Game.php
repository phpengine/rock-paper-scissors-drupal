<?php

Namespace Controller ;

class Game extends Base {

    public function execute($pageVars) {
        if ( $pageVars["route"]["action"] == "home" ) {
            return array ("type"=>"view", "view"=>"gameIntro", "pageVars"=>$this->content); }
        if ( $pageVars["route"]["action"] == "choosePlayers" ) {
            $this->drupalHelper->getFunc('drupal_add_js', 'sites/all/modules/gc_helloworld/Assets/js/choosePlayers.js');
            if (isset($_REQUEST["run"]) && $_REQUEST["run"]=="run" ) {
                $this->processGame();
                return array ("type"=>"view", "view"=>"gameComplete", "pageVars"=>$this->content); }
            return array ("type"=>"view", "view"=>"gameChoosePlayers", "pageVars"=>$this->content); }
        return array ("type"=>"view", "view"=>"gameIntro", "pageVars"=>$this->content);
    }

    private function processGame() {
        $this->content["playerChoices"] = $this->processAllPlayersAndChoices();
        $this->content["results"] = $this->calculateWinner(
                                        $this->content["playerChoices"]["p1"]["choice"],
                                        $this->content["playerChoices"]["p2"]["choice"]);
    }

    private function processAllPlayersAndChoices() {
        $playerChoices = array();
        $playerChoices["p1"] = $this->processSinglePlayer("p1");
        $playerChoices["p2"] = $this->processSinglePlayer("p2");
        return $playerChoices;
    }

    private function processSinglePlayer($playerId) {
        $playerTypeAndChoice = array();
        $playerTypeAndChoice["type"] = $_REQUEST[$playerId."type"];
        $playerTypeAndChoice["choice"] = ($playerTypeAndChoice["type"]=="human") ?
                                         $_REQUEST[$playerId."choice"] : $this->getRandomPlayerChoice() ;
        return $playerTypeAndChoice;
    }


    private function calculateWinner($player1, $player2) {
        $possibilities = array();
        $possibilities["scissors"] = array( "rock" => "lose", "paper" =>"win", "scissors" =>"draw" );
        $possibilities["rock"] = array( "paper" => "lose", "scissors" =>"win", "rock" =>"draw" );
        $possibilities["paper"] = array( "scissors" => "lose", "rock" =>"win", "paper" =>"draw" );
        $result = array();
        $result["p1"] = $possibilities[$player1][$player2];
        $result["p2"] = $possibilities[$player2][$player1];
        return $result;
    }

    private function getRandomPlayerChoice() {
        $choices = array("rock", "paper", "scissors");
        $key = array_rand($choices) ;
        return $choices[$key];
    }

}