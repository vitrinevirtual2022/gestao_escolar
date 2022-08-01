<?php 
require_once("../../conexao.php"); 

$id = $_POST['id'];



$pdo->query("DELETE FROM escolas WHERE id = '$id'");


echo 'Excluída com Sucesso!';

?>