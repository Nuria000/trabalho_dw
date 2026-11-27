<?php
require_once "conexao.php";

$preco = $_GET['preco'];
$carga_horaria= $_GET['carga_horaria'];
$descricao = $_GET['descricao'];
$titulo = $_GET['titulo'];

$sql = "INSERT INTO curso (preco, carga_horaria, descricao, titulo) VALUES (?,?,?,?)";

$comando = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($comando, "iiss", $preco, $carga_horaria, $descricao, $titulo);
mysqli_stmt_execute($comando);

header("Location: index.php");