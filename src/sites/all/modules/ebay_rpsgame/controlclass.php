<?php

/**
*
* EBAY  - ROCK PAPER SCISSORS GAME
* 20/11/2011
* ------
* 
* CONTROLLER CLASS
*
*/


/**
* class EbayRPSGameControlClass
* @desc: This class only has one function,
*  run, that should always return a value, array
* to be used in the view
*/


class EbayRPSGameControlClass {

	private	$pageVars; // the attribute/array of processed variables to be returned to the bootstrap
	private	$route; // the attribute mirroring the input parameter of route, defining how the
			   //control should process

	public function __construct() {
		$this->pagevars = array();
	}

	/**
	* function run
	* @description: This public function is called by the
	* router. This and the constructor are the only exposed functions.
	* this returns an array for the view to process/display
	*/
	public function run($route) {
		$this->route = $route;
		$this->chooseControls();
		$this->browserCheck();
		$this->pageVars["route"] = $this->route;
		return $this->pageVars;
	}

	/**
	* private function chooseControls
	* @description: This function processes the route and calls controlling methods
	*  and returns an array of proce
	*/
	private function chooseControls() {
		if ($this->route["control"]=="game") {
			$this->doGameStage();
		} 
	}

	/**
	* private function doGameStage
	* @description: This function processes the action in the game stage and calls controlling methods
	*  and modifies the attribute of processed vars for view
	*/
	private function doGameStage() {
		if ($this->route["action"]=="start") {
			require_once('sessionclass.php');
			$session = new EbayRPSGameSessionClass();	
			$session->reset();
			$this->pageVars["stage"] = "start";
		} else if ($this->route["action"]=="choosePlayers") {
			if (isset($_REQUEST["run"]) && $_REQUEST["run"]=="run") {
				$this->savePlayerChoices();
				// change the action and reroute to play stage
				$this->route["action"]="play";
				$this->chooseControls();
			} else {
				drupal_add_js(drupal_get_path('module', 'ebay_rpsgame') .'/js/choosePlayers.js');
				$this->pageVars["stage"] = "choosePlayers";
			}
		} else if ($this->route["action"]=="play") {
			$this->processPlayerChoices();
			$this->pageVars["stage"] = "play";
		} else if ($this->route["action"]=="thanks") {
			$this->pageVars["stage"] = "thanks";
		}		
	}

	/**
	* private function 
	* @description: This function processes the player choices in the player choice stage,
	*  and saves them in a session
	*/
	private function savePlayerChoices() {
		require_once('sessionclass.php');
		$session = new EbayRPSGameSessionClass();	
		$session->setVar("player1type", $_REQUEST["player1type"])	;
		if ($_REQUEST["player1type"]=="human") {
			$session->setVar("player1choice", $_REQUEST["player1choice"])	;
		}	
		$session->setVar("player2type", $_REQUEST["player2type"])	;
		if ($_REQUEST["player2type"]=="human") {
			$session->setVar("player2choice", $_REQUEST["player2choice"])	;
		}
	}

	/**
	* private function 
	* @description: This function processes the player choices in the game stage
    * then returns who won
	*/
	private function processPlayerChoices() {
		require_once('sessionclass.php');
		$session = new EbayRPSGameSessionClass();	
		$this->pageVars["player1"]["type"]=$session->getVar("player1type");
		$this->pageVars["player2"]["type"]=$session->getVar("player2type");
		// assign the choice for player one, human or computer
		if ($this->pageVars["player1"]["type"]=="human") {
			$this->pageVars["player1"]["choice"] = $session->getVar("player1choice") ;
		} else {
			$this->pageVars["player1"]["choice"] = $this->getRandomPlayerChoice() ;
		}
		// assign the choice for player two, human or computer
		if ($this->pageVars["player2"]["type"]=="human") {
			$this->pageVars["player2"]["choice"] = $session->getVar("player2choice") ;
		} else {
			$this->pageVars["player2"]["choice"] = $this->getRandomPlayerChoice() ;
		}
		// calculate winner
		$winstatus = $this->calculateWinner($this->pageVars["player1"]["choice"], $this->pageVars["player2"]["choice"]);
		// assign results to view vars
		$this->pageVars["player1"]["result"]=$winstatus[0];
		$this->pageVars["player2"]["result"]=$winstatus[1];
	}

	/**
	* private function 
	* @description: This function returns a random choice on the computer's behalf,
	*/
	private function getRandomPlayerChoice() {
		$choices = array("rock", "paper", "scissors");
		$key = array_rand($choices) ;
		return $choices[$key];
	}

	/**
	* private function 
	* @description: This function processes the winner,
	*  and returns an array of win states in the form of
	*  win, draw or lose for each player
	*
	* GC MODIFIED CLASS: 
	* The previous switch has been replaced with arrays
	*/
	private function calculateWinner($player1, $player2) {
		$possibilities = array();
		$possibilities["scissors"] = array( "rock" => "lose", "paper" =>"win", "scissors" =>"draw" );
		$possibilities["rock"] = array( "paper" => "lose", "scissors" =>"win", "rock" =>"draw" );
		$possibilities["paper"] = array( "scissors" => "lose", "rock" =>"win", "paper" =>"draw" );
		return array($possibilities[$player1][$player2], $possibilities[$player2][$player1] );
	}

	/**
	* private function browserCheck
	* @description: This function checks what browser it is 
	*/
	private function browserCheck() {
		if ( isset($_SERVER["HTTP_USER_AGENT"]) && strpos($_SERVER["HTTP_USER_AGENT"], "Mozilla") ) {
			$this->pageVars["browser"] = "ff";
		} else if ( isset($_SERVER["HTTP_USER_AGENT"]) && strpos($_SERVER["HTTP_USER_AGENT"], "Chrome") ) {
			$this->pageVars["browser"] = "chrome";
		} else if ( isset($_SERVER["HTTP_USER_AGENT"]) && strpos($_SERVER["HTTP_USER_AGENT"], "Internet Explorer") ) {
			$this->pageVars["browser"] = "ie";
		}
	}

}


