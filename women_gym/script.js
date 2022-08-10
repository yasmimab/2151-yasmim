function cadastro(){
    let nome= document.getElementById("nome");
    let nasc= document.getElementById("nasc");
    let cpf= document.getElementById("cpf");
    let num= document.getElementById("num");
    let uni= document.getElementById("uni");
    let email= document.getElementById("email");
    let senha= document.getElementById("senha");
    let check= document.getElementById("check");

    if(nome == ""){
        alert("Algum dos campos não foi preenchido corretamente")
    } else if(nasc == ""){
        alert("Algum dos campos não foi preenchido corretamente")
    } else if(cpf == ""){
        alert("Algum dos campos não foi preenchido corretamente")
    } else if(num == ""){
        alert("Algum dos campos não foi preenchido corretamente")
    } else if(uni == ""){
        alert("Algum dos campos não foi preenchido corretamente")
    } else if(email == ""){
        alert("Algum dos campos não foi preenchido corretamente")
    } else if(senha == ""){
        alert("Algum dos campos não foi preenchido corretamente")
    } else if(check == ""){
        alert("Você não concordou com os termos de serviço")
    } else{
        alert("Cadastro finalizado! Verifique seu email.")
    }
    
}