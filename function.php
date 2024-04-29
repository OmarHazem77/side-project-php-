<!-- 0 -->
<?php
function traffic($color){
    if($color=="red"){
        echo "stop";
    }
    elseif($color=="green"){
        echo "go";

    }
    elseif($color=="yellow"){
        echo "ready";
    }
}

    ?>
   

<h1><?php traffic("yellow")?></h1>

<!-- 1 -->

<?php
function numbers ($number){
   
        if($number >0){
            echo 'number is positive'. "<br>";
        }
        elseif($number <0){
            echo 'number is negative' . "<br>";
        }
        else{
            echo 'number is zero'. "<br>";
    
        }
    
}
$numbers = [1,2,3,4,5,6,7,8,9,-14];
foreach($numbers as $number){?>
   <h1><?php numbers($number)?></h1>
<?php }


//2


function cheknumber($numbers){
foreach($numbers as $number){
    echo $number;
    if($number >0){
        echo 'number is positive'. "<br>";
    }
    elseif($number <0){
        echo 'number is negative' . "<br>";
    }
    else{
        echo 'number is zero'. "<br>";

    }
}
}


$numbers = [1,2,3,4,5,6,7,8,9,-14];
cheknumber($numbers);
