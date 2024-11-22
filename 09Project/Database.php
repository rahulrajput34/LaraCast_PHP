<?php
class Database {
    public $connection;
    public $statement;

    public function __construct($config , $username = 'root', $password = '')
    {
        $dsn = 'mysql:'.http_build_query($config, '', ';');
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $this->statement = ($this->connection)->prepare($query);
        $this->statement -> execute($params);
        // Here it return the statement over here
        // return $statement;
        
        // But we are going to return the same instance of the database to own the fetch method in note.php
        // after return this instead of the statement then we do not have access of the fetch method in the note.php
        return $this;
    }

    function get()
    {
        return $this->statement->fetchAll();
    }

    // Now we are creating our own fetch method
    function find()
    {
        // statement->fetch();  // we can not do this because we do not have the access of the statement
        // So we put the statement outside the function and now we can access the statement
        return $this->statement->fetch();
    // Now we own the this method
    }

    // Now we are creating our own method which do both steps together
    function findOrFail()
    {
        // whatever the find method return
        $result = $this->find();

        // Now, we are checking condition over here
        if(!$result)
        {
            abort();
        }

        return $result;
    }

}


