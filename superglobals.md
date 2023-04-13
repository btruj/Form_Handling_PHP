<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    //Superglobal variables start with $_ 
    $_SESSION["username"] = "krossing";
    echo $_SESSION["username"];

    //all SUPER global variables
    $_SERVER[""];
    $_GET[""];
    $_POST[""];
    $_REQUEST[""];
    $_FILES[""];
    $_COOKIE[""];
    $_SESSION[""];
    $_ENV[""];
   


    // echo $_SERVER["DOCUMENT_ROOT"];
    // echo "<br>";
    // echo $_SERVER["PHP_SELF"];
    // echo "<br>";
    // echo $_SERVER["SERVER_NAME"];
    // echo "<br>";
    // echo $_SERVER["REQUEST_METHOD"];
    ?>

</body>
</html>