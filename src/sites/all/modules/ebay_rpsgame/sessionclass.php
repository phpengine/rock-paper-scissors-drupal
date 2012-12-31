<?php

/**
*
* EBAY  - ROCK PAPER SCISSORS GAME
* 20/11/2011
* ------
* 
* SESSION CLASS
*
*/


/**
* class EbayRPSGameSessionClass
* @desc: This class controls session interaction, three public methods
* set, get and reset
*/


class EbayRPSGameSessionClass {

	private $seshion; // deliberately mis-spelled

	public function __construct() {
		if( session_id() == '') {
    			// session isn't started so start
			session_start();
		}
	}

	/**
	* public function getVar
	* @description: This function gets a session variable
	*/
	public function getVar($varname) {
		return $_SESSION[$varname];
	}

	/**
	* public function setVar
	* @description: This function sets a session variable
	*/
	public function setVar($varname, $value) {
		$_SESSION[$varname] = $value;
	}

	/**
	* public function reset
	* @description: This function clears session
	*/
	public function reset() {
		$_SESSION = array();
	}

}


