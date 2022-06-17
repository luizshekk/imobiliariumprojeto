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
    
    <form action="agendar_visita.php" method="post">
        <fieldset>
        <label> Agendar visita </label>
            

            <input type="text" name="nome-visita" autofocus placeholder="Nome"> <br> <br>


            <input type="text" name="telefone-visita" placeholder="Telefone"><br> <br>

      
            <input type="text" name="email-visita"  placeholder="E-mail"> <br> <br>

           <label> Deixe sua mensagem </label> <br>
           
           <textarea name="mensagem-visita">  </textarea>



            <button name="enviar"> Agendar </button>
            <a href="javascript:window.history.go(-1)">Voltar</a> <br>
            <button name="agendamento">Relatorio de agendamentos </button> 
  


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
  if(isset($_POST['agendamento']))
  {
    require_once "../includes/consultar-agendamentos.inc.php";
  }
 require_once "../includes/desconectar.inc.php";
?>

</body> 
</html> 