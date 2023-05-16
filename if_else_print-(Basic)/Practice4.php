<?php

echo " Problem 4 (variables)</br>";
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
?>

<form action="" method="POST">
  <input type="text"  name="a" value="<?=$a?>"/>
  <input type="text" name="b" value="<?=$b?>" />
  <input type="text" name="c" value="<?=$c?>" />
  <input type="text" name="d" value="<?=$d?>" />
 
  <input type="submit" value="Submit">

</form> 


<?php 
echo $a;
echo "</br>";
echo $b;
echo "</br>";
echo $c;
echo "</br>";
echo $d;



?>