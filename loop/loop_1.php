<?php 
echo " 2nd class (loop Problem 1) </br>";



$n = $_POST['n'];
if(isset($_POST['submit'])){

  
    for($i = 1; $i<$n; $n--){

        echo  $n ."</br>";
    }



}

?>


<form action="" method="POST">
  <input type="text"  name="n" value="<?=$n?>"/>
 
  <input type="submit" name="submit" value="Submit">
</form> 