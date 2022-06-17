<?php
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela (
           nome VARCHAR(30),
           telefone  VARCHAR(15),
           email VARCHAR(50),
           mensagem VARCHAR(500)) ENGINE=innoDB";

 $conexao->query($sql) or exit($conexao->error);
