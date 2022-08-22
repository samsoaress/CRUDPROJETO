<?php

include("conexao.php");

var_dump($_POST);

if (isset($_POST)) {
   
    $nome = $_POST['Nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $razaosocial = $_POST['razaosocial'];
    $nomefantasia = $_POST['Nomeefantasia'];
    $email = $_POST['email'];
    //$cnpj = $_POST['cpnj'];
    $senha = $_POST['password'];

    $datanasc = $_POST['datadenascimento'];
    $result = explode('/', $datanasc);
    $dia = $result[0];
    $mes = $result[1];
    $ano = $result[2];
    $datanasc = $ano . '-' . $mes . '-' . $dia;
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $cep = $_POST['cep'];
    $rua = $_POST['logradouro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];



$sql = "INSERT INTO pessoa(no_pessoa,ds_sobrenome,ds_email,ds_cpf,nu_cep,ds_logradouro,ds_bairro,ds_cidade,co_uf,ds_telefone,ds_numero,id_sexo,dt_nascimento)VALUES('$nome','$sobrenome','$email','$cpf','$cep','$rua','$bairro','$cidade','$estado','$telefone','$numero','$sexo','$datanasc')";
    
   //$db = mysqli_query($sql,'formulario');
  //executeQuery( $sql,'formulario');
    $conexao -> query($sql);
    mysqli_close($conexao);
} else {
    throw new Exception("Informações não enviadas!");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <title>Sucesso</title>
</head>

<body class=" ">
    <div class="container ">
        <div class="row form-cadastro justify-content-center  ">
            <div class="col-6 aling-self-center bg-white">
                <div class="row justify-content-center mb-4">
                    <h1 class="p-3 mb-2 bg-dark text-white text-center bg-opacity-75">Salvo com sucesso!</h1>
                    <div class="d-flex justify-content-evenly ">
                        <div>
                            <a href="http://localhost/crudprojeto/"> <button type="button" class=" btn btn-primary btn-lg">
                                    Voltar Pagina registros </button></a>
                        </div>

                        <div>
                            <a href="../frontend/cadastrar.php"> <button type="button" class=" btn btn-info btn-lg">
                                    Novo Usuario </button> </a>
                        </div>

                        <div>
                            <a href="https://www.google.com/"> <button type="button" class=" btn btn-danger btn-lg">
                                    Sair </button> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>