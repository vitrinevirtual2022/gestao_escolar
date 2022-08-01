<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once("../../conexao.php");
@session_start();

$conteudo = $_POST['conteudo'];
$aluno = $_POST['aluno'];
$professor = $_POST['professor'];
$id_send = $aluno;

if ($conteudo == "") {
    echo 'Você precisa escrever sua mensagem!';
    exit();
}

$sql = "INSERT INTO mensagens_aluno_professor SET 
            aluno = :aluno, 
            professor =:professor,
            conteudo = :conteudo,
            `data` = :datee,
            id_send =:id_send 
        ";

$res = $pdo->prepare($sql);

$now = new DateTime();
$now = $now->format('Y-m-d H:i:s');

$res->bindValue(":conteudo", $conteudo);
$res->bindValue(":aluno", $aluno);
$res->bindValue(":professor", $professor);
$res->bindValue(":id_send", $id_send);
$res->bindValue(":datee", $now);

$res->execute();


echo 'Salvo com Sucesso!';

?>
