<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '' ;
$dbnome = 'tcc';

$conexao = mysqli_connect($servidor,$usuario,$senha,$dbnome) or die ('Não conectou');

