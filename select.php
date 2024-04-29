<?php
include 'connect.php'; 
$stmt = $conn->prepare("SELECT * FROM tasks");
$stmt->execute();
$tasks = $stmt -> Fetchall();
// echo '<pre>';
// print_r($tasks);
// echo '</pre>';

foreach($tasks as $task){  ?>
<h1><?= $task['name']?></h1>
<h1><?= $task['content']?></h1>
<?php
}





?>