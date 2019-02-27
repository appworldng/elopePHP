<?php

/**
 * Filename:      database.php
 * Framework:     elopePHP
 * Framework URI: https://github.com/chigozieorunta/elopePHP
 * Domain Path:   /config
 * Description:   The database class with a singleton pattern for instantiation
 * Author:        Chigozie Orunta
 * Version:       1.0.0
 * Licence:       MIT
 * Author URI:    https://github.com/chigozieorunta
 * Last Change:   2019/02/27
 */

Database::getInstance();

 /**
 * Class Database
 */
class Database {
    /**
	 * Private static variables
	 *
	 * @var string
	 */
    private static $localhost;
    private static $username;
    private static $password;
    private static $database;

    /**
	 * Public static variables
	 *
	 * @var string
	 */
    public static $connectionID;
    public static $connectionErrMsg;

    /**
	 * Constructor
	 *
	 * @since  1.0.0
	 */
    public function __construct() {
        self::$localhost = '';
        self::$username = '';
        self::$password = '';
        self::$database = '';
        self::connect();
    }

    /**
	 * Connection class
     * 
	 * @access private
	 * @since  1.0.0
	 */
    private static function connect() {
        if(!self::$connectionID = 
            mysqli_connect(
                self::$localhost, 
                self::$username, 
                self::$password, 
                self::$database
            )
        ) self::$connectionErrMsg = 'Unable to connect';
    }

    /**
	 * Points the class, singleton.
	 *
	 * @access public
	 * @since  1.0.0
	 */
    public static function getInstance() {
        static $instance;
        if($instance === null) $instance = new self();
        return $instance;
    }
}

?>