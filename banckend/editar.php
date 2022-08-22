<?php
    include_once('conexao.php');


    
    if(!empty($_GET['id_pessoa']))
    {
        $id = $_GET['id_pessoa'];
        $sqlSelect = "SELECT *  FROM pessoa WHERE id_pessoa=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($dados_usuario = mysqli_fetch_assoc($result))
            {
                $nome = $dados_usuario["no_pessoa"];
                $sobrenome = $dados_usuario["ds_sobrenome"];
                $email = $dados_usuario["ds_email"];
                $tipo = $dados_usuario["co_tipo_pessoa"];
                $cpf = $dados_usuario["ds_cpf"];
                $cnpj = $dados_usuario["ds_cnpj"];
                $cep = $dados_usuario["nu_cep"];
                $logradouro = $dados_usuario["ds_logradouro"];
                $bairro = $dados_usuario["ds_bairro"];
                $cidade =$dados_usuario["ds_cidade"];
                $estado = $dados_usuario["co_uf"];
                $telefone = $dados_usuario["ds_telefone"];
                $numero = $dados_usuario["ds_numero"];
                $sexo = $dados_usuario["id_sexo"];
                $data_nasc = date ("d/m/y", strtotime($dados_usuario["dt_nascimento"]));
            }
        }
        else
        {
            header('Location: http://localhost/crudprojeto/frontend/cadastrar.php');
        }
    }
   
 
  ?>

  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
  <title>Formulario de Pessoas</title>
</head>

<body>
  <div class="container">
    <div>
      <div>
        <form  action="cadastrar.php" method="POST">
          <h1 class="text-center">Cadastro de Formulario</h1>
          <input type="radio" name="dados" id="fisica" value="nao" checked onclick="pessoaFisica()">
          <label>
            Pessoa fisica
          </label>
          <input type="radio" name="dados" id="juridica" value="sim" onclick="pessoaJuridica()">
          <label>
            Pessoa juridica
          </label>
          <div class="camposExtras">
            <div class="row">
              <div class="col-6">
                <label for="razaosocial" class="form-label">Razão social *</label>
                <input type="text" name="razaosocial" class="form-control" id="razaosocial" placeholder="razao social" required>
              </div>
            </div>
            <div class="camposExtras">
              <div class="row">
                <div class="col-6">
                  <label for="Nomeefantasia" class="form-label">Nome e fantasia *</label>
                  <input type="text" name="Nomeefantasia" class="form-control" id="Nomeefantasia" placeholder="Nome e fantasia" required>
                </div>
                <div class="col-6">
                  <label for="cnpj" class="form-label">Cnpj *</label>
                  <input type="text" name="cnpj" class="form-control" id="cnpj" placeholder="cnpj" maxlength="18" required>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col mb-3">
              <label for="Nome" class="form-label">Nome *</label>
              <input type="Nome" name="Nome" class="form-control" id="Nome" placeholder="Nome" required value<?php echo $nome;?> />
            </div>
            <div class="col mb-3">
              <label for="sobrenome" class="form-label">Sobrenome *</label>
              <input type="sobrenome" name="sobrenome" class="form-control" id="sobrenome"  required placeholder="sobrenome" value<?php echo $sobrenome;?> />
            </div>
          </div>
          <div class="row">
            <div class="col mb-3">
              <label for="email" class="form-label">Email *</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="email" required value=<?php echo $email;?>>
            </div>
            <div class="col mb-3">
              <label for="senha" class="form-label">Senha *</label>
              <input type="password" name="password" class="form-control" id="password" minlength="6" maxlength="12" onKeyUp="verificaForcaSenha()" placeholder="senha" required>
              <br /><span id="password-status"></span>

            </div>
          </div>
          <div class="row">
            <div class="col mb-3">
              <label for="cpf" class="form-label">Cpf *</label>
              <input type="text" name="cpf" class="form-control" id="cpf" placeholder="cpf" maxlength="14" required value=<?php echo $cpf;?>>
            </div>
            <div class="col mb-3">
              <label for="cep" class="form-label">Cep *</label>
              <input type="text" name="cep" class="form-control invalid" id="cep" placeholder="cep" required value=<?php echo $cep;?>>
            </div>
          </div>
          <div class="row">
            <div class="col mb-3">
              <label for="logradouro" class="form-label">Logradouro *</label>
              <input type="text" name="logradouro" class="form-control" id="logradouro" placeholder="logradouro" required value=<?php echo $logradouro;?>>
            </div>
            <div class="col mb-3">
              <label for="numero" class="form-label">Numero *</label>
              <input type="text" name="numero" class="form-control" id="numero" placeholder="numero" required value=<?php echo $numero;?>>
            </div>
          </div>
          <div class="row">
            <div class="col mb-3">
              <label for="bairro" class="form-label">Bairro *</label>
              <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Bairro" required value=<?php echo $bairro;?>>
            </div>
            <div class="col mb-3">
              <label for="cidade" class="form-label">Cidade *</label>
              <input type="text" name="cidade" class="form-control" id="cidade" placeholder="cidade" required value=<?php echo $cidade;?>>
            </div>
          </div>
          <div class="row">
            <div class="col mb-3">
              <label for="estado" class="form-label">Estado *</label>
              <select id="estado" name="estado" class="form-control form-select" required>
                <option selected>ESCOLHER <?php echo $estado;?></option>
                <option value="MG">MG</option>
                <option value="DF">DF</option>
                <option value="SP">SP</option>
                <option value="GO">GO</option>
                <option value="RR">RR</option>
                <option value="AP">AP</option>
                <option value="AM">AM</option>
                <option value="AC">AC</option>
                <option value="RO">RO</option>
                <option value="TO">TO</option>
                <option value="MA">MA</option>
                <option value="PI">PI</option>
                <option value="CE">CE</option>
                <option value="RN">RN</option>
                <option value="PB">PB</option>
                <option value="PE">PE</option>
                <option value="AL">AL</option>
                <option value="SE">SE</option>
                <option value="BA">BA</option>
                <option value="MT">MT</option>
                <option value="MS">MS</option>
                <option value="ES">ES</option>
                <option value="RJ">RJ</option>
                <option value="PR">PR</option>
                <option value="SC">SC</option>
                <option value="RS">RS</option>
              </select>
            </div>
            <div class="col mb-3">
              <label for="telefone" class="form-label">Telefone *</label>
              <input type="text" name="telefone" class="form-control" id="telefone" placeholder="telefone" maxlength="15" required value=<?php echo $telefone;?>>
            </div>
          </div>
          <div class="row">
            <div class="col mb-3">
              <label for="sexo">Sexo *</label>
              <div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="sexo" id="masculino"  placeholder="masculino" required value="1" <?php echo ($sexo == 'masculino') ? 'checked' : '1';?> />
                  <label class="form-check-label" name="masculino" for="masculino">Masculino</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="sexo" id="feminino"  placeholder="feminino" required value="2" <?php echo ($sexo == 'feminino') ? 'checked' : '2';?> />
                  <label class="form-check-label" name="feminino"for="feminino">Feminino</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="sexo" id="outro"  placeholder="outro" required value="3" <?php echo ($sexo == 'outro') ? 'checked' : '3';?> />
                  <label class="form-check-label" for="outro">Prefiro não informar</label>
                </div>
              </div>
            </div>
            <div class="col mb-3">
              <label for="datadenascimento" class="form-label">Data de nascimento *</label>
              <input type="text" class="date" name="datadenascimento" class="form-control" id="datadenascimento" placeholder="data de nascimento" required value=<?php echo $data_nasc;?>>
            </div>
          </div>
          <div class="col mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="validationCustom12" required>
              <label class="form-check-label" for="validationCustom12">Selecionado<a class="btn btn-primary success" href="https://www.google.com/#">termos e condições</a>
              </label>
            </div>
          </div>
      </div>
      <br>
      <div class="col mb-4">
        <button type="submit" class="btn btn-primary success btn-lg float-right">Salvar</button>
        <button type="reset" class="btn btn-black success btn-lg float-right">Limpar</button>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
  <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
  <script src="https://rawgit.com/RobinHerbots/Inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
  <script src="../frontend/js/index.js"></script> 
</body>
</html>