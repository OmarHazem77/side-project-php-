<?php
$students =[ 
    ["name" => "omar" , "age"=> 18 , "grade" => 75 , "result "=>"c" ],
    ["name" => "mostafa" , "age"=> 54 , "grade" =>80 , "result "=> "c"],
    ["name" => "mohamed" , "age"=> 488 , "grade" => 90 , "result "=> "c"],
    ["name" => "amr" , "age"=> 152 , "grade" =>40 , "result "=> "c"] 
];

function get_grade($grade){
    if($grade >=85){
        echo 'A';
    }
    elseif($grade >=75 ){
        echo 'B';
    }
    elseif($grade >=65){
        echo 'c';
    }
    elseif($grade >=55){
        echo 'D';
    }else{
        echo 'F';
    }

}
?>
<style>
    table,th,td{
        border : 1px solid black;
        border-collapse : collapse;

    }
    th,td{
        padding:10px;
    }
</style>

<table>
    <tr>
    <th>Name</th>
    <th>Age</th>
    <th>Grade</th>
    <th>Result</th>
    </tr>
<!-- seperate to php -->
    <?php foreach($students as $student){?>
    <tr>
        <td><?= $student["name"]?></td>
        <td><?php echo $student["age"]?></td>
        <td><?php echo $student["grade"]?></td>
        <!-- مهمه جدا -->
        <td <?php if( $student["grade"] < 50) {echo  "style = 'color:red'" ;}?>>     
        <?php get_grade($student["grade"])?></td>

    </tr>
<?php } ?>
</table>
