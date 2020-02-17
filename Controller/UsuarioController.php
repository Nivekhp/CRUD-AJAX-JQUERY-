<?php

include '../Model/Usuario.php';

$modelusuario = new Usuario;

$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];

$modelusuario->insert($nome,$email,$endereco,$telefone);

$json = ["ok" => 0, "msg" =>"Cadastrado com Sucesso"];
echo json_encode($json);


 



?>