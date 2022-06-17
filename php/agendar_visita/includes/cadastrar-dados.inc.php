<?php
 //operação de cadastro de dados na base de dados
 $nomeVisita   = $_POST['nome-visita'];
 $telefoneVisita    = $_POST['telefone-visita'];
 $emailVisita   = $_POST['email-visita'];
 $mensagemVisita = $_POST['mensagem-visita'];

 $nomeVisita      = trim($nomeVisita);
 $telefoneVisita  = trim( $telefoneVisita);
 $emailVisita     = trim($emailVisita);
 $mensagemVisita  = trim( $mensagemVisita);

 //usando os comandos da linguagem PHP para evitarmos o ataque conhecido como injeção de SQL
 $emailVisita = $conexao->escape_string($emailVisita);
 $telefoneVisita  = $conexao->escape_string($telefoneVisita);
 $emailVisita  = $conexao->escape_string($emailVisita);
 $mensagemVisita  = $conexao->escape_string($mensagemVisita);
 //cadastro no banco de dados
 $sql = "INSERT $nomeDaTabela VALUES(
          '$nomeVisita',
          '$telefoneVisita',
          '$emailVisita',
          '$mensagemVisita')";

 $conexao->query($sql) or exit($conexao->error);

 echo "<p> Dados de imovel cadastrado com sucesso! </p>";

    

