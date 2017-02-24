<?php
include_once('database.php');

// Define configuration
define("DB_HOST", "ec2-54-225-236-102.compute-1.amazonaws.com");
define("DB_USER", "jdkajrseznxdgh");
define("DB_PASS", "4111cd77f6c874baf7f0835a46d937e89124e10e93e4a0df33d731f6e052e0b8");
define("DB_NAME", "d16tjrip24b7fi");


class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
