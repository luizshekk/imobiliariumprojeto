<?php
 //operação de cadastro de dados na base de dados
 $nomeProprietario  = $_POST['nome-proprietario'];
 $telefoneProprietario   = $_POST['telefone-proprietario'];
 $emailProprietario   = $_POST['email-proprietario'];
 $ruaProprietario = $_POST['rua-proprietario'];
 $cidadeProprietario = $_POST['cidade-proprietario'];
 $ufProprietario = $_POST['uf-proprietario'];
 $paisProprietario = $_POST['pais-proprietario'];
 

 $nomeProprietario  =   trim($nomeProprietario);
 $telefoneProprietario = trim($telefoneProprietario);
 $emailProprietario  =   trim($emailProprietario);
 $ruaProprietario =   trim($ruaProprietario);
 $cidadeProprietario = trim($cidadeProprietario);
 $ufProprietario = trim($ufProprietario);
 $paisProprietario = trim($paisProprietario);
 
 //usando os comandos da linguagem PHP para evitarmos o ataque conhecido como injeção de SQL
 $nomeProprietario = $conexao->escape_string($nomeProprietario);
 $telefoneProprietario  = $conexao->escape_string($telefoneProprietario);
 $emailProprietario  = $conexao->escape_string($emailProprietario);
 $ruaProprietario  = $conexao->escape_string( $ruaProprietario);
 $cidadeProprietario  = $conexao->escape_string($cidadeProprietario);
 $ufProprietario  = $conexao->escape_string($ufProprietario);

 //cadastro no banco de dados
 $sql = "INSERT $nomeDaTabela VALUES(
          '$nomeProprietario',
          '$telefoneProprietario',
          '$emailProprietario',
          '$ruaProprietario',
          '$cidadeProprietario',
          '$ufProprietario',
          '$paisProprietario')";

 $conexao->query($sql) or exit($conexao->error);

 echo "<p> Dados de imovel cadastrado com sucesso! </p>";

    

