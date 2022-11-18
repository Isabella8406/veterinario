<?php
include_once "conexao.php";
try{

$nome = filter_var($_POST['nome']);
$cpf = filter_var($_POST['cpf']);
$crm = filter_var($_POST['crm']);
$email = filter_var($_POST['email']);

$insert = $conectar -> prepare ("INSERT INTO veterinario (nome, cpf, crm, email ) VALUES (:nome, :cpf, :crm, :email)");

$insert ->bindParam(':nome',$nome);
$insert ->bindParam(':cpf',$cpf);
$insert ->bindParam(':crm',$crm);
$insert ->bindParam(':email',$email);


$insert ->execute();
header("location: index.php");
} catch(PDOException $e) {
echo 'Erro: '.$e->getMessage();
}