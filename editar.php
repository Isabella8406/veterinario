<?php
include_once "conexao.php";
try{
$cod_vet = filter_var($_POST['cod_vet'], FILTER_SANITIZE_NUMBER_INT);
$nome = filter_var($_POST['nome']);
$cpf = filter_var($_POST['cpf']);
$crm = filter_var($_POST['crm']);
$email = filter_var($_POST['email']);

$update = $conectar -> prepare ("UPDATE veterinario SET nome = :nome, cpf = :cpf, crm = :crm, email = :email WHERE cod_vet = :cod_vet");
$update ->bindParam(':cod_vet',$cod_vet);
$update ->bindParam(':nome',$nome);
$update ->bindParam(':cpf',$cpf);
$update ->bindParam(':crm',$crm);
$update ->bindParam(':email',$email);

$update ->execute();
header("location: index.php");
} catch(PDOException $e) {
echo 'Erro: '.$e->getMessage();
}