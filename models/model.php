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
	 * Protected Variables
	 *
	 * @var resource
	 */
    protected static $connectionID;
    protected $className;

    /**
	 * Constructor
	 *
	 * @since  1.0.0
	 */
    public function __construct() {
        self::$connectionID = Database::$connectionID;
        $this->className = get_class();
    }
   
    /**
	 * getRecord($id) Method
     * 
	 * @access public
	 * @since  1.0.0
	 */
    public function getRecord($id) {
        $sql = "SELECT * FROM '.$this->className.' WHERE id = $id";
        $result = mysqli_query(self::$connectionID, $sql);
        $record = mysqli_fetch_array($result, MYSQLI_ASSOC);
        //Properties...
        foreach($record as $key=>$value) {
            $this->$key = $value;
        }
        return $this;
    }

    /**
	 * delRecord($id) Method
     * 
	 * @access public
	 * @since  1.0.0
	 */
    public function delRecord($id) {
        $sql = "DELETE FROM '.$this->className.' WHERE id = $id";
        $result = mysqli_query($this->connectionID, $sql);
    }
}

?>