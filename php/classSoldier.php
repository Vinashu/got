<?php
include_once("classBanco.php");
include_once("classHouse.php");
class Soldier extends Banco {   
    public $id;
    public $name;
    public $house=0;
    public function __construct(){
        if($this->house !=0){
            $this->setHouse();            
        }
    }
    
    public function localizar($id){
        $data = parent::localizar($id);
        $campos = get_object_vars($data);                        
        foreach($campos as $key => $value){
            $this->$key = $data->$key;
        }           
        $this->setHouse();
    }
    
    public function salvar(){
        $this->id = parent::salvar();
    }

    public function atualizar(){
        parent::atualizar();
    }    
    
    public function getId(){
        return $this->id;
    }
    
    public function setHouse(){
        if (!is_object($this->house)){
            $house = new House();
            $house->localizar($this->house);     
            $this->house = $house;            
        }
    }    
}
?>