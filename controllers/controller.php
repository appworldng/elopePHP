<?php

/**
 * Filename:      controller.php
 * Framework:     elopePHP
 * Framework URI: https://github.com/chigozieorunta/elopePHP
 * Domain Path:   /controllers
 * Description:   The Parent(master) controller class
 * Author:        Chigozie Orunta
 * Version:       1.0.0
 * Licence:       MIT
 * Author URI:    https://github.com/chigozieorunta
 * Last Change:   2019/02/27
 */

/**
 * Class Controller
 */
class Controller {
    /**
	 * Constructor
	 *
	 * @since  1.0.0
	 */
	public function __construct() {}
		
	/**
	 * Run Method
	 * 
	 * @access public
	 * @since 1.0.0
	 */
	public function run() {
		$model = $this->model;
		View::renderHTML('template');
	}
}