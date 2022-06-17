<?php
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela (
           nome VARCHAR(30),
           telefone  VARCHAR(15),
           email VARCHAR(50),
           rua VARCHAR(50),
           cidade VARCHAR(50),
           uf VARCHAR(2),
           pais VARCHAR(15)) ENGINE=innoDB";

 $conexao->query($sql) or exit($conexao->error);
