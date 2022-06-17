<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <link rel="stylesheet" href="../css/formata-formulario.css">
  <script src="js/bootstrap.js"></script>
  <title> Projeto 2  </title> 
</head>  
<body background="../../foto_ponte.jpg">

    <h1> Sistema Imobiliarium </h1>
    
    <form action="fazer_proposta.php" method="post">
        <fieldset>
        <label> Fazer Proposta </label>
            

            <input type="text" name="codigo-imovel" autofocus placeholder="Código do imóvel"> <br> <br>


            <input type="number" name="valor-imovel" placeholder="Valor do imóvel"><br> <br>

      
            <input type="text" name="telefone-proposta"  placeholder="Telefone"> <br> <br>

            <input type="text" name="email-proposta"  placeholder="Email"> <br> <br>

           <label> Deixe sua mensagem </label> <br>
           
           <textarea name="mensagem-proposta">  </textarea>
           

            <button name="enviar"> Concluir proposta </button>
            
            <button name="proposta">Relatorio de proposta </button> 
  
            <a href="javascript:window.history.go(-1)">Voltar</a> <br>

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
  if(isset($_POST['proposta']))
  {
    require_once "../includes/consultar-proposta.inc.php";
  }
 require_once "../includes/desconectar.inc.php";
?>

</body> 
</html> 