<?php

class databaseConfig{

public function conectDatabase(){

     $host = "localhost";
     $username = "root";
     $password = "";
     $database = "crud";

$conect = mysqli_connect($host,$username,$password,$database);

mysqli_set_charset($conect,"utf8");
return $conect;
}

public function closeConect(){
   return mysqli_close($this->conectDatabase());
}

}
?>