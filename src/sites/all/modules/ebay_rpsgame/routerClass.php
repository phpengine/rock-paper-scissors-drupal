<?php

/**
*
* EBAY  - ROCK PAPER SCISSORS GAME
* 20/11/2011
* ------
* 
* ROUTER CLASS
*
*/


/**
* class EbayRPSGameRouterClass
* @desc: This class only has one exposed method,
*  run, that should always return a value, array
* to be used in the controller as routing parameters
* an array with keys of control and action is passed
* back
*/
class EbayRPSGameRouterClass {

	private	$request; // the identifier that the view object is instantiated to
	private	$route; // the attribute to be passed to the view object

	public function __construct() {
		$this->request = $_REQUEST;
		$this->route = array( array( "control", "" ), array("action", "") ); // declaring array to be returned
	}

	/**
	* private function run
	* @description: This public method is called by the
	* router and the only exposed function bar constructor
	*/
	public function run() {
		$this->getRoute();
		return $this->route ;
	}

	/**
	* private function getRoute
	* @description: This perform the functions to process the route request into
	* an array. In real world Extra xss defense would be called here, as could a url
	* rewriting function.
    *
    * EXTRA CHANGE: I HAVE CHANGED THESE TWO SWITCH STATEMENTS TO in_array AS ITS
    * SHORTER / MORE ELEGANT
    *
	*/
	private function getRoute() {
		if (isset($_REQUEST["control"]) && in_array($_REQUEST["control"], array("page", "game") ) ) {
			$this->route["control"] = $_REQUEST["control"];
		} else {
			$this->route["control"]="game";
		}
		if (isset($_REQUEST["action"]) && in_array($_REQUEST["action"], array("start", "choosePlayers", "play", "thanks", "cv", "hi") ) ) {
			$this->route["action"]= $_REQUEST["action"];
		} else {
			$this->route["action"]="start";
		}
	}

}
