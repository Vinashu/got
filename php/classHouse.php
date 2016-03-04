<?php
include_once("classBanco.php");
class House extends Banco {
    public $id;
    public $name;
    public $icon;
    public $banner;
    
    public function localizar($id){
        $data = parent::localizar($id);              
        $campos = get_object_vars($data);                        
        foreach($campos as $key => $value){
            $this->$key = $data->$key;
        }           
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
    
}
?>