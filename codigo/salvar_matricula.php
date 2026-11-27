<?php
require_once "conexao.php";

$data_matricula = $_GET['data_matricula'];
$status_matricula = $_GET['status_matricula'];
$nota_final = $_GET['nota_final'];
$idusuario = $_GET['idusuario'];
$idcurso = $_GET['idcurso'];


$sql = "INSERT INTO matricula (data_matricula, status_matricula, nota_final, idusuario, idcurso) VALUES (?,?,?,?)";

$comando = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($comando, "isdii", $data_matricula, $status_matricula, $nota_final, $idusuario $idcurso);
mysqli_stmt_execute($comando);

header("Location: index.php");