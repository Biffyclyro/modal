<?php 
	include 'crudFuncionario.php';
	include 'modal.php';

	$opcao=$_POST["opcao"];
	session_start();

	if($opcao=="Cadastrar"){
		$nome=$_POST["nome"];
		$cargo=$_POST["cargo"];
		cadastrarFuncionario($nome, $cargo);
		$_SESSION['mensagem']='Funcionario(a) cadastrado(a) com sucesso';
		$_SESSION['local']='cadastrarFuncionario.php';
		modalConfirmacao();
		//header("Location: cadastrarFuncionario.php");
	}else if($opcao=="Alterar"){
		$codigo=$_POST["codigo"];
		$nome=$_POST["nome"];
		$cargo=$_POST["cargo"];
		alterarFuncionario($codigo, $nome, $cargo);
		$_SESSION['mensagem']='Funcionario(a) alterado(a) com sucesso';
		$_SESSION['local']='visualizarFuncionario.php';
		modalConfirmacao();
		//header("Location: visualizarFuncionario.php");

	}else if($opcao=="Excluir"){
		$codigo=$_POST["codigo"];
		modalDesejaExcluir($codigo);


	}else if($opcao=="ExcluirSim"){
		$codigo=$_POST["codigo"];
		excluirFuncionario($codigo);
		$_SESSION['mensagem']='Funcionario(a) alterado(a) com sucesso';
		$_SESSION['local']='visualizarFuncionario.php';
		modalConfirmacao();		
		//header("Location: visualizarFuncionario");
	}




?>