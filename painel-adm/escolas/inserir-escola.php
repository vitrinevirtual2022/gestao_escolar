<?php 
require_once("../../conexao.php"); 

$nome_school = $_POST['nome_school'];
$codigo = $_POST['codigo'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cnpj_escola = $_POST['cnpj_escola'];
$endereco = $_POST['endereco'];

$antigo = $_POST['antigo'];
$antigo2 = $_POST['antigo2'];
$id = $_POST['txtid2'];

if($nome_school == ""){
	echo 'O nome é Obrigatório!';
	exit();
}

if($email == ""){
	echo 'O email é Obrigatório!';
	exit();
}

if($cnpj_escola == ""){
	echo 'O CNPJ é Obrigatório!';
	exit();
}

//VERIFICAR SE O REGISTRO JÁ EXISTE NO BANCO
if($antigo != $cnpj_escola){
	$query = $pdo->query("SELECT * FROM escolas where cnpj_escola = '$cnpj_escola' ");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$total_reg = @count($res);
	if($total_reg > 0){
		echo 'O CNPJ já está Cadastrado!';
		exit();
	}
}


//VERIFICAR SE O REGISTRO COM MESMO EMAIL JÁ EXISTE NO BANCO
if($antigo2 != $email){
	$query = $pdo->query("SELECT * FROM escolas where email = '$email' ");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$total_reg = @count($res);
	if($total_reg > 0){
		echo 'O Email já está Cadastrado!';
		exit();
	}
}






if($id == ""){
	$res = $pdo->prepare("INSERT INTO escolas SET nome_school = :nome_school, codigo = :codigo, telefone = :telefone, email = :email, cnpj_escola = :cnpj_escola, endereco = :endereco");	

	

}else{
	
		$res = $pdo->prepare("UPDATE escolas SET nome_school = :nome_school, codigo = :codigo, telefone = :telefone, email = :email, cnpj_escola = :cnpj_escola, endereco = :endereco WHERE id = '$id'");
	}
	

	

$res->bindValue(":nome_school", $nome_school);
$res->bindValue(":codigo", $codigo);
$res->bindValue(":telefone", $telefone);
$res->bindValue(":email", $email);
$res->bindValue(":cnpj_escola", $cnpj_escola);
$res->bindValue(":endereco", $endereco);


$res->execute();


echo 'Salvo com Sucesso!';

?>