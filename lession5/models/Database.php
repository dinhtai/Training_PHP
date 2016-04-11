<?php

/**
 * Created by PhpStorm.
 * User: taind
 * Date: 4/11/16
 * Time: 09:25
 */
// define configuration
define("DB_HOST", "localhost");
define("DB_USER", "training_data");
define("DB_PASS", "123456");
define("DB_NAME", "php_training1");

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $dbh;
    private $error;
    private $stmt;

    /**
     * Database constructor.
     * Construct khoi tao connect toi db
     */
    public function __construct()
    {
        // set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;

        // set option
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => true,
            PDO::ERRMODE_EXCEPTION => true
        );
        // create new PDO instanse
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);

        } catch (PDOException $e) {
            var_dump($e->getMessage());
            $this->error = $e->getMessage();
        }
    }

    /**
     * Method fetch data from db with query
     * @param $query
     *
     */
    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    public function singleQuery($query)
    {
        $this->stmt = $this->dbh->query($query);
    }

    /**
     * @param $query
     * @return bool
     */
    public function execQuery($query)
    {
        try{
            $this->dbh->exec($query);
            return true;
        }
        catch(PDOException $e){
            return false;
        }
    }

    /**
     * Method When need to bind the inputs with the prepare SQL queries
     * @param $params
     * @param $value
     * @param null $type
     *
     */
    public function bind($params, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($params, $value, $type);
    }


    /**
     * Method executes
     * PDOStatement::execute
     * @return mixed
     */
    public function execute()
    {
        return $this->stmt->execute();
    }

    /**
     * Method return array of result set rows
     * PDOStatement::fetchAll PDO method
     * @return mixed
     */
    public function resultset()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Method return a single record form db
     * PDOStatement::fetch.
     * @return mixed
     */
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Method get rowcount of table
     * @return mixed
     */
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }

    /**
     * Close connect to db
     */
    public function closeConnect()
    {
        $this->dbh = null;
    }

    /**
     * @return bool
     */
    public function beginTransaction()
    {
        return $this->dbh->beginTransaction();
    }

    /**
     * @return bool
     */
    public function endTransaction()
    {
        return $this->dbh->commit();
    }
}