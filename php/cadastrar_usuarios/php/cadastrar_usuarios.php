<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <link rel="stylesheet" href="../css/formata-formulario.css">
  <script src="js/bootstrap.js"></script>
  <title> Projeto 2  </title> 

  <script src="js/bootstrap.js"></script>
</head> 

<body background="../../foto_ponte.jpg">
    <h1> Sistema Imobiliarium </h1>
    <form action="cadastrar_usuarios.php" method="post">
        <fieldset>
            <label> Cadastrar usuários </label>
            <input type="text" name="nome-usuario" autofocus placeholder="Nome"> <br> <br>


            <input type="text" name="telefone-usuario" placeholder="Telefone"><br> <br>

      
            <input type="text" name="email-usuario"  placeholder="E-mail"> <br> <br>

            <label> Endereço </label>

            <input type="text" name="rua-usuario"  placeholder="Rua"><br> <br>

            <input type="text" name="cidade-usuario"  placeholder="Cidade"> 

            <input type="text" name="uf-usuario"  placeholder="UF"> <br><br>

          

            <select name="pais-usuario">
                <option>Selecione o país</option>
                <option value="AR">Argentina</option>
                <option value="BR">Brasil</option>
                <option value="CO">Colombia</option>
                <option value="IN">Inglaterra</option>
                
            </select> 
            <button name="enviar"> Cadastrar </button>


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