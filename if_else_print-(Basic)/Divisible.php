
<?php
echo " Assignment 1 (Print it  Problem) </br>";


echo "Hello, world! I am learning C programming language. ^_^ </br>";
echo "Programming is fun and challenging. /\/\/\ </br>";

echo "</br> I want to give my 100% dedication to learn! I will succeed one day.";



echo "</br></br> Assignment 1 (Divisible 1 Problem) </br>";
$n = $_POST['n'];

?>


<form action="" method="POST">
  <input type="text"  name="n" value="<?=$n?>"/>
 
  <input type="submit" value="Submit">
</form> 


<?php 

if($n % 3 ==0){
    echo "Yes";
}

else{
    echo "No";
}

?>