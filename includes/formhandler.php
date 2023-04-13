<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $favouritepet = htmlspecialchars($_POST['favouritepet']);

    $errorMessage = '';

    if (empty($firstname)) {
        $errorMessage = 'Please enter your first name.';
    }

    if (empty($lastname)) {
        $errorMessage = 'Please enter your last name.';
    }

    if ($errorMessage) {
        $_SESSION['error_message'] = $errorMessage;
        header("Location: ../index.php");
    } else {
        echo "The following is the data that the user submitted:";
        echo "<br>";
        echo $firstname;
        echo "<br>";
        echo $lastname;
        echo "<br>";
        echo $favouritepet;

        //sends user back to home page instead of seeing the data he entered.
        header("Location: ../index.php");
    }
} else {
    header("Location: ../index.php");
}

