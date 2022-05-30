<?php

include('conexao.php');

//session_start();

$total = $_REQUEST['total'];

$sql = "INSERT INTO calorias (total) VALUES ('$total')";

if($mysqli->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$mysqli->close();

exit;
?>