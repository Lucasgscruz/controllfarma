<?php

/*
Controller - 
*/
include('../model/cliente_model.php');

if(isset($_POST['submit'])){
	$nome=$_POST['nome'];
	$cpf=$_POST['cpf'];
	$pessoa = new Cliente();
	$pessoa->salvar_cliente($nome,$cpf);

}

?>
