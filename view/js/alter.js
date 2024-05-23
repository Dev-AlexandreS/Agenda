
async function carregarPagina(ID){
    const config = {
        method: "post",
        headers: {
            'accept': 'application/json',
            'content-Type': 'application/json'
        },
        body: JSON.stringify({
            idUsuario: ID
        })
    }

    const request = await fetch("../../controller/ControllerAlter.php", config)
        
    const response = await request.json()


    var nome = document.getElementById("nome").value = response.dados.nome;
    var datanasc = document.getElementById("datanasc").value = response.dados.data_nasc;
    var email = document.getElementById("email").value = response.dados.email;
    var telefone = document.getElementById("telefone").value = response.dados.telefone;
    var senha = document.getElementById("senha").value = response.dados.senha;

}

var txtid = document.getElementById("txtId").value

carregarPagina(txtid)

var btnAlter = document.getElementById("btnAlter")

btnAlter.addEventListener('click', async (event)=>{
    event.preventDefault()

    var nome = document.getElementById("nome").value
    var datanasc = document.getElementById("datanasc").value
    var email = document.getElementById("email").value
    var telefone = document.getElementById("telefone").value
    var senha = document.getElementById("senha").value


    const config = {
        method: "post",
        headers: {
            'accept': 'application/json',
            'content-Type': 'application/json'
        },
        body: JSON.stringify({
            id : txtid,
            nome : nome,
            datanasc : datanasc,
            email : email,
            telefone : telefone,
            senha : senha
        })
    }

    const request = await fetch("../../controller/ControllerEditar.php", config)
        
    const response = await request.json()

    if (response.status == 1){
        alert( 
            "Deu certo!!!"
        )
    }


})

