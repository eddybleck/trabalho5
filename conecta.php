<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "trabalho5";


    $conn = mysqli_connect($servername,  $username, $password, $database);

    if (!$conn) {
        die("Conexão falhou. Erro: " . mysqli_connect_error());
    }
?>