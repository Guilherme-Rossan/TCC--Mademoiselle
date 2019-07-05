<?php
if(!$_SESSION['nome']){
    header('Location:logar.php');
    exit();
}