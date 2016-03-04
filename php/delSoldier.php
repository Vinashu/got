<?php
    header('Content-Type: application/json');
    include_once("classSoldier.php");
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);   
    $soldier = new Soldier();
    $soldier->localizar($request->id);
    $soldier->deletar();          
?>