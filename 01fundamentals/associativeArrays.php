<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        // After 6 months we dont know what decalre over here
        // So we give names to it and its called associative Arrays
            $movies = [
                [
                    "name" => "Spiderman",
                    "author" => false,
                    "purchaseUrl" => "http://example.com",
                ],
                [
                    "name" => "Leo",
                    "author" => true,
                    "purchaseUrl" => "http://example.com"
                ] 
            ];
        ?>
        <!-- This is how we can use the Associative Array -->
        <ul>
            <?php foreach ($movies as $movie) :?>
                <li>
                    <a href="<?=$movie['purchaseUrl']; ?>" >
                        <?=$movie['name'];?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
</body>
</html>