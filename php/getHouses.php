<?php
    header('Content-Type: application/json');
    include_once("classHouse.php"); 
    /*
    $houses = array(
        array("name" => 'Arryn', "icon" => 'imagens/icon07.png', "banner" => 'imagens/house07.jpg'),
        array("name" => 'Baratheon', "icon" => 'imagens/icon01.png', "banner" => 'imagens/house01.jpg'),
        array("name" => 'Frey', "icon" => 'imagens/icon11.png', "banner" => 'imagens/house08.jpg'),
        array("name" => 'Greyjoy', "icon" => 'imagens/icon05.png', "banner" => 'imagens/house05.jpg'),
        array("name" => 'Lannister', "icon" => 'imagens/icon03.png', "banner" => 'imagens/house03.jpg'),
        array("name" => 'Martell', "icon" => 'imagens/icon06.png', "banner" => 'imagens/house06.jpg'),
        array("name" => 'Tyrell', "icon" => 'imagens/icon04.png', "banner" => 'imagens/house04.jpg'),
        array("name" => 'Stark', "icon" => 'imagens/icon10.png', "banner" => 'imagens/house10.jpg'),
        array("name" => 'Tully', "icon" => 'imagens/icon08.png', "banner" => 'imagens/house08.jpg')                                                                                                                                
    );
    */
    $houseList = new House();
    $houses = $houseList->listar();
    echo json_encode($houses);        
?>