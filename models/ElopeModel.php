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
    protected $errorMessage;
    protected $className;
    protected $record;

    /**
	 * Constructor
	 *
	 * @since  1.0.0
	 */
    public function __construct() {
        self::$connectionID = Database::$connectionID;
        $this->className = str_replace("Model", "", get_class($this));
    }

    /**
	 * fetchAll() Method
     * 
	 * @access public
	 * @since  1.0.0
	 */
    public function fetchAll() {
        $sql = "SELECT * FROM ".$this->className;
        $result = mysqli_query(self::$connectionID, $sql);
        $records = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach($records as $record) {
            $newObj = new self();
            foreach($record as $key=>$value) {
                $newObj->$key = $value;
            }
            $allRecords[] = $newObj;
        }
        return $allRecords;
    }
   
    /**
	 * getRecord($id) Method
     * 
	 * @access public
	 * @since  1.0.0
	 */
    public function getRecord($id) {
        $sql = "SELECT * FROM ".$this->className." WHERE id = $id";
        $result = mysqli_query(self::$connectionID, $sql);
        $record = mysqli_fetch_array($result, MYSQLI_ASSOC);
        foreach($record as $key=>$value) {
            $this->record->$key = $value;
        }
        return $this->record;
    }

    /**
	 * addRecord($args) Method
     * 
	 * @access public
	 * @since  1.0.0
	 */
    public function addRecord($args) {
        foreach($args as $key=>$value) {
            $columns .= $key.' = "'.mysqli_real_escape_string(self::$ConnectionID, $value).'", ';
        }
        $columns = rtrim(trim($columns), ',');
        $sql = "INSERT INTO ".$this->className." SET ".$columns;
        $result = mysqli_query(self::$connectionID, $sql);
    }

    /**
	 * editRecord($id, $args) Method
     * 
	 * @access public
	 * @since  1.0.0
	 */
    public function editRecord($id, $args) {
        foreach($args as $key=>$value) {
            $columns .= $key.' = "'.mysqli_real_escape_string(self::$ConnectionID, $value).'", ';
        }
        $columns = rtrim(trim($columns), ',');
        $sql = "UPDATE ".$this->className." SET ".$columns." WHERE id = $id";
        $result = mysqli_query(self::$connectionID, $sql);
    }

    /**
	 * delRecord($id) Method
     * 
	 * @access public
	 * @since  1.0.0
	 */
    public function delRecord($id) {
        $sql = "DELETE FROM ".$this->className." WHERE id = $id";
        $result = mysqli_query(self::$connectionID, $sql);
    }

    /**
     * query Method
     * 
     * @access public static
     * @since 1.0.0
     */
    public static function query($sql) {
        $command = explode(" ", $sql);
        $result = mysqli_query(self::$connectionID, $sql);
        if($command[0] == "SELECT") {
            $records = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach($records as $record) {
                $newObj = new self();
                foreach($record as $key=>$value) {
                    $newObj->$key = $value;
                }
                $allRecords[] = $newObj;
            }
            return $allRecords;
        }
    }
}

?>