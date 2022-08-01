<?php 
require_once("../../conexao.php"); 

$nome = $_POST['nome'];
$formacao = $_POST['formacao'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$nome_escola = $_POST['nome_escola'];

$antigo = $_POST['antigo'];
$antigo2 = $_POST['antigo2'];
$id = $_POST['txtid2'];

if($nome == ""){
	echo 'O nome é Obrigatório!';
	exit();
}

if($cpf == ""){
	echo 'O CPF é Obrigatório!';
	exit();
}

if($email == ""){
	echo 'O email é Obrigatório!';
	exit();
}



//VERIFICAR SE O REGISTRO JÁ EXISTE NO BANCO
if($antigo != $cpf){
	$query = $pdo->query("SELECT * FROM professores where cpf = '$cpf' ");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$total_reg = @count($res);
	if($total_reg > 0){
		echo 'O CPF já está Cadastrado!';
		exit();
	}
}


//VERIFICAR SE O REGISTRO COM MESMO EMAIL JÁ EXISTE NO BANCO
if($antigo2 != $email){
	$query = $pdo->query("SELECT * FROM professores where email = '$email' ");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$total_reg = @count($res);
	if($total_reg > 0){
		echo 'O Email já está Cadastrado!';
		exit();
	}
}



//SCRIPT PARA SUBIR FOTO NO BANCO
$nome_img = preg_replace('/[ -]+/' , '-' , @$_FILES['imagem']['name']);
$caminho = '../../img/professores/' .$nome_img;
if (@$_FILES['imagem']['name'] == ""){
  $imagem = "sem-foto.jpg";
}else{
    $imagem = $nome_img;
}

$imagem_temp = @$_FILES['imagem']['tmp_name']; 
$ext = pathinfo($imagem, PATHINFO_EXTENSION);   
if($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg' or $ext == 'gif'){ 
move_uploaded_file($imagem_temp, $caminho);
}else{
	echo 'Extensão de Imagem não permitida!';
	exit();
}


if($id == ""){
	$res = $pdo->prepare("INSERT INTO professores SET nome = :nome, formacao = :formacao, cpf = :cpf, email = :email, endereco = :endereco, telefone = :telefone, nome_escola = :nome_escola, foto = '$imagem'");	

	$res2 = $pdo->prepare("INSERT INTO usuarios SET nome = :nome, cpf = :cpf, email = :email, senha = :senha, nivel = :nivel");	
	$res2->bindValue(":senha", '123');
	$res2->bindValue(":nivel", 'professor');

}else{
	if($imagem == "sem-foto.jpg"){
		$res = $pdo->prepare("UPDATE professores SET nome = :nome, formacao = :formacao, cpf = :cpf, email = :email, endereco = :endereco, telefone = :telefone, nome_escola = :nome_escola WHERE id = '$id'");
	}else{
		$res = $pdo->prepare("UPDATE professores SET nome = :nome, formacao = :formacao, cpf = :cpf, email = :email, endereco = :endereco, telefone = :telefone, nome_escola = :nome_escola, foto = '$imagem' WHERE id = '$id'");
	}
	

	$res2 = $pdo->prepare("UPDATE usuarios SET nome = :nome, cpf = :cpf, email = :email WHERE cpf = '$antigo'");	
	
}

$res->bindValue(":nome", $nome);
$res->bindValue(":formacao", $formacao);
$res->bindValue(":cpf", $cpf);
$res->bindValue(":telefone", $telefone);
$res->bindValue(":email", $email);
$res->bindValue(":endereco", $endereco);
$res->bindValue(":nome_escola", $nome_escola);

$res2->bindValue(":nome", $nome);
$res2->bindValue(":cpf", $cpf);
$res2->bindValue(":email", $email);


$res->execute();
$res2->execute();

echo 'Salvo com Sucesso!';

?>