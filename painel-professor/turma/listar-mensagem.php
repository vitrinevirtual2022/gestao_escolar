<?php 
require_once("../../conexao.php"); 

$turma = @$_POST['turma'];


   

$query = $pdo->query("SELECT * FROM mensagens where turma = '$turma' order by id desc ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);

for ($i=0; $i < count($res); $i++) { 
	foreach ($res[$i] as $key => $value) {
	}

	$conteudo = $res[$i]['conteudo'];
	$data = $res[$i]['data'];
	
	$data_s = implode('/', array_reverse(explode('-', $data)));
	
	$id_msg = $res[$i]['id'];

	
	

	
	

	echo $conteudo .' <a onclick="deletarMensagem('.$id_msg.')" href="#" title="Excluir mensagem"><i class="far fa-trash-alt ml-2 text-danger"></i></a> ';

	echo ' - '. $data_s . '<br>' . '<hr>';

	

}
	?>

