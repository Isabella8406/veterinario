<?php
 include_once "conexao.php";
 $cod_vet = filter_var($_GET['cod_vet'], FILTER_SANITIZE_NUMBER_INT);

 $consulta = $conectar -> query("SELECT * FROM veterinario where cod_vet = '$cod_vet'");

 $linha = $consulta -> fetch(PDO::FETCH_ASSOC);
?>
<form action="editar.php" method="post">
 Nome:  <input type="text" name="nome"   value="<?php echo $linha['nome']?>" id="nome"/><br>
 CPF:   <input type="text" name="cpf"   value="<?php echo $linha['cpf']?>" id="cpf"/><br>
 Crm:   <input type="text" name="crm"     value="<?php echo $linha['crm']?>" id="crm"/><br>
 Email: <input type="text" name="email" value="<?php echo $linha['email']?>" id="email"/><br>

 <input type="hidden" name="cod_vet" value="<?php echo $linha['cod_vet']?>">

 <input type="submit" value="Editar">
</form>