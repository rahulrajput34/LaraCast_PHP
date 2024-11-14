<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Movies
    </h1>
        <?php
            $movies = [
                "Spiderman",
                "Tokyo",
                "Leo"
            ];
        ?>
        <!-- access element -->
        <h1>
            <?php echo $movies[0];?>
        </h1>
        <ul>
            <?php
                // foreach($movies as $movie){
                //     // WHen we want to pass exact after the name then time we can't
                //     // So we pass the varibale inside the curely brackets
                //     // Below is looks like kind of the messed sysntax
                //     echo "<li><div>{$movie}TM</div></li>";
                // }; 
            ?>
            
            <!-- TODO: -->
            <!-- Better way of giving the for each loop -->
            <?php foreach ($movies as $movie) : ?>
                <li>
                    <div>
                        <?=$movie;?>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
</body>
</html>