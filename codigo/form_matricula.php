<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Matricula</title>
</head>

<body>
    <form action="salvar_matriculas.php" method="post" enctype="multipart/form-data">

        Data Matricula: <br>
        <input type="text" name="data_matricula"> <br><br>

        Status Matricula: <br>
        <input type="text" name="status_matricula"> <br><br>

        Nota Final: <br>
        <input type="text" name="nota_final"> <br><br>

        Id do Usuario: <br>
        <select name="idusuario"> <br><br>

            <?php
            require_once "conexao.php";

            $sql = "SELECT * FROM usuarios";

            $comando = mysqli_prepare($conexao, $sql);
            mysqli_stmt_execute($comando);
            $usuarios = mysqli_stmt_get_result($comando);

            while ($usuario = mysqli_fetch_array($usuarios)) {
                $idusuario = $usuario['idusuarios'];
                $nomeusuario = $usuario['nome'];

                echo "<option value='$idusuario'>$nomeusuario</option>";
            }
            ?>
        </select> <br><br>

        Foto: <br>
        <input type="file" name="foto"> <br><br>

        <input type="submit" value="Salvar">

    </form>
</body>

</html>