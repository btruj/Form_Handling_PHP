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
//internal built-in functions

//$string = "Hello World!";

//echo strlen($string);//counts the length of the string
//echo strpos($string, "o");//returns the index of where o is inside string "Hello World!" which is 4
//echo str_replace("World!", "Bryan", $string);//replaces string "World!" with "Bryan" in this example
//echo strtolower($string);//sets string to all lower case
// strtoupper($string);//sets string to all upper case
//echo substr($string, 2, 2);//substring - will output ll if it was 2, -2 output is llo worl
//print_r(explode(" ", $string)); //converts string to array where you want to take apart or divide string in this case we are taking apart/dividing the space which then the index 0 will be hello and index 1 is world! echo will not work; must use print_r method
  
//$number = -5.5;

//echo abs($number);//outputs absolute value of -5.5 which is 5.5
//echo round($number);//outputs the rounded value to whole number of -5.5 which is -6
//echo pow(2, 3);//outputs the power of 2 to 3 which is 2*2*2=8
//echo sqrt(16);//outputs the square root of 16 which 4
//echo rand(1, 100);//outputs a random number between 1 and 100
  
//$array = ["apple", "banana", "orange"];

//echo count($array);//outputs number of data inside array which is 3
//echo is_array($array);//outputs 1 meaning true because 1 means true and 0 means false

//array_push($array, "kiwi");//pushes kiwi to the end of array
//print_r($array);//outputs "kiwi" at the end of array with index included 3 => kiwi

//array_pop($array);//removes last index from the array
//print_r($array);// outputs array without last index in original array

//print_r(array_reverse($array));//outputs array in reverse order
  

//$array1 = ["apple", "banana", "orange"];
//$array2 = ["kiwi"];

//print_r(array_merge($array1, $array2));//merges both array1 and array2 into one array  
  

//echo date("Y-m-d H:i:s");// date format in year-month-day  hour-minute-second
//echo time();unix timestamp-will show you the time in seconds from now and jan 1 1970

//$date = "2023-4-11 12:00:00";
//echo strtotime($date);// getting fix time from 1970 jan 1 to time inside variable $date.
  

//Creating my own functions

// function newCalc($x){
//   $newnr = $x * 0.75;
//   echo "Here is 75% of what you wrote: " .$newnr;
// }
//  $x = 100;
//  newCalc($x);

//  echo "<br>";

// $a = 10;
// newCalc($a);

//foreach loop
$array = ["apple", "banana", "orange"];

foreach($array as $value){
    echo "My fruit is a " .$value . "<br>";
//outputs string sentence and value inside array on a new line(3 lines for each fruit)
}

  ?>

</body>
</html>