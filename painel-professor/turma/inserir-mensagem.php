<?php 
require_once("../../conexao.php"); 

$conteudo = $_POST['conteudo'];



$turma = $_POST['turma'];

if($conteudo == ""){
	echo 'Você precisa escrever sua mensagem!';
	exit();
}


$res = $pdo->prepare("INSERT INTO mensagens SET turma = :turma, conteudo = :conteudo, data = curDate()");	

	
$res->bindValue(":conteudo", $conteudo);

$res->bindValue(":turma", $turma);


$res->execute();


echo 'Salvo com Sucesso!';

?>