<?php
include_once "conexao.php";
try{
$cod_vet = filter_var($_GET['cod_vet'], FILTER_SANITIZE_NUMBER_INT);
$delete = $conectar -> prepare ("DELETE FROM veterinario WHERE cod_vet = :cod_vet");
$delete ->bindParam(':cod_vet',$cod_vet);
$delete ->execute();
header("location: index.php");
} catch(PDOException $e) {
echo 'Erro: '.$e->getMessage();
}