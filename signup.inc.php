<?php
include_once 'dbh.inc.php';

$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


//INSERTING DATA INTO DATABASE
     $sql = "INSERT INTO users (user_first, user_last, user_email, 
     user_uid, user_pwd) VALUES (?,?,?,?,?);";
     $stmt = mysqli_stmt_init($conn);
     if(!mysqli_stmt_prepare($stmt, $sql)){
         echo "SQL statement failed";
     } else {
         mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd);
         mysqli_stmt_execute($stmt);

     }
     
     
     
     
     //mysqli_query($conn, $sql);//will work without assigning $result to a variable
header("Location: ./index.php?signup=success");