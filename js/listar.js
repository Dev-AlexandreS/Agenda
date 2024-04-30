
const response = await fetch("../controller/ControllerListar.php", {method:"get"})
const require = await response.json()


var tabela = document.getElementById("tbody")

tabela.innerHTML
