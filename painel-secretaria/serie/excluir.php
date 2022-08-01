<?php 
require_once("../../conexao.php"); 

$id = $_POST['id'];

$pdo->query("DELETE FROM serie WHERE id = '$id'");


echo 'Excluído com Sucesso!';

?>