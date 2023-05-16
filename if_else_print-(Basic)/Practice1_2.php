<?php
// problem 1 start
echo "Problem 1 <br/>";
echo "I Love Practice </br>";

?>





<?php
// problem 2 start
echo " <br/> Problem 2 </br>";
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

echo " </br> Addition (+): ";
$add =  $_POST['a'] + $_POST['b'];
echo $add;

echo " </br> Subtraction (-): ";
$sub =  $_POST['a'] - $_POST['b'];
echo $sub;
echo " </br> Multiplication (*): ";
$mul =  $_POST['a'] * $_POST['b'];
echo $mul;
echo " </br> division (/): ";
$div =  $_POST['a'] / $_POST['b'];
echo $div;


?>
