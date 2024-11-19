<?php
// We can give the all that  in the database so that if we have another data we can pass it over here
// Generally we pass the api key related to this database over here
return [
    'database' => [
        'host' => 'localhost',
        'port' => 3306,
        'dbname' => 'myapp',
        'charset' => 'utf8mb4'
    ],
     
    // for example
    'services' => [
        'prerender' => [
            'token' => '',
            'secret' => ''
        ]
    ]

];