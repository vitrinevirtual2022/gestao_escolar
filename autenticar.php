<?php 
require_once("conexao.php");
@session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

$query = $pdo->prepare("SELECT * FROM usuarios where email = :email and senha = :senha");
$query->bindValue(":senha", $senha);
$query->bindValue(":email", $email);
$query->execute();

$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){

	$_SESSION['nivel_usuario'] = $res[0]['nivel'];

	$nivel = $res[0]['nivel'];

	if($nivel == 'Admin'){
		echo "<script language='javascript'> window.location='painel-adm' </script>";
	}else if($nivel == 'professor'){
		echo "<script language='javascript'> window.location='painel-professor' </script>";
	}else if($nivel == 'secretaria'){
		echo "<script language='javascript'> window.location='painel-secretaria' </script>";
	}else if($nivel == 'aluno'){
		echo "<script language='javascript'> window.location='painel-aluno' </script>";
	}else if($nivel == 'coordenador'){
		echo "<script language='javascript'> window.location='painel-coordenador' </script>";
	}
}else{
		echo "<script language='javascript'> window.alert('Usuário ou Senha Incorreta!') </script>";
		echo "<script language='javascript'> window.location='index.php' </script>";	
	}

?>