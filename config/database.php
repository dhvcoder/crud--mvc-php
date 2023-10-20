<?php

class Dbh {
    private $host;
    private $user;
    private $pass;
    private $dbname;

    private static $conn;

    public function __construct()
    {
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->dbname = "account";

        if (self::$conn == NULL) {
            self::$conn = $this->Connect();
        } else {
            return self::$conn;
        }
    }

    public function __destruct()
    {
        $this->host = "";
        $this->user = "";
        $this->pass = "";
        $this->dbname = "";
    }

    public function Connect()
    {
        try {
            $db = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
            self::$conn = new PDO($db, $this->user, $this->pass);
            self::$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return self::$conn;
        } catch (PDOException $e) {
            echo "connect failed " . $e->getMessage();
        }
    }
}

?>