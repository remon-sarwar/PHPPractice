<?php 
echo " 2nd class (loop Problem 6) </br>";

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

    if(0 <$n1 && 0 <$n2){

        if(0<$n1 && $n1<10 && 0<$n2 && $n2<10){
            //echo $n1;
            if ($n1==1){
                echo "One, ";
            }
            elseif($n1==2){
                echo "Two, ";
            }
            elseif($n1==3){
                echo "Three, ";
            }
            elseif($n1==4){
                echo "Four, ";
            }
            elseif($n1==5){
                echo "Five, ";
            }
            elseif($n1==6){
                echo "Six, ";
            }
            elseif($n1==7){
                echo "Seven, ";
            }
            elseif($n1==8){
                echo "Eight, ";
            }
            else{
                echo "Nine, ";
            }

            if ($n2==1){
                echo "One, ";
            }
            elseif($n2==2){
                echo "Two, ";
            }
            elseif($n2==3){
                echo "Three, ";
            }
            elseif($n2==4){
                echo "Four, ";
            }
            elseif($n2==5){
                echo "Five, ";
            }
            elseif($n2==6){
                echo "Six, ";
            }
            elseif($n2==7){
                echo "Seven, ";
            }
            elseif($n2==8){
                echo "Eight, ";
            }
            else{
                echo "Nine, ";
            }
        }

        else{
            $s = $n1+$n2;
            echo "summation of two number =".$s;

        }

    }
    else{
        echo "Enter some values";
    }
  
    //   for( $i=$n1; $i<=$n2; $i++){
  
    //       echo $i."</br>";
  
    //   }

  }


?>