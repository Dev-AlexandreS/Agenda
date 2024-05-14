<?php

    $id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 class="titulo">CADASTRO</h1>

<label for="nome">Nome</label>

<input class="input" type="text" id="nome" placeholder="Digite seu nome..." required>

<label for="datanasc">Data de nascimento</label>

<input class="input" type="date" id="datanasc" name="ndatanasc" required>

<label for="email">Email</label>

<input class="input" type="email" id="email" name="nemail" placeholder="Digite seu email:" required>

<label for="telefone">Telefone</label>

<input class="input" type="tel" id="telefone" name="ntelefone" placeholder="Digite seu telefone:" required>

<label for="senha">Senha</label>

<input class="input" type="password" id="senha" placeholder="Digite sua senha" required>
</body>
</html>