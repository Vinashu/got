<?php
    header('Content-Type: application/json');
    include_once("classSoldier.php"); 
    $soldierList = new Soldier();
    $army = $soldierList->listar();
    echo json_encode($army);        
?>