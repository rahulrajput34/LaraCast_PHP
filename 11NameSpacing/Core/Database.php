<?php

// TODO: we wrap this database inside the namespace Core
// Now whenever we need this database, we need to give use core over there
namespace Core;
use PDO;


class Database
{
    public $connection;
    public $statement;

    public function __construct($config, $username = 'root', $password = '')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');
        // Here pdo expect the \Core\PDO because we gave the namespace over here
        // So we need to give the use pdo above else we need to give every pdo start with \
        // like this  \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
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
