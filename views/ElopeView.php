<?php

/**
 * Filename:      view.php
 * Framework:     elopePHP
 * Framework URI: https://github.com/chigozieorunta/elopePHP
 * Domain Path:   /views
 * Description:   The Parent(master) view class
 * Author:        Chigozie Orunta
 * Version:       1.0.0
 * Licence:       MIT
 * Author URI:    https://github.com/chigozieorunta
 * Last Change:   2019/02/27
 */

/**
 * Class View
 */
class View {
	/**
	 * Protected Variables
	 *
	 * @var $body
	 */
    protected static $body;
	
    /**
	 * Constructor
	 *
	 * @since  1.0.0
	 */
	public function __construct() {
		$this->run();
	}

	/**
	 * getHeader Method
	 *
	 * @access private
	 * @since  1.0.0
	 */
	private function getHeader() {
		require_once('www-templates/header.php');
	}

	/**
	 * getBody Method
	 *
	 * @access private
	 * @since  1.0.0
	 */
	private function getBody() {
		require_once(self::$body);
	}

	/**
	 * getFooter Method
	 *
	 * @access private
	 * @since  1.0.0
	 */
	private function getFooter() {
		require_once('www-templates/footer.php');
	}

	/**
	 * Run Method
	 *
	 * @access private
	 * @since  1.0.0
	 */
	private function run() {
		$this->getHeader();
		$this->getBody();
		$this->getFooter();
	}
}