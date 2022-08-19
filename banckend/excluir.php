<?php

    if(!empty($_GET['id_pessoa']))
    {
        include_once('conexao.php');

        $id = $_GET['id_pessoa'];

        $sqlSelect = "SELECT *  FROM pessoa WHERE id_pessoa=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM pessoa WHERE id_pessoa=$id";
            $resultDelete = $conexao->query($sqlDelete);
            
        }
        
    }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body class="bg-dark ">
<div class="container ">
        <div class="row form-cadastro justify-content-center bg-dark ">
            <div class="col-6 aling-self-center bg-white">
                <div class="row justify-content-center mb-4">
                    <h1 class="p-3 mb-2 bg-dark text-white text-center bg-opacity-75">Usuario excluido com sucesso!</h1>
                        <div class="row btn-goup mb-6  ">
                            <div class="d-grid gap-2 col-6 ">
                                                        
                            <a href="../frontend/CRUDprojeto/cadastrar.php"> <button type="button" class=" btn btn-info btn-lg"> 
                            Novo Usuario </button> </a>         
                                                      
                             <a href="../frotend/CRUDprojeto/consultar.php"> <button type="button" class=" btn btn-primary btn-lg"> 
                            Voltar  </button> </a>   

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