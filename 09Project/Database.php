<?php
class Database
{
    public $connection;
    public $statement;

    public function __construct($config, $username = 'root', $password = '')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $this->statement = ($this->connection)->prepare($query);
        $this->statement->execute($params);
        return $this;
    }

    function get()
    {
        return $this->statement->fetchAll();
    }

    function find()
    {
        return $this->statement->fetch();
    }

    function findOrFail()
    {
        $result = $this->find();

        if (!$result) {
            abort();
        }

        return $result;
    }
}
