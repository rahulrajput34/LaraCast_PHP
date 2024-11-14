<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
        // String concinate
            // echo "Hello"." World";
            $greetings = "Hello";
            echo $greetings." World <br>";
            // We can pass greetings like that if its a double quotes
            print "$greetings World <br>";
            // We need to pass it like below if its single  quotes
            echo $greetings.' World <br>';
        ?>
    </h1>
</body>
</html>