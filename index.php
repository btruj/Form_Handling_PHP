<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
<!-- Add this inside the <head> tag -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Document</title>
    
</head>

<body>

<main>
<!-- Replace the toggle switch code in the <main> tag with the following -->
<div class="toggle-container">
<input id="toggle-dark-mode" class="dark-mode-toggle" type="checkbox" checked>
<label for="toggle-dark-mode"></label>

    <span class="material-icons icon sun">wb_sunny</span>
    <span class="material-icons icon moon">nightlight_round</span>
  </label>
</div>
<?php
session_start();

if (isset($_SESSION['error_message'])) {
    echo '<div class="error-message">' . $_SESSION['error_message'] . '</div>';
    unset($_SESSION['error_message']);
}
?>

  <form action="includes/formhandler.php" method="post">
    <label for="firstname">Firstname?</label>
    <input id="firstname" name="firstname" type="text" placeholder="Firstname...">

    <label for="lastname">Lastname?</label>
    <input id="lastname" name="lastname" type="text" placeholder="Lastname...">

    <label for="favouritepet">Favourite Pet?</label>
    <select id="favouritepet" name="favouritepet">
        <option value="none">None</option>
        <option value="dog">Dog</option>
        <option value="cat">Cat</option>
        <option value="bird">Bird</option>
    </select>

    <button type="submit">Submit</button>
   </form> 
</main>
    
</body>

<script>
// Check if the body has the 'dark-mode' class, if not, add it
if (!document.body.classList.contains('dark-mode')) {
    document.body.classList.add('dark-mode');
}

document.getElementById('toggle-dark-mode').addEventListener('click', function () {
    document.body.classList.toggle('dark-mode');
});

</script>

</html>