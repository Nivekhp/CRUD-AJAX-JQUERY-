<?php
include 'database_config.php';
//caceta
class Usuario extends databaseConfig{

public function insert($nome,$email,$endereco,$telefone){

    $insert = "INSERT INTO usuario VALUES (0,'$nome','$email','$endereco','$telefone')";
    mysqli_query($this->conectDatabase(),$insert);
    $this->closeConect();

}   

public function edit($nome,$email,$endereco,$telefone){
    $update = "UPDATE usuario SET nome = '$nome', email = '$email', endereco ='$endereco' , telefone ='$telefone' WHERE  id = '$id'";
    mysqli_query($this->conectDatabase(),$update);
    $this->closeConect();
}

public function delete($id){
    $query = "DELETE FROM usuario WHERE id = $id";
    return mysqli_query($this->conectDatabase(),$query);
    $this->closeConect();
}

public function getAllUser(){
$select = "SELECT * FROM usuario";
$query =  mysqli_query($this->conectDatabase(),$select);
$this->closeConect();
return $query;
}


public function getUserById($id){
$select ="SELECT * FROM usuario WHERE id = '$id'";
$query = mysqli_query($this->conectDatabase(),$select);
return $query;
print_r($query);
}

}




?>
