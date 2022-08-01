<?php 
require_once("../../conexao.php"); 

@session_start();
$cpf_usuario = @$_SESSION['cpf_usuario'];

$query = $pdo->query("SELECT * FROM alunos where cpf = '$cpf_usuario'  order by id asc ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$id_aluno = $res[0]['id'];

$turma = @$_POST['turma'];


$query = $pdo->query("SELECT * FROM mensagens where turma = '$turma' order by id desc ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);

for ($i=0; $i < count($res); $i++) { 
	foreach ($res[$i] as $key => $value) {
	}

	$conteudo = $res[$i]['conteudo'];
	$data_msg = $res[$i]['data'];
  
  $data_s = implode('/', array_reverse(explode('-', $data_msg)));
  
  $id_msg = $res[$i]['id'];

	echo  $conteudo;
  echo ' - '. $data_s . '<hr>';

	 


}
	?>

