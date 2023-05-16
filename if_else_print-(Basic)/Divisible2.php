<?php
echo " Assignment 1 (Divisible 2 Problem) </br>";
$n = $_POST['n'];

?>


<form action="" method="POST">
  <input type="text"  name="n" value="<?=$n?>"/>
 
  <input type="submit" value="Submit">
</form> 


<?php 

for($i=1; $i<$n; $i++){

    if($n % 3 == 0 && $n % 7 == 0){
        echo $i;

    }


}

?>