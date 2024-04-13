<!DOCTYPE html>
<html>
<head>
    <title>Atualizar Banco de Dados</title>
</head>
<body>
    <?php
    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "trabalho5");

    // Check connection
    if (!$conn) {
        die("Conexão falhou: " . mysqli_connect_error());
    }

    // Get the submitted data
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nids = $_POST;
        unset($nids["sub"]);

        // Loop through the submitted data and update the database
        foreach ($nids as $nid => $approval_status) {
            $nid_parts = explode("_", $nid);
            $nid = $nid_parts[0];
            $sid = $nid_parts[1];

            $sql = "UPDATE nome_da_tabela SET approval_status = '$approval_status' WHERE nid = $nid AND sid = $sid";
            mysqli_query($conn, $sql);
        }

        // Redirect back to the form
        header("Location: atualizar.html");
        exit