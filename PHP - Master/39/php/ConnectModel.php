<?php

class ConnectModel
{
    /* properties */
    protected $connect;

    protected $table;

    protected $server = 'mysql';
    protected $host = "localhost";
    protected $db = "my_tasks";
    protected $charset = "utf8mb4";
    protected $username = "root";
    protected $password = "";
    protected $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false
    ];

    public function __construct()
    {
        if ($this->server == 'mysql') {
            $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
            try {
                $this->connect = new PDO($dsn, $this->username, $this->password, $this->options);
            } catch (\PDOException $e) {
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
            }
        }
    }


    public function select(string $query, $params = [])
    {
        $stmt = $this->connect->prepare($query);
        $stmt->execute($params);
        $output = $stmt->fetchAll();
        return $output;
    }


    public function selectOne(string $query, $params = [])
    {
        $stmt = $this->connect->prepare($query);
        $stmt->execute($params);
        $output = $stmt->fetch();
        return $output;
    }


    public function data(string $query, $params)
    {
        $stmt = $this->connect->prepare($query);
        $output = $stmt->execute($params);
        return $output;
    }


    /* ----------------------  Light weight methods ---------------------- */

    public function table(string $table)
    {
        $this->table = $table;
    }

    public function all()
    {
        $query = "SELECT * FROM $this->table";
        $stmt = $this->connect->prepare($query);
        $stmt->execute();
        $output = $stmt->fetchAll();
        return $output;
    }

    public function desc(array $output)
    {
        return array_reverse($output);
    }
}