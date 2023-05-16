
<?php
echo " Problem 5 </br>";
$n = $_POST['n'];

?>


<form action="" method="POST">
  <input type="text"  name="n" value="<?=$n?>"/>
 
  <input type="submit" value="Submit">
</form> 

<?php

for($i = 1; $i<=$n; $i++){

    if($i % 5 == 0){
        echo $i. 'Yes </br>';
    }
    else{

        echo  $i. 'Yes </br>';
    }
    


}

?>