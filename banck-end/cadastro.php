<?php
/************************************* 
 * Salvar as informações no banco de dados
 * *************************************** ********/
include("conexao.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$razaosocial = $_POST['razaosocial'];
$nomefantasia = $_POST['nomefantasia'];
$email = $_POST['email'];
//$cnpj = $_POST['cpnj'];
$senha = $_POST['senha'];
$senha2 = $_POST['senha2'];
//corrigindo data 
$datanasc = $_POST['data'];
   $result=explode('/',$datanasc);
   $dia = $result[0];
   $mes = $result[1];
   $ano = $result[2];
$datanasc = $ano.'-'.$mes.'-'.$dia;
$telefone = $_POST['tele'];
$sexo = $_POST['sexo'];
$cep = $_POST['cep'];
$rua = $_POST['logradouro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$opiniao = $_POST['opiniao'];

$sql = "INSERT INTO pessoa(no_pessoa,ds_sobrenome,ds_email,ds_cpf,ds_cep,ds_logradouro,ds_bairro,ds_cidade,co_uf,ds_telefone,ds_numero,id_sexo,dt_nascimento)
VALUES ('$nome','$sobrenome','$email','$cpf','$cep','$rua','$bairro','$cidade','$estado','$telefone','$numero','$sexo','$datanasc')";

mysqli_close($conexao);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <title>Sucesso</title>
</head>
<body class="bg-dark ">
<div class="container ">
        <div class="row form-cadastro justify-content-center bg-dark ">
            <div class="col-6 aling-self-center bg-white">
                <div class="row justify-content-center mb-4">
                    <h1 class="p-3 mb-2 bg-dark text-white text-center bg-opacity-75">Salvo com sucesso!</h1>
                        <div class="d-flex justify-content-evenly ">
                            <div>
                             <a href="http://formularioui.com/formulario_UI/backend/tabela.php"> <button type="button" class=" btn btn-primary btn-lg"> 
                            Voltar Pagina registros </button> </a>
                            </div>
    
                            <div>
                            <a href="http://formularioui.com/formulario_UI/Formulario/"> <button type="button" class=" btn btn-info btn-lg"> 
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