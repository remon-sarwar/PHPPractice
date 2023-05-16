
<?php
// problem 4 start
echo " <br/>Practice Problem 4 positive or negative or zero. </br>";
// echo "First input: ";
$a =  $_POST['a'];
?>

<form action="" method="POST">
  <input type="text"  name="a" value="<?=$a?>"/>
  <input type="submit" value="Submit">

</form> 

<?php


    if(0<$a){
        echo "This is <b>Positive</b> number";

    }
    elseif(0 == $a) {
        echo "This is <b>Zero</b> number";
    }
    else{
        echo "This is <b>Negative</b> number";
    }




?>

