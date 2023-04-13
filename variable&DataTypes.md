<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
//php statements must end in semicolons!
//when using html with php must used <?php ?> syntax
//but when NOT using html & only PHP code in file use <?php


         //$ is how you declare a variable in PHP
         $name = "Bryan T";

         //echo is how you print something to the screen
         echo $name;
         
         //Data Types or scalar types (contains one value)
         $string = "Bryan T";   // defaults to ""

         $int = 12345;     // defaults to 0

         $float = 2.566;   // defaults to 0

         $boolean = true(1) or false(0); // defaults to false

         //Array types
        $names = array("Daniel", "John", "Bella");
        //or $names = ["Daniel", "John", "Bella"];   // defaults to []


        //object type
        $object = new Car(); // defaults to null

        //example of how PHP is used
        <?php
         $name = "Bryan Trujillo";
         
         //you can assign variables to variables
         $test = $name;
        ?>

        <p> Hi! My name is <?php echo $name or use $test; ?>, and I'm learning PHP!</p>

        //another example of how PHP is correctly used with HTML
        <?php if (true) { ?>
            <p> some html text</p>
            <?php } ?>

    </body>
</html>