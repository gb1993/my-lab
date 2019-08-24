<?php
session_start();
include('conexao.php');

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$CPF = mysqli_real_escape_string($conexao, $_POST['CPF']);
$cdcupom = mysqli_real_escape_string($conexao, $_POST['cdcupom']);
 
$query   = "select codCupom from cupom where codCupom = '$cdcupom'";
 
$result  = mysqli_query($conexao, $query);

$row     = mysqli_num_rows($result);


if($row == 1) {
	$_SESSION['cdcupom'] = $cdcupom;
	header('Location: validador.php');
	exit();
} else {
    $_SESSION['cupom_validado'] = true;
    $query2   = "insert into cupom (nome_cliente, cpf_cliente, codCupom) values ('$nome', '$CPF', '$cdcupom')";
    $result  = mysqli_query($conexao, $query2);

	header('Location: validador.php');
	exit();
}

?>