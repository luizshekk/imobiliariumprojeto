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
    <form action="cadastrar_imoveis.php" method="post">
        <fieldset>
            <label> Cadastrar imóvel </label>

            <input type="text" name="nome-proprietario" autofocus placeholder="Nome proprietário"> <br> <br>


            <input type="text" name="telefone-proprietario" placeholder="Telefone"><br> <br>

      
            <input type="text" name="email-proprietario"  placeholder="E-mail"> <br> <br>

            <label> Endereço do Imóvel </label>

            <input type="text" name="rua-proprietario"  placeholder="Rua"><br> <br>

            <input type="text" name="cidade-proprietario"  placeholder="Cidade"> 

            <input type="text" name="uf-proprietario"  placeholder="UF"> <br><br>

          

            <select name="pais-proprietario">
                <option>Selecione o país</option>
                <option value="BR">Brasil</option>
                <br>
                
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

 if(!isset($_POST['pais-proprietario']))
 {
     exit("<p> Você deve escolher um pais");
 }

 //neste ponto, testamos se o botão submit foi usado no formulário
 if(isset($_POST['enviar']))
  {
   
   require_once "../includes/cadastrar-dados.inc.php";
   
  }
 require_once "../includes/desconectar.inc.php";
?>
</body> 
</html> 