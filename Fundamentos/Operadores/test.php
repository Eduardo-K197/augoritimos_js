<?php
$mysqli_connection = new MySQLi('3.94.92.6', 'Eduardo', '353331499Eduardo', 'cadastro');
if($mysqli_connection->connect_error){
    echo "Desconectado! Erro: " . $mysqli_connection->connect_error;
}else{
    echo "Conectado!";
}