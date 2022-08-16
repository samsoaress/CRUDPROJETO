<?php
    // isset -> serve para saber se uma variável está definida
    include_once('conexao.php');
    if(isset($_POST['update']))
    {
        $nome = $_POST["no_pessoa"];
        $sobrenome = $_POST["ds_sobrenome"];
        $email = $_POST["ds_email"];
        $cpf = $_POST["ds_cpf"];
        $cnpj = $_POST["ds_cnpj"];
        $cep = $_POST["ds_cep"];
        $logradouro = $_POST["ds_logradouro"];
        $bairro = $_POST["ds_bairro"];
        $cidade =$_POST["ds_cidade"];
        $estado = $_POST["co_uf"];
        $telefone = $_POST["ds_telefone"];
        $numero = $_POST["ds_numero"];
        $sexo = $_POST["id_sexo"];
        $datanasc = $_POST['dt_nascimento'];
            $result=explode('/',$datanasc);
            $dia = $result[0];
            $mes = $result[1];
            $ano = $result[2];
        
        $sqlInsert = "UPDATE pessoa 
        SET no_pessoa='$nome',ds_sobrenome='$sobrenome',ds_email='$email', ds_cpf='$cpf', ds_cnpj='$cnpj',ds_telefone='$telefone',id_sexo='$sexo', ds_numero='$numero',dt_nascimento='$data_nasc',ds_cidade='$cidade',co_uf='$estado',ds_logradouro='$logradouro'
        WHERE id_pessoa=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }

?>