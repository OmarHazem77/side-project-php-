<?php

$student =[ 
    ["name" => "omar" , "age"=> 18 , "grade" => "B++"],
    ["name" => "mai" , "age"=> 54 , "grade" => "B++"],
    ["name" => "dvds" , "age"=> 488 , "grade" => "B++"],
    ["name" => "omdedefdear" , "age"=> 152 , "grade" => "B++"]
];
foreach($student as $students){
    echo "<h1>" . $students["name"] . "</h1>";
    echo "<h1>" . $students["age"] . "</h1>";
    echo "<h1>" . $students["grade"] . "</h1>";


}
