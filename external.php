<?php
require_once('php/db.php');



$db = new Connection();
$conn = $db->openConnection();


$isAnswer = 0;
$id = 136;
$queryString = "SELECT * FROM choice WHERE choiceID = ? AND isAnswer = ?";

$query = $conn->prepare($queryString);
$query->execute([$id,$isAnswer]);

$rows = $query->fetchAll();

foreach($rows as $row){
    echo $row->description;
    echo "<br>";
}



//positional style
// $isAnswer = 0;
// $id = 136;

// $q = "SELECT * FROM choice";

// $query = $connection->prepare($q);
// $query->execute();

// $res = $query->fetchAll();

// foreach($res as $r){
//     echo $r->description;
//     echo "<br>";
// }


//fetch
// while($r = $query->fetch()){
//     print_r($r);
// }


// echo $query->rowCount();
