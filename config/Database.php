<?php
class Database
{
    protected static $host     = "localhost";
    protected static $db       = "db_sample_project";
    protected static $username = "root";
    protected static $pwd      = "";
    public  static   $con;

    public function __construct()
    {
        self::$con = self::connect();
    }

    protected static function connect()
    {
        try {
            $link = mysqli_connect(self::$host, self::$username, self::$pwd, self::$db);
            if (!$link) {
                throw new exception(mysqli_error($link));
            }
            return $link;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public  function close()
    {
        mysqli_close(self::$con);
    }

    public  function run($query)
    {
        try {
            if (empty($query) && !isset($query)) {
                throw new exception("Error");
            }
            $result = mysqli_query(self::$con, $query);
            return $result;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}


