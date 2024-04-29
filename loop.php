<?php
$names = array("odcd","dfdsvds","dsvdsvds");

// foreach($names as $name){
//     echo '<h1>' . $name . '</h1>';
// }


foreach($names as $name){?>
    <h1><?php echo $name ?></h1>
<?php }


$numbers = [1,2,3,4,5,6,7,8,9,-14];
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
