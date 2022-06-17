<?php
 //operação de cadastro de dados na base de dados
 $nomeUsuario  = $_POST['nome-usuario'];
 $telefoneUsuario   = $_POST['telefone-usuario'];
 $emailUsuario   = $_POST['email-usuario'];
 $ruaUsuario = $_POST['rua-usuario'];
 $cidadeUsuario = $_POST['cidade-usuario'];
 $ufUsuario = $_POST['uf-usuario'];
 $paisUsuario = $_POST['pais-usuario'];
 

 $nomeUsuario  =   trim($nomeUsuario);
 $telefoneUsuario = trim($telefoneUsuario);
 $emailUsuario  =   trim($emailUsuario);
 $ruaUsuario =   trim($ruaUsuario);
 $cidadeUsuario = trim($cidadeUsuario);
 $ufUsuario = trim($ufUsuario);
 $paisUsuario = trim($paisUsuario);
 
 //usando os comandos da linguagem PHP para evitarmos o ataque conhecido como injeção de SQL
 $nomeUsuario = $conexao->escape_string($nomeUsuario);
 $telefoneUsuario  = $conexao->escape_string($telefoneUsuario);
 $emailUsuario  = $conexao->escape_string($emailUsuario);
 $ruaUsuario  = $conexao->escape_string( $ruaUsuario);
 $cidadeUsuario  = $conexao->escape_string($cidadeUsuario);
 $ufUsuario  = $conexao->escape_string($ufUsuario);

 //cadastro no banco de dados
 $sql = "INSERT $nomeDaTabela VALUES(
          '$nomeUsuario',
          '$telefoneUsuario',
          '$emailUsuario',
          '$ruaUsuario',
          '$cidadeUsuario',
          '$ufUsuario',
          '$paisUsuario')";

 $conexao->query($sql) or exit($conexao->error);

 echo "<p> Dados de imovel cadastrado com sucesso! </p>";

    

