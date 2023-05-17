<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=f, initial-scale=1.0">
    <title>Array Problem 1</title>
</head>
<body>
    <h4>Question 1</h6>
    <pre>Write a program that takes an array of integers as input and outputs the sum of all even numbers in the array.
        Input:	 [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
        Output: 30
    </pre>
</br>
<h4>Answear: </h4>
<!-- <form action="">
    <input type="text" name="" id="" valu="" placeholder="First input"/>
    <button type="submit">submit</button>

</form> -->

<?php

$array = array(1,2,3,4,5,6,7,8,9,10);
$sum = 0;

for ($i=0; $i<sizeof($array); $i++) {    
    
    if ($array[$i]%2 ==0) {
        $sum += $array[$i];
    }
}

echo $sum;






?>


</body>
</html>
