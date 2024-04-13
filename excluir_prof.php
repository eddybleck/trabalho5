<?php
    require("conecta.php");

    $id = $_GET['id_update'];

    $sql = "DELETE FROM prof WHERE id_prof=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<center><h1>Registro Excluído com Sucesso</h1>";
        echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
    } else {
        echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
?>
