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
  <form action="pagina-principal-adm.php" method="post">
  <ul>
    <li><a href="#">Início </a></li>
    <li><a href="#">Alugar</a></li>
    <li><a href="#">Comprar</a></li>  
    <li><a href="#">Anunciar imovel</a></li> <br>

    
 </ul>
 <br> <br>
 <legend> Módulo Administrador </legend> <br>

    <a href="#">Relatório de usuários cadastrados </a> <br>
    <a href="#">Relatório de imóveis cadastrados</a> <br>
    <a href="#">Relatório de propostas solicitadas </a>  <br>
    <a href="#">Relatório de solicitação de agendamentos</a> <br>
    <a href="#">Relatório de imóveis cadastrados</a> <br>
    <a href="#">Relatório de imóveis vendidos</a> <br>
    <a href="#">Relatório de imóveis excluídos</a> <br>

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