<?php 
require_once("../../conexao.php"); 

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];


$antigo = $_POST['antigo'];

$id = $_POST['txtid2'];

if($nome == ""){
	echo 'O nome do Documento é Obrigatório!';
	exit();
}


//VERIFICAR SE O REGISTRO JÁ EXISTE NO BANCO
if($antigo != $nome){
	$query = $pdo->query("SELECT * FROM documentos where nome = '$nome' ");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$total_reg = @count($res);
	if($total_reg > 0){
		echo 'O Documento já existe!';
		exit();
	}
}

//SCRIPT PARA SUBIR FOTO NO BANCO
$nome_img = preg_replace('/[ -]+/' , '-' , @$_FILES['imagem']['name']);
$caminho = '../../img/documentos/' .$nome_img;
if (@$_FILES['imagem']['name'] == ""){
  $imagem = "sem-foto.jpg";
}else{
    $imagem = $nome_img;
}

$imagem_temp = @$_FILES['imagem']['tmp_name']; 
$ext = pathinfo($imagem, PATHINFO_EXTENSION);   
if($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg' or $ext == 'gif' or $ext == 'pdf' or $ext == 'docx' or $ext == 'xlsx' or $ext == 'zip' or $ext == 'rar'){ 
move_uploaded_file($imagem_temp, $caminho);
}else{
	echo 'Extensão de arquivo não permitido!';
	exit();
}


if($id == ""){
	$res = $pdo->prepare("INSERT INTO documentos SET nome = :nome, descricao = :descricao, arquivo = :arquivo");
	

}else{
	$res = $pdo->prepare("UPDATE documentos SET nome = :nome, descricao = :descricao, arquivo = :arquivo WHERE id = '$id'");

	
	
}

$res->bindValue(":nome", $nome);
$res->bindValue(":descricao", $descricao);
$res->bindValue(":arquivo", $imagem);



$res->execute();


echo 'Salvo com Sucesso!';

?>