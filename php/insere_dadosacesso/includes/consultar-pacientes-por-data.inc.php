<?php

 //include com a consulta SQL que conta número de alunos aprovados em PRW
 $sql = "SELECT * FROM $nomeDaTabela";

 $resultado = $conexao->query($sql) or die($conexao->error);

 //acessamos o objeto resultado e criamos o vetor registro com uma única células. Esta célula armazena o número inteiro correspondente ao número de alunos aprovados em PRW
 $registro = $resultado->fetch_array();

 $agendamentos = $registro[0];
 $agendamentos = htmlentities($agendamentos, ENT_QUOTES, "UTF-8");

 echo "<p> Agendamentos cadastrados = <span> $agendamentos </span> </p>";