<?php
class Database {
    public $connection;

    public function __construct($config , $username = 'root', $password = '')
    {
        // So we are passing the hardquoted string over here
        // $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";

        // To make it flexible we can pass it below of that
        // TODO: but still there is problem because here we are passing the local host hartquoted
        // We don't have answer of how to figure our from this situation
        // Whenver we do not have the solution pass it upward
        // $config = [
        //     'host' => 'localhost',
        //     'port' => 3306,
        //     'dbname' => 'myapp',
        //     'charset' => 'utf8mb4'
        // ];

        // TODO: The below syntact looking not  good so we have in-build function which make the assosative array into the query string
        // $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
        // We can either need to pass the name and all above in string or we can also pass it in the PDO if want

        // But in the query string there is also a one problem is is going to devide by &
        // Like if we do the query string of the above array then it will give the value like below
        // host=localhost&port=3306&dbname=myapp&charset=utf8mb4
        // But we want the ; in place of the &
        // But as its suggest in the documentation if we pass the third param as ; we can get rid of this problem

        // array we want to pass, prefix, seperator
        // http_build_query($config, '', ';');
        // And we can give the sql in the beganning to make it  exact same

        $dsn = 'mysql:'.http_build_query($config, '', ';');
        // dsn, name, password, array which contain contants
        // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ==> Apply all over the lines we retrive
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query)
    {
        $statement = ($this->connection)->prepare($query);
        $statement -> execute();
        return $statement;
    }

}


