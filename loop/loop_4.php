<?php 
echo " 2nd class (loop Problem 4) </br>";



if(isset($_POST['submit'])){
  $n1 = $_POST['n1'];
  $n2 = $_POST['n2'];
  $s = 0;
    for( $i=$n1; $i<$n2; $i++){

        // echo $i.'. '. "MD. Sarwar Jahan </br>";

        if($i%2==1){

         echo $i ."</br>";

         $s += $i;

        }
          
          
    }
    



}

?>


<form action="" method="POST">
  <input type="text"  name="n1" placeholder="first number" value="<?=$_POST['n1']?>"/>
  <input type="text"  name="n2" placeholder="last number" value="<?=$_POST['n2']?>"/>
  <input type="submit" name="submit" value="Submit">
</form> 


<?php
  echo "Summation of EVEN Number of ".$_POST['n1']." to ".$n2." is = ".$s." </br>";
?>