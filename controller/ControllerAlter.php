<?php

require_once('../model/modelUsuario.php');
require_once('../configuracao/conexao.php');

$json = file_get_contents('php://input');

$redbody = json_decode($json);

$idUser = $redbody->idUsuario;

$conexao = new Conexao();

$bd = $conexao->abrirConexao();

$model = new ModelTeste($bd);

$model->id = $idUser;


$retorno = $model->ListarPeloId();

echo json_encode($retorno);




