<?php 
echo " 2nd class (loop Problem 2) </br>";



$n = $_POST['n'];
if(isset($_POST['submit'])){

  
    for($i = 0; $i<$n; $i++){

        echo $i.'. '. "MD. Sarwar Jahan </br>";
    }



}

?>


<form action="" method="POST">
  <input type="text"  name="n" value="<?=$n?>"/>
 
  <input type="submit" name="submit" value="Submit">
</form> 