<?php

include '../Model/Usuario.php';
$modelusuario = new Usuario;
//ADICIONANDO USUARIO
if(isset($_POST['botao']) && isset($_POST) == "true"){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];

    $modelusuario->insert($nome, $email, $endereco, $telefone);
    $json = ["ok" => 0, "msg" => "Cadastrado com Sucesso"];
    echo json_encode($json);
}
//DELETANDO USUARIO
if(isset($_POST['delete']) && $_POST['delete'] == "true"){
     $id = $_POST['id'];
     $modelusuario->delete($id);
     $arrayJson = ["error" => 0,"msg" => "Excluido com Sucesso"];
     echo json_encode($arrayJson);
    }
