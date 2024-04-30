<?php

require_once('../model/ModelUsuario.php');
require_once('../configuracao/conexao.php');

$conexao = new Conexao();

$banco = $conexao->abrirConexao();

$m = new ModelTeste($banco);

$retorno = $m->Listar();

echo json_encode($retorno);