(async function teste(){

    
    const response = await fetch("../controller/ControllerListar.php", {method:"get"})
    
    const require = await response.json()
    alert('oi')
    console.log(
        require.status
    )
        
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
        </tr>`
    }
    

})()


