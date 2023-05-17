<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=f, initial-scale=1.0">
    <title>Array Problem 2</title>
</head>
<body>
    <h4>Question 2</h6>
    <pre>
Write a program that takes an array of integers as input and outputs the largest number in the array.
Input:  [12, 35, 1, 10, 34, 1]
Output: 35

    </pre>
</br>
<h4>Answear: </h4>
<!-- <form action="">
    <input type="text" name="" id="" valu="" placeholder="First input"/>
    <button type="submit">submit</button>

</form> -->

<?php

$array = array(12, 35, 1, 10, 34, 1);
$max = 12;

for ($i=0; $i<sizeof($array); $i++) {    
    if ($array[$i]> $max) {
        $max = $array[$i];
       
    }
}
echo $max;

?>


</body>
</html>
