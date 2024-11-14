<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            $movies = [
                [
                    "name" => "Spiderman",
                    "author" => false,
                    "releaseYear" => 2017,
                    "purchaseUrl" => "http://example.com",
                ],
                [
                    "name" => "Leo",
                    "author" => true,
                    "releaseYear" => 2023,
                    "purchaseUrl" => "http://example.com"
                ],
                [
                    "name" => "RRR",
                    "author" => true,
                    "releaseYear" => 2022,
                    "purchaseUrl" => "http://example.com"
                ] 
            ];
            // TODO:Now what should we do if we want to filter the realease year
            // we need to create another function that's not a good practice

            // We can also create the function without the names and srote it into the varibale if want
            // TODO: this function without name is called lambda function in php
            // we give it like this because we want
            // filter = ($arr, 'movie', 'Leo')
            // This is how we can create the general function as well
            // $filter = function ($items, $key, $value) {
            // We can also give the function in the paramtre to make this more flexible
            // We also have the in-build filer if we want we can use it
            $filter = function ($items, $fn) {
                $filteredItems = [];
                foreach($items as $item) {
                    if ($fn($item)) {
                        $filteredItems[] = $item;
                    }
                }
                return $filteredItems;
            };

            // So in the later lambda function we are flexible
            // We can pass whatever we want
            $filteredMovies = $filter($movies, function($movie){
                return $movie['author'] === true;
            });
            
            //TODO: if we do not want to do all the steps we did
            // We have in-build filter function to do it in the simple way
            // This filter accept array and lambda function
            // $filteredMovies = array_filter($movies, function($movie){
            //     return $movie['author'] === true;
            // });  
        ?>
        <h1>
            Displayed By first Loop without function
        </h1>
        <ul>
            <?php foreach ($movies as $movie): ?>
                <?php if($movie['name'] === 'Leo'): ?>
                <li>
                    <a href="<?=$movie['purchaseUrl']; ?>" >
                        <?=$movie['name'];?>
                    </a>
                </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
        <h1>
        Displayed By first Loop with function
        </h1>
        <ul>
            <?php foreach ($filteredMovies as $movie):?>
                <li>
                    <a href="<?=$movie['purchaseUrl']; ?>" >
                        <?=$movie['name'];?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
</body>
</html>