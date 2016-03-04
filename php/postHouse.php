<?php
    header('Content-Type: application/json');
    include_once("classHouse.php");
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);   
    $house = new House();
    $house->name = $request->name;
    $house->icon = $request->icon;
    $house->banner = $request->banner;    
    $house->salvar();          
?>