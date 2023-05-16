
<?php
// problem 3 start
echo " <br/>Practice Problem 3 (EVEN) or (ODD) </br>";
// echo "First input: ";
$a =  $_POST['a'];
?>

<form action="" method="POST">
  <input type="text"  name="a" value="<?=$a?>"/>
  <input type="submit" value="Submit">

</form> 

<?php

if(0<$a){
    if($a%2==0){
        echo "<b>This is EVEN number</b>";

    }
    else{
        echo "<b>This is ODD number</b>";
    }


}
else{
    echo "<b>Enter the Valid Number</b>";
}


?>

