<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            $hero = "spiderman";
            $isWatched = true;
            
            if($isWatched) {
                $message = "You read the $hero";
            } else {
                $message = "You have not read $hero";
            };
        ?>
    <h1>
        <?php
        // TODO:
        // In php, we are able access this message because if else in php do not supports the concept of the lexical scoping
        // But the function and loop are same as javascript Which do support the concept of the lexicle scoping
            echo $message;
        ?>
        
        <!-- without  the echo keyword -->
        <?= $message ?>
    </h1>
</body>
</html>