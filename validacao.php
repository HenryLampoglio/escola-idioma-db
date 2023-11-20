<?php

session_start();

include_once 'conexao.php';

if ($_SESSION["usuario"] == "" || $_SESSION["usuario"] == null) {
    header("Location: http://127.0.0.1/escola-linguas/login.php");
}

$usuarioLogado = $_SESSION["usuario"];

$sql = "SELECT * FROM users WHERE id = $usuarioLogado";
$retorno = mysqli_query($conexao, $sql);
$array = mysqli_fetch_array($retorno);

$nomeSession = $array['login'];
$data_criada = $array['date_created'];
$usuarioSession = $usuarioLogado;

?>