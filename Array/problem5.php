<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=f, initial-scale=1.0">
    <title>Array Problem 5</title>
</head>
<body>
    <h4>Question 5</h6>
    <pre>
Write a program that takes an array of integers as input and outputs the indices of all even numbers in the array.
Input: [5, 2, 6, 1, 8]
Output: 1, 2, 4

    </pre>
</br>
<h4>Answear: </h4>
<!-- <form action="">
    <input type="text" name="" id="" valu="" placeholder="First input"/>
    <button type="submit">submit</button>

</form> -->

<?php

$array = array(5, 2, 6, 1, 8);


for ($i=0; $i<=sizeof($array); $i++) {    
    
    if ($array[$i]%2 ==0) {
        
        echo $i;
    }
}



?>


</body>
</html>
