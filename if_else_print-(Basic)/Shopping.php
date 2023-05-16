<?php
echo " Assignment 1 (Shopping Problem) </br>";
$n = $_POST['n'];

?>


<form action="" method="POST">
  <input type="text"  name="n" value="<?=$n?>"/>
 
  <input type="submit" value="Submit">
</form> 

<?php

$a = 1000;
$b = 500;
$c = 1500;

if($a<=$n && $c>$n){
    echo "I will buy Punjabi";

}
elseif($b<=$n && $a>$n){
    echo "I will buy new shoes";
}

elseif($c <= $n){
    echo "I will buy Punjabi </br>";
    echo "I will buy new shoes </br>";
    echo "</br> Alisa will buy new shoes </br>";
}
else{
    echo "Bad luck!";
}


?>

