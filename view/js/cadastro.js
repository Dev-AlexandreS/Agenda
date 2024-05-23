var btnEnviar = document.querySelector('#btnEnviar')


btnEnviar.addEventListener('click', async function(event){
    event.preventDefault()
    
    var nome = document.querySelector('#nome').value
    var dataNasc = document.querySelector('#datanasc').value
    var email = document.querySelector('#email').value
    var tel = document.querySelector('#telefone').value
    var senha = document.querySelector('#senha').value
    var confSenha = document.querySelector('#confsenha').value
    
    var password = null
    
    // if (senha == confSenha){
    //     return password = senha
    // }
    const config = {
        method: "post",
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            nome: nome,
            dataNasc: dataNasc,
            email: email,
            tel: tel,
            senha: senha
        })
    }

    const response = await fetch("../../controller/ControllerCad.php", config)
    const require = await response.json()
    
    if(require.status == 1){
        window.location.href = "../mainpage/contatos.php"
    }else{
        alert("Erro ao cadastrar!")
    }

})