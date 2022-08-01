<?php 
require_once("../../conexao.php"); 

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];


$antigo = $_POST['antigo'];


$id = $_POST['txtid2'];

if($nome == ""){
	echo 'O nome é Obrigatório!';
	exit();
}


//VERIFICAR SE O REGISTRO JÁ EXISTE NO BANCO
if($antigo != $nome){
	$query = $pdo->query("SELECT * FROM serie where serie_ano = '$nome'");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$total_reg = @count($res);
	if($total_reg > 0){
		echo 'A Série/ Ano já está Cadastrada!';
		exit();
	}
}



if($id == ""){
	$res = $pdo->prepare("INSERT INTO serie SET serie_ano = :nome, descricao = :descricao");	


}else{
	$res = $pdo->prepare("UPDATE serie SET serie_ano = :nome, descricao = :descricao WHERE id = '$id'");

	

}
	

$res->bindValue(":nome", $nome);
$res->bindValue(":descricao", $descricao);



$res->execute();



echo 'Salvo com Sucesso!';

?>