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

            // TODO: this how we give the function inside the PHP
            function filterByAuthor($movies, $name) {
                $filteredMovies = [];
                foreach($movies as $movie) {
                    // Filter movies where 'author' is true
                    if ($movie['name'] === $name) {
                        $filteredMovies[] = $movie;
                    }
                }
                return $filteredMovies;
            }
            
        ?>
        <h1>
            Displayed By first Loop without function
        </h1>
        <ul>
            <?php foreach ($movies as $movie): ?>
                <!-- This is how we can pass the condition over here -->
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
            Display by second Loop Using function
            <?php 
            // This is going to be in array
            // echo filterByAuthor($movies);
            // So we need to loop it if we want to print
            ?>
        </h1>

        <ul>
            <!-- Its not the loop over the function its a loop over on whatever retrun from the function -->
            <?php foreach (filterByAuthor($movies, 'Leo') as $movie):?>
                <!-- This is how we can pass the condition over here -->
                <li>
                    <a href="<?=$movie['purchaseUrl']; ?>" >
                        <?=$movie['name'];?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
</body>
</html>