<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos de MySQL com PHP </title> 
  <link rel="stylesheet" href="../css/formata-banco.css">
</head> 

<body> 
 <h1> Fundamentos de Banco de Dados com PHP - exercício 1 </h1>
 <form action="exercicio1.php" method="post">
  <fieldset>
   <legend> Cadastro de dados do aluno </legend>

   <label class="alinha"> Aluno: </label>
   <input type="text" name="aluno" placeholder="Forneça o nome do aluno..." autofocus> <br>

   <label class="alinha"> Matrícula: </label>
   <input type="text" name="matricula"> <br>

   <label class="alinha"> Média em PRW: </label>
   <input type="number" name="media" min="0"  max="10" step="0.1">
  </fieldset>

  <fieldset>
   <legend> Operações sobre banco de dados </legend>
   <label> Escolha a operação a ser realizada: </label>
   <select name="operacao">
    <option> Cadastro de dados do aluno </option>
    <option> Mostrar dados no formato tabular </option>
    <option> Mostrar número de alunos aprovados </option>
   </select>

   <button name="enviar"> Executar operação </button>
  </fieldset>
 </form> 
 
 <?php
  //neste ponto, vamos chamar as includes responsáveis por todas as etapas de conexão do nosso código em PHP com o banco de dados

  require_once "../includes/dados-conexao.inc.php";
  require_once "../includes/conectar.inc.php";
  require_once "../includes/criar-banco.inc.php";
  require_once "../includes/abrir-banco.inc.php";
  require_once "../includes/definir-utf8.inc.php";


 ?>
</body> 
</html> 