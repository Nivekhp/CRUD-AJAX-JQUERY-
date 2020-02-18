<?php
include 'database_config.php';

class Usuario extends databaseConfig{

public function insert($nome,$email,$endereco,$telefone){

    $insert = "INSERT INTO usuario VALUES (0,'$nome','$email','$endereco','$telefone')";
    mysqli_query($this->conectDatabase(),$insert);

}   

public function edit(){

}
public function delete($id){

    $query = "DELETE FROM usuario WHERE id = $id";
    return mysqli_query($this->conectDatabase(),$query);

}

public function getAllUser(){
$select = "SELECT * FROM usuario";
$query =  mysqli_query($this->conectDatabase(),$select);

$this->closeConect();

return $query;
}

}




?>