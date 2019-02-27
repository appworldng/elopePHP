<?php

/**
 * Filename:      model.php
 * Framework:     elopePHP
 * Framework URI: https://github.com/chigozieorunta/elopePHP
 * Domain Path:   /models
 * Description:   The Parent(master) model class
 * Author:        Chigozie Orunta
 * Version:       1.0.0
 * Licence:       MIT
 * Author URI:    https://github.com/chigozieorunta
 * Last Change:   2019/02/27
 */

 /**
 * Class Model
 */
class Model {
    /**
	 * Private variable
	 *
	 * @var resource
	 */
    private $connectionID;

    public function __construct() {
        $this->connectionID = Database::$connectionID;
    }
}

?>