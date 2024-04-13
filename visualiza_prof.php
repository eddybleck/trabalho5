<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualização de Professores</title>
    <style>
        #botaoVermelho{
            background: red;
            color:aliceblue;
            width: 80px;
            border: 0;
        }
        #botaoVerde{
            background: green;
            color:aliceblue;
            width: 80px;
            border: 0;
        }
        .centralizado{
            text-align:center
        }

    </style>
</head>

<body>
    <center>
        <h1>Professores Cadastrados</h1>

        <table border="0" >
            <tr>
                <td class="centralizado">Nome</td>
                <td class="centralizado">Sobrenome</td>
                <td class="centralizado">E-mail </td>
                <td class="centralizado">Telefone </td>
                <td></td>
                <td></td>
            </tr>
            <?php
                require("conecta.php");

                $dados_select = mysqli_query($conn, "SELECT nome, sobrenome, email, tel FROM prof");

                while($dado = mysqli_fetch_array($dados_select)) {
                    echo '<tr>';
                    echo '<td >'.$dado['nome'].'</td>';
                    echo '<td>'.$dado['sobrenome'].'</td>';
                    echo '<td>'.$dado['email'].'</td>';
                    echo '<td>'.$dado['tel'].'</td>';
                    echo '<td> <a href="atualizar.html"><input id="botaoVerde" type="button" value="Atualizar" /></a></td>';
                    echo '<td> <a href="conn/excluir_prof.php"><input id="botaoVermelho" type="button" value="Excluir" /></a></td>';
                    echo '</tr>';
                }
            ?>
        </table>
        <br />
        <a href="../index.html"><input type="button" value="Voltar"></a>
    </center>
</body>

</html>
