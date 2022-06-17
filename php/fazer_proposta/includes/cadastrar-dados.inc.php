<?php
 //operação de cadastro de dados na base de dados
 $codigoImovel   = $_POST['codigo-imovel'];
 $valorImovel    = $_POST['valor-imovel'];
 $telefoneProposta   = $_POST['telefone-proposta'];
 $emailProposta   = $_POST['email-proposta'];
 $mensagemProposta = $_POST['mensagem-proposta'];

 $codigoImovel   = trim($codigoImovel);
 $valorImovel      = trim($valorImovel);
 $telefoneProposta  = trim($telefoneProposta);
 $emailProposta     = trim($emailProposta);
 $mensagemProposta  = trim($mensagemProposta);

 //usando os comandos da linguagem PHP para evitarmos o ataque conhecido como injeção de SQL
 $codigoImovel = $conexao->escape_string($codigoImovel);
 $valorImovel = $conexao->escape_string($valorImovel);
 $telefoneProposta  = $conexao->escape_string($telefoneProposta);
 $emailProposta  = $conexao->escape_string($emailProposta);
 $mensagemProposta  = $conexao->escape_string($mensagemProposta);
 //cadastro no banco de dados
 $sql = "INSERT $nomeDaTabela VALUES(
          '$codigoImovel',
          $valorImovel,
          '$telefoneProposta',
          '$emailProposta',
          '$mensagemProposta')";

 $conexao->query($sql) or exit($conexao->error);

 echo "<p> Dados de imovel cadastrado com sucesso! </p>";


    

