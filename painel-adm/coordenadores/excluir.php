<?php 
require_once("../../conexao.php"); 

$id = $_POST['id'];

$pdo->query("DELETE FROM coordenadores WHERE id = '$id'");


echo 'Excluído com Sucesso!';

?>