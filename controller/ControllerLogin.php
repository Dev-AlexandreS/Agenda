<?php

require_once('../model/modelUsuario.php');
require_once('../configuracao/conexao.php');

$json = file_get_contents('php://input');

$redbody = json_decode($json);

$login = $redbody->usuario;
$senha = $redbody->password;

$conexao = new Conexao();

$banco = $conexao->abrirConexao();

$m = new ModelTeste($banco);

$m->nome = $login;
$m->senha = $senha;

$retorno = $m->Entrar();

echo json_encode($retorno);
// $retorno = ['login' => $login, 'senha' => $senha];

// echo json_encode($retorno);
