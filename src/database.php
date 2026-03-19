<?php
class DB
{
    private $db;

    public function __construct($config)
    {
        $connectionString = $config['driver'] . ':' . $config['database'];

        $this->db = new PDO('mysql:host=mysql;port=3306;dbname=bookwise;user=user;charset=utf8mb4', 'user', 'password');
    }

    public function query($query, $class = null, $params = [])
    {
        $prepare = $this->db->prepare($query);
        if ($class) {
            $prepare->setFetchMode(PDO::FETCH_CLASS, $class);
        }
        $prepare->execute($params);

        return $prepare;
    }
}

$database = new DB($config['database']);