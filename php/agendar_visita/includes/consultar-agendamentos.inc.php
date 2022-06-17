<?php
//$agendamento = trim($conexao->escape_string($_POST['agendamento']));
 //include com a consulta SQL que conta número de alunos aprovados em PRW
 $sql = "SELECT * FROM $nomeDaTabela";

 $resultado = $conexao->query($sql) or die($conexao->error);

 //acessamos o objeto resultado e criamos o vetor registro com uma única células. Esta célula armazena o número inteiro correspondente ao número de alunos aprovados em PRW
 $registro = $resultado->fetch_array();

 //$agendamento = $registro[0];
 //$agendamento = htmlentities($agendamento, ENT_QUOTES, "UTF-8");

 echo "<table>
 <caption> Relação de agendamento cadastrados </caption>
 <tr>
  <th> Nome </th>
  <th> Telefone </th>
  <th> Email </th>
  <th> Mensagem </th>
 </tr>";

while ($registro = $resultado->fetch_array())
{
$nome = htmlentities($registro[0], ENT_QUOTES, "UTF-8");
$telefone     = htmlentities($registro[1], ENT_QUOTES, "UTF-8");
$email     = htmlentities($registro[2], ENT_QUOTES, "UTF-8");
$mensagem     = htmlentities($registro[3], ENT_QUOTES, "UTF-8");


//vamos converter a data para o formato de representação usado no nosso país (dd/mm/aaaa), usando a função explode de tratamento de vetores
//$dataConvertida = converterData($data);

echo "<tr>
  <td> $nome </td>
  <td> $telefone </td>
  <td> $email </td>
  <td> $mensagem </td>
 </tr>";
}
echo "</table>";