var btnEntrar = document.querySelector("#btnEntrar")
var btnCancelar = document.querySelector("#btnCancelar")


// btnCancelar


btnEntrar.addEventListener('click', async function (event){
    event.preventDefault()
    
    var login = document.querySelector("#loginTxt").value
    var senha = document.querySelector("#senhaTxt").value
    
    const config = {
        method: "post",
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            usuario: login,
            password: senha
        })
    }
    
    const response = await fetch('../../controller/ControllerLogin.php', config)
    const require = await response.json()
    
    if(require.status == 1){
        alert(require.dados.nome + "\n" + require.dados.senha)
        window.location.href = "../consulta/contatos.php"
    }else{
        alert("Informações erradas, tente novamente!!")

    }
  


})