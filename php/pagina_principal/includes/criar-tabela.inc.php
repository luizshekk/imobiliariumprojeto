<?php
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela (
           codigo VARCHAR(30),
           valor DECIMAL (9,2),
           telefone  VARCHAR(15),
           email VARCHAR(50),
           mensagem VARCHAR(500)) ENGINE=innoDB";

 $conexao->query($sql) or exit($conexao->error);
