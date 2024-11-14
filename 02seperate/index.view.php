<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- TODO: Now in the bigger project we need to seperate the php and html file in order to write the more readbale  code -->
    <!-- For that we gonna provide the reference of this file to the bottom of where we want to use this one -->
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