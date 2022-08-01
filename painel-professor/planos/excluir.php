<?php 
require_once("../../conexao.php"); 

$id = $_POST['id'];

$pdo->query("DELETE FROM plano_anual WHERE id = '$id'");


echo 'Excluído com Sucesso!';

?>