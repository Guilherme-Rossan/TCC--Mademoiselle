<?php
session_start();
include 'db.php';

$nome = mysqli_real_escape_string($conexao,$_POST['nome']);
$usuario = mysqli_real_escape_string($conexao,$_POST['usuario']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);

$sql= "SELECT count(*) as total from usuarios where usuario='$usuario'";
$result = mysqli_query($conexao,$sql);
$row = mysqli_fetch_assoc($result);
if ($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('Location:cadastro.php');
    exit();
} 

$sql = "INSERT INTO usuarios(nome,usuario,senha) values ('$nome','$usuario',md5('{$senha}'))";

if($conexao->query($sql)=== TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao ->close();
header('Location: cadastro.php');
exit();
?>