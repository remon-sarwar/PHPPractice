<?php 
echo " 2nd class (loop Problem 5) </br>";

?>


<form action="" method="POST">
  <input type="text"  name="n1" placeholder="first number" value="<?=$_POST['n1']?>"/>
  <input type="text"  name="n2" placeholder="last number" value="<?=$_POST['n2']?>"/>
  <input type="submit" name="submit" value="Submit">
</form> 

<?php  
if(isset($_POST['submit'])){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
  
      for( $i=$n1; $i<=$n2; $i++){
  
          echo $i."</br>";
  
      }

  }


?>