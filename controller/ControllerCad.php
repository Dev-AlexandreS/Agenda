<?php

require_once('../model/ModelCad.php');
require_once('../configuracao/conexao.php');

$json = file_get_contents('php://input');
$redbody = json_decode($json);

$nome = $redbody->nome;
$dataNasc = $redbody->dataNasc;
$email = $redbody->email;
$tel = $redbody->tel;
$senha = $redbody->senha;
$conexao = new Conexao();

$banco = $conexao->abrirConexao();


$m = new ModelCad($banco);

$m->nome = $nome;
$m->dataNasc = $dataNasc;
$m->email = $email;
$m->tel = $tel;
$m->senha = $senha;

$retorno = $m->Cadastrar();

echo json_encode($retorno);