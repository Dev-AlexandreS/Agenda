<?php

require_once('../model/modelUsuario.php');
require_once('../configuracao/conexao.php');


$json = file_get_contents('php://input');

$redbody = json_decode($json);

$nome = $redbody->nome;
$dataNasc = $redbody->datanasc;
$email = $redbody->email;
$tel = $redbody->telefone;
$senha = $redbody->senha;
$id = $redbody->id;

$conexao = new Conexao();

$banco = $conexao->abrirConexao();


$m = new ModelTeste($banco);

$m->nome = $nome;
$m->id = $id;
$m->dataNasc = $dataNasc;
$m->email = $email;
$m->tel = $tel;
$m->senha = $senha;

$retorno= $m->Alter();

echo json_encode($retorno);