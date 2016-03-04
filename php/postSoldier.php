<?php
    header('Content-Type: application/json');
    include_once("classSoldier.php");
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);   
    $soldier = new Soldier();
    $soldier->name = $request->name;
    $soldier->house = $request->house->id;    
    $soldier->setHouse();
    $soldier->salvar();          
?>