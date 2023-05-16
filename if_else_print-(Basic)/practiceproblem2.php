
<?php
// problem 2 start
echo " <br/>Practice Problem 2 </br>";
// echo "First input: ";
$a =  $_POST['a'];
// echo "</br>";
// echo "Second input: ";
$b= $_POST['b'];

?>

<form action="" method="POST">
  <input type="text"  name="a" value="<?=$a?>"/>

  <input type="text" name="b" value="<?=$b?>" />
 
  <input type="submit" value="Submit">

</form> 

<?php

$add =  $_POST['a'] + $_POST['b'];
//echo $add;
echo " </br> $a + $b = $add";

//echo " </br> Subtraction (-): ";
$sub =  $_POST['a'] - $_POST['b'];
//echo $sub;
echo " </br> $a - $b = $sub";

//echo " </br> Multiplication (*): ";
$mul =  $_POST['a'] * $_POST['b'];
//echo $mul;
echo " </br> $a * $b = $mul";

//echo " </br> division (/): ";
$div =  $_POST['a'] / $_POST['b'];
//echo $div;
echo " </br> $a / $b = $div";


?>
