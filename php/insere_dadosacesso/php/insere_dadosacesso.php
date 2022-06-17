<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <link rel="stylesheet" href="../css/formata-menu.css">
  <script src="js/bootstrap.js"></script>
  <title> Projeto 2  </title> 

  <script src="js/bootstrap.js"></script>
</head> 

<body>
  <h1> Sistema Imobiliarium </h1>
  <form action="insere_dadosacesso.php" method="post">
    <fieldset>
        <legend> Dados para acesso </legend>

        <label>Usuário: </label>
        <input type="text" name="usuario" autofocus require placeholder="digite seu usuário..."> <br>

        <label>Senha: </label> 
        <input type="text" name="senha" placeholder="digite sua senha...">

        <button name="enviar"> Entrar </button>
        <a href="javascript:window.history.go(-1)">Voltar</a>
    </fieldset>
   </form>
   <?php
 //neste ponto, vamos chamar as includes responsáveis por todas as etapas de conexão do nosso código em PHP com o banco de dados

 require_once "../includes/dados-conexao.inc.php";
 require_once "../includes/conectar.inc.php";
 require_once "../includes/criar-banco.inc.php";
 require_once "../includes/abrir-banco.inc.php";
 require_once "../includes/definir-utf8.inc.php";
 require_once "../includes/criar-tabela.inc.php";

 //neste ponto, testamos se o botão submit foi usado no formulário
 if(isset($_POST['enviar']))
  {

   require_once "../includes/cadastrar-dados.inc.php";
   
  }
  
 require_once "../includes/desconectar.inc.php";
?>
</body>
</html>