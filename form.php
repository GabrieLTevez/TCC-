<?php
    $servername = "LocalHost";
    $username = "root";
    $password = "";
    $dbname = "DBcalendario";
   
    // Criar conexão
    //$con = new mysqli($servername, $username, $password);
    $con = new mysqli($servername, $username, $password, $dbname);
 
    
    /*$sql = "CREATE DATABASE DBcalendario";
    if ($con->query($sql) === TRUE) {
        echo "Banco de dados criado com sucesso";
    } else {
        echo "Erro ao criar banco de dados: " . $con->error;
    }
    */
 
    // Verifique a conexão
     if ($con->connect_error) {
        die("Falha na conexão: ".$con->connect_error);
    }
 
    echo "Conectado com sucesso";
 
    $sql = "CREATE TABLE Usuarios (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        titulo VARCHAR(30) NOT NULL,
        tipo VARCHAR(15) NOT NULL,
        startdate DATE NOT NULL,
        enddate DATE NOT NULL,
        startime TIME NOT NULL,
        endtime TIME NOT NULL,
        local1 VARCHAR(30) NOT NULL,
        nome VARCHAR(50) NOT NULL,
        base VARCHAR(50) NOT NULL,
        ano VARCHAR(10) NOT NULL,
        curso VARCHAR(50) NOT NULL,
        coord VARCHAR(50) NOT NULL,
        color VARCHAR(30) NOT NULL,
        info_event VARCHAR(30) NOT NULL)";
           
    if ($con->query($sql) === TRUE) {
        echo "Tabela Usuarios criada com sucesso";
    } else {
        echo "Erro ao criar tabela: " . $con->error;
    }
?>