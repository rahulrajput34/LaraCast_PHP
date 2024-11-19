<?php
// in the java we have . and in php we have ->
class Database {
    public $connection;

    // When the intance is created that time its going to called
    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";
        $this->connection = new PDO($dsn);
    }

    public function query($query)
    {
        // this->connection for this vairbale and then preprare which is the method of the in-build databse class
        $statement = ($this->connection)->prepare($query);
        $statement -> execute();
        // TODO: the fetchAll is going to give you the array inside the array
        // And fetch gives us the array only
        // return $statement -> fetchAll(PDO::FETCH_ASSOC);

        return $statement;
    }

}
