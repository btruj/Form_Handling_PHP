<?php
include_once 'dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<form action="signup.inc.php" method="post">
  <input type="text" name="first" placeholder="Firstname">
  <br>
  <input type="text" name="last" placeholder="Lastname">
  <br>
  <input type="text" name="email" placeholder="E-mail">
  <br>
  <input type="text" name="uid" placeholder="Username">
  <br>
  <input type="password" name="pwd" placeholder="Password">
  <br>
  <button type="submit" name="submit">Sign Up</button>
</form>

<?php

$data = "Admin";
//created a template
$sql = "SELECT * FROM users WHERE user_uid=?;";

//created a prepared statement
$stmt = mysqli_stmt_init($conn);

//prepare the prepared statement
if(!mysqli_stmt_prepare($stmt, $sql)){
    echo "SQL statement failed";
    } else {
//bind parameters to the placeholder
    mysqli_stmt_bind_param($stmt, "s", $data);
//run parameters inside database
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    while($row = mysqli_fetch_assoc($result)){
      echo $row['user_uid']."<br>";
    }
  }


//SELECTING DATA FROM DATABASE
    // $sql = "SELECT * FROM users WHERE user_uid='Admin';";//outputs admin on screen
    // $result = mysqli_query($conn, $sql);
    // $resultCheck = mysqli_num_rows($result);

    // if($resultCheck > 0){
    //   while($row = mysqli_fetch_assoc($result)){
    //     echo $row['user_uid']."<br>";
    //   }
    // }

?>


</body>
</html>