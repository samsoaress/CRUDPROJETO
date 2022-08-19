<?php
include("banckend/conexao.php");



$consulta = "SELECT * FROM pessoa";
$con = $conexao->query($consulta) or die($conexao->error);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <title>Clientes cadastrados</title>
</head>
<body>
    <h1 class="p-3 mb-2 bg-primary text-white text-center bg-opacity-75">Clientes já cadastrados</h1>
    <table class="table table-primary table-striped">
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Sobrenome</td>
            <td>Email</td>
            <td>Tipo pessoa</td>
            <td>Cpf</td>
            <td>Cnpj</td>
            <td>Cep</td>
            <td>Rua</td>
            <td>Bairro</td>
            <td>Cidade</td>
            <td>Estado</td>
            <td>Telefone</td>
            <td>Numero</td>
            <td>Sexo</td>
            <td>Data nascimneto</td>
            <td colspan="2">opecoes</td>
        </tr>
        <?php while ($dado = $con->fetch_array()) { ?>
            <tr>

                <td><?php echo $dado["id_pessoa"]; ?></td>
                <td><?php echo $dado["no_pessoa"]; ?></td>
                <td><?php echo $dado["ds_sobrenome"]; ?></td>
                <td><?php echo $dado["ds_email"]; ?></td>
                <td><?php echo $dado["co_tipo_pessoa"]; ?></td>
                <td><?php echo $dado["ds_cpf"]; ?></td>
                <td><?php echo $dado["ds_cnpj"]; ?></td>
                <td><?php echo $dado["nu_cep"]; ?></td>
                <td><?php echo $dado["ds_logradouro"]; ?></td>
                <td><?php echo $dado["ds_bairro"]; ?></td>
                <td><?php echo $dado["ds_cidade"]; ?></td>
                <td><?php echo $dado["co_uf"]; ?></td>
                <td><?php echo $dado["ds_telefone"]; ?></td>
                <td><?php echo $dado["ds_numero"]; ?></td>
                <td><?php echo $dado["id_sexo"]; ?></td>
                <td><?php echo date("d/m/y", strtotime($dado["dt_nascimento"])); ?></td>

                <td><?php echo "<a class='btn btn-sm btn-danger' href='http://localhost/crudprojeto/banckend/excluir.php?id_pessoa=" . $dado['id_pessoa'] . "'> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                        </svg></a><br><hr>" ?></td>
                <td><?php echo "<a class='btn btn-sm btn-primary' href='http://localhost/crudprojeto/banckend/editar.php?id_pessoa=" . $dado['id_pessoa'] . "'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                     <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                        </svg>
                            </a> <br><hr>" ?></td>

            </tr>

        <?php } ?>
    </table>
    <div>
        <a href="frontend/cadastrar.php"> <button type="button" class=" btn btn-primary btn-lg">
                adicionar cliente</button></a>
    </div>
   
</body>

</html>