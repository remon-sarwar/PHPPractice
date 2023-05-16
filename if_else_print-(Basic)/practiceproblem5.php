
<?php
echo " <br/>Practice Problem 5 Gucci Bag </br>";
$n = $_POST['n'];

?>


<form action="" method="POST">
  <input type="text"  name="n" value="<?=$n?>"/>
 
  <input type="submit" value="Submit">
</form> 

<?php

$a = 10000; //Gucci Bag
$b = 5000; //Levis Bag
$c = 20000; //Gucci Belt

if($a<=$n && $c>=$n){
    echo "Gucci Bag";

}
elseif($b<=$n && $a>$n){
    echo "Levis Bag";
}

elseif($c < $n){
    echo "Gucci Bag </br>";
    echo "Gucci Belt </br>";
}
else{
    echo "Something";
}


?>



