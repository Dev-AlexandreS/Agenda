<?php

    $id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração</title>
    <link rel="stylesheet" href="consulta.css">
    <script src="../js/alter.js"defer></script>
    <script>
    //     async function carregarPagina(ID){
    //     const config = {
    //         method: "post",
    //         headers: {
    //             'accept': 'application/json',
    //             'content-Type': 'application/json'
    //         },
    //         body: JSON.stringify({
    //             idUsuario: ID
    //         })
    //     }

    //     const request = await fetch("../../controller/ControllerAlter.php", config)
            
    //     const response = await request.json()


    //     var nome = document.getElementById("nome").value = response.dados.nome;
    //     var datanasc = document.getElementById("datanasc").value = response.dados.data_nasc;
    //     var email = document.getElementById("email").value = response.dados.email;
    //     var telefone = document.getElementById("telefone").value = response.dados.telefone;
    //     var senha = document.getElementById("senha").value = response.dados.senha;

    // }
    // carregarPagina()
    </script>
</head>

<body>
    <section class="container">

        <h1 class="titulo">Alteração</h1>

        <input id="txtId" type="hidden" value="<?=$id?>">

        <label for="nome">Nome</label>

        <input class="input" type="text" id="nome" >

        <label for="datanasc">Data de nascimento</label>

        <input class="input" type="text" id="datanasc" name="ndatanasc">

        <label for="email">Email</label>

        <input class="input" type="email" id="email" name="nemail" >

        <label for="telefone">Telefone</label>

        <input class="input" type="tel" id="telefone" name="ntelefone" >

        <label for="senha">Senha</label>

        <input class="input" type="text" id="senha">

        <button id="btnAlter" class="bts">Alterar</button>
    </section>
    </body>
</html>