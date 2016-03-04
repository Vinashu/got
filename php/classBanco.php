<?php
class Banco {
    protected static $server = "localhost";
    protected static $user = "root";
    protected static $pwd = "";
    protected static $schema = "got";
    
    public function conectar(){           
        $db = mysqli_connect(self::$server, self::$user, self::$pwd, self::$schema);         
        if (!$db) {
            die('Não foi possível conectar: ' . mysqli_error());
        }           
        return $db;        
    }
    
    public function desconectar($db){
        mysqli_close($db);
    }
    
    public function localizar($id){
        $sql = "select * from " . get_class($this) . " where id = " . $id;
        $db = $this->conectar();
        $res = mysqli_query($db,$sql);
        if (!$res) {
            die('Query inválida: ' . mysqli_error());
        }        
        $data = mysqli_fetch_object($res, get_class($this));                  
        $this->desconectar($db);       
        return $data;
    }
    
    public function salvar(){
        $campos = get_object_vars($this);  
        $sqlStart = "INSERT INTO " . get_class($this) . " (";
        $sqlEnd = ") VALUES (";    
        foreach($campos as $key => $value){
            $sqlStart .= $key . ",";
            if(!is_object($campos[$key])){
                $sqlEnd .= "'" . $value . "',";    
            } else {
                $sqlEnd .= "'" . $campos[$key]->getId() . "',";
            }            
        }                   
        $sql =  substr($sqlStart,0,strlen($sqlStart)-1) . substr($sqlEnd,0,strlen($sqlEnd)-1) . ")";
        $db = $this->conectar();
        $res = mysqli_query($db,$sql);
        if (!$res) {
            die('Query inválida: ' . mysqli_error());
        }           
        $id = mysqli_insert_id($db);
        $this->desconectar($db);       
        return $id;
    }
    
    public function atualizar(){
        $campos = get_object_vars($this);  
        $sql = "UPDATE " . get_class($this) . " SET ";
        foreach($campos as $key => $value){
            $sql .= $key . " = '$value',";
        }                   
        $sql =  substr($sql,0,strlen($sql)-1);
        $sql .= "WHERE id = " . $this->getId();
        $db = $this->conectar();
        $res = mysqli_query($db,$sql);
        if (!$res) {
            die('Query inválida: ' . mysqli_error());
        }           
        $this->desconectar($db);               
    }
    
    public function listar(){
          $sql = "Select * from " . get_class($this);
          $db = $this->conectar();
          $res = mysqli_query($db,$sql);
          $this->desconectar($db);
          while($linha = mysqli_fetch_object($res,get_class($this)))        
          {
              $linhas[] = $linha;
          }
          mysqli_free_result($res);                
          return($linhas);
    }    
    
    public function deletar(){
          $sql = "Delete from " . get_class($this) . " where id= " . $this->getId();
          $db = $this->conectar();
          $res = mysqli_query($db,$sql);
          $this->desconectar($db);
    }
    
}
?>