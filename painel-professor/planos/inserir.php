<?php 
require_once("../../conexao.php"); 

$nome_plano = $_POST['nome_plano'];
$turma = $_POST['turma'];
$escola = $_POST['escola'];
$plano_professor = $_POST['plano_professor'];
$plano_disciplina = $_POST['plano_disciplina'];
$plano_serie = $_POST['plano_serie'];



$antigo = $_POST['antigo'];

$id = $_POST['txtid2'];

if($nome_plano == ""){
	echo 'O nome do plano é Obrigatório!';
	exit();
}


//VERIFICAR SE O REGISTRO JÁ EXISTE NO BANCO
if($antigo != $nome_plano){
	$query = $pdo->query("SELECT * FROM plano_anual where nome_plano = '$nome_plano' and turma = '$turma' ");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$total_reg = @count($res);
	if($total_reg > 0){
		echo 'O Plano Anual já está Cadastrado!';
		exit();
	}
}

//SCRIPT PARA SUBIR FOTO NO BANCO
$nome_img = preg_replace('/[ -]+/' , '-' , @$_FILES['imagem']['name']);
$caminho = '../../img/arquivos-plano/' .$nome_img;
if (@$_FILES['imagem']['name'] == ""){
  $imagem = "sem-foto.jpg";
}else{
    $imagem = $nome_img;
}

$imagem_temp = @$_FILES['imagem']['tmp_name']; 
$ext = pathinfo($imagem, PATHINFO_EXTENSION);   
if($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg' or $ext == 'gif' or $ext == 'pdf' or $ext == 'zip' or $ext == 'rar'){ 
move_uploaded_file($imagem_temp, $caminho);
}else{
	echo 'Extensão de Imagem não permitida!';
	exit();
}


if($id == ""){
	$res = $pdo->prepare("INSERT INTO plano_anual SET nome_plano = :nome_plano, turma = :turma, escola = :escola, plano_professor = :plano_professor, plano_disciplina = :plano_disciplina, plano_serie = :plano_serie, arquivo = :arquivo");
	
	$res->bindValue(":turma", $turma);	


}else{
	$res = $pdo->prepare("UPDATE plano_anual SET nome_plano = :nome_plano, escola = :escola, plano_professor = :plano_professor, plano_disciplina = :plano_disciplina, plano_serie = :plano_serie, arquivo = :arquivo WHERE id = '$id'");

	
	
}

$res->bindValue(":nome_plano", $nome_plano);
$res->bindValue(":escola", $escola);
$res->bindValue(":plano_professor", $plano_professor);
$res->bindValue(":plano_disciplina", $plano_disciplina);
$res->bindValue(":plano_serie", $plano_serie);
$res->bindValue(":arquivo", $imagem);



$res->execute();


echo 'Salvo com Sucesso!';

?>