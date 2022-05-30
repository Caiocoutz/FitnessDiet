<?php

include('conexao.php');

//session_start();

$tmb = $_REQUEST['tmb'];
$maintenance = $_REQUEST['maintenance'];
$loseWeight = $_REQUEST['loseWeight'];
$gainWeight = $_REQUEST['gainWeight'];

$sql = "INSERT INTO imc (tmb, maintenance, loseWeight, gainWeight) VALUES ('$tmb', '$maintenance', '$loseWeight', '$gainWeight')";

if($mysqli->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$mysqli->close();

exit;
?>