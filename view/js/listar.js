(async function teste(){

    
    const response = await fetch("../../controller/ControllerListar.php", {method:"get"})
    
    const require = await response.json()
    // alert('oi')
    // console.log(
    //     require.status
    // )
        
    var tabela = document.getElementById("tbody")
    
    
    for (const item of require.dados) {
        tabela.innerHTML += `
        <tr>
            <td>${item.id}</td>
            <td>${item.nome}</td>
            <td>${item.data_nasc}</td>
            <td>${item.telefone}</td>
            <td>${item.email}</td>
            <td>${item.senha}</td>
            <td>
            <div class="rowItem">
                <button class="btnAlter" onclick="carregarPagina(${item.id})"><i class="bi bi-pencil"></i></button>
                <button class="btnDel" onclick="deletarPeloId(${item.id})" ><i class="bi bi-trash-fill"></i></button>
            </div>
                </td>
        </tr>`
        
    }
    
    
})()


function carregarPagina(id){
   window.location.href = `../alterar/index.php?id=${id}`
   }
async function deletarPeloId(ID){
    
    if (confirm("Deseja deletar?") == true) {
        
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
    
    const request = await fetch("../../controller/ControllerDeletar.php", config)
    
    const response = await request.json()

    if(response.status){
        alert("Deletado com sucesso")
        window.location.reload()
    }
            
    } else {

            alert("cancelado")
      
    }
          
           
        
}

        