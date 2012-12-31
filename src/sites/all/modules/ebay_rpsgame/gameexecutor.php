<?php

/**
*
* EBAY  - ROCK PAPER SCISSORS GAME
* 20/11/2011
* ------
* EXECUTOR
*
*/


/**
* class EbayRPSGameExecutorClass
* @desc: This class only has one exposed method,
*  run, that should always return a value - parsed html output
*/
class EbayRPSGameExecutorClass {


	private $route; // the router object
	private $control; // the controller object
	private $view; // the view object

	/**
	* public __construct
	* @desc: get required class files and instantiate
	* objects
	*/
	public function __construct() {
		// include the required files
		require_once("routerClass.php"); // the router class
		require_once("controlclass.php"); // the controllers class
		require_once("viewclass.php"); // the view class
		// instantiate objects
		$this->route = new EbayRPSGameRouterClass();
		$this->control = new EbayRPSGameControlClass();
		$this->view = new EbayRPSGameViewClass();
	}


	/**
	* public function run
	* @desc: This public function is called by the
	* hook_block and returns html for the block. It invokes
    * the router to parse the request variables for the game
	* into an array for the controller, which in turn outputs
	* page variables for the view.
	*/
	public function run() {
		$route = $this->route->run();
		$pageVars = $this->control->run($route);
		$output = $this->view->run($pageVars);
		return $output ;
	}

}
