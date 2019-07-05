<?php
session_start();
include('db.php');
if(empty($_POST['usuario']) || empty($_POST['senha']))
{
    header('location:logar.php');
    exit();
}
$usuario= mysqli_real_escape_string($conexao,$_POST['usuario']);
$senha= mysqli_real_escape_string($conexao,$_POST['senha']);

$query = "SELECT id_usuario,nome FROM usuarios where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao,$query);

$row = mysqli_num_rows($result);

if($row == 1){
    $usuario_bd = mysqli_fetch_assoc($result);
    $_SESSION['nome'] = $usuario_bd['nome'];
    header('Location:painel.php');
    exit();
}else{
    header('Location:logar.php');
}