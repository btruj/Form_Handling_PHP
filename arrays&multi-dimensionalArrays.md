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
//associative array
$tasks = [
    "laundry" => "Daniel", 
    "trash" => "Frida", 
    "vacuum" => "Basse", 
    "dishes" => "Bella"
];

//echo $tasks["dishes"]; will show Bella on the screen

//below print method will show entire array
//print_r($tasks);

//echo count($tasks); //prints 4 on screen cause there are 4 tasks

//sort($tasks);//sort alphabetically
//print_r($tasks);//needs this method to print names alphabetically and tasks will have index number

//$tasks["dusting"] = "Tara";//how to push new data into associative array
//print_r($tasks); // shows on screen associative array with new data

//multi dimensional associative array
$food = [ 
    "fruits" => array("apple", "banana", "cherry"),
    "meat" => array("chicken", "fish"),
    "vegetables" => array("cucumber", "carrot"),
];

echo $food["vegetables"][0]//prints cucumber 


//multi dimensional array
// $food = [ 
//     array("apple", "mango"),
//     "banana",
//     "cherry"
// ];

//echo $food[0][0];//will print apple; because first is the entire first array in the index, then the other 0 is for index inside of that array
//echo $food[1];//will print banana; 
//echo $food[2];//will print cherry; 

//arrays
// $fruits = ["apple", "banana", "cherry"];
// $test = ["mango", "strawberry"];

// array_splice($fruits, 1, 0, $test); //adds mango in between apple and banana 
// print_r($fruits);
//array_push($fruits, "mango");//pushes mango to 3rd index
//print_r($fruits);//needs this method to print fruits with new index number and name in this case mango

//splice method removes array index at 1 and replaces with 
//array index 2 which is now index 1, in this case banana 
//is removed and cherry replaces it
//array_splice($fruits, 0, 1);

//echo $fruits[1];

?>
</body>
</html>