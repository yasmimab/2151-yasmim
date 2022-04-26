function calc(){

    //entrada
    let horario = document.form.horario.value;

    //processamento
    if (horario == "manhã"){
        valor = 1500;
    }
    else if(horario == "tarde"){
        valor = 1800;
    }
    else{
        valor = 2300;
    }

    //saida
    document.getElementById('total').value = valor;

    document.getElementById('guloseimas').checked = false
    document.getElementById('personagens').checked = false
    document.getElementById('atrações').checked = false
    document.getElementById('maquiagemInfantil').checked = false
    document.getElementById('brindes').checked = false

}

function opcionais(valor,marcado) {
    total = document.getElementById('total').value;
    if (marcado){
        total = Number(total) + valor;
    }
    else{
        total = Number(total) - valor;
    }
    document.getElementById('total').value = total;
}

function trocarTema() {
    //entrada
    tema = document.getElementById("tema").value;

    //processamento
    if(tema == "mario") {
        titulo = "Super Mário Brós";
        newFundo = "img/mario.jpg";
        newFoto = "img/mario.png";
        cor = "red";

        altura = "100%"
        right = "0%"
        bottom = "-5%"
    }
     else if(tema == "sofia"){
        titulo = "Princesa Sofia";
        newFundo = "img/sofia.jpg";
        newFoto = "img/sofia.png";
        cor = "purple";

        altura = "90%"
        right = "5%"
        bottom = "-5%"
    }
     else if(tema == "pjmasks") {
        titulo = "PJ Masks";
        newFundo = "img/pjmasks.jpg";
        newFoto = "img/pjmasks.png";
        cor = "blue";

        altura = "85%"
        right = "-2%"
        bottom = "0%"
    }
    else {
        titulo = "Tema da Festa";
        newFundo = "";
        newFoto = "";
        cor = "black";

        altura = "100%"
        right = "0%"
        bottom = "0%"
    }

    //saída
    document.getElementById("titulo").value = titulo;
    document.body.style.backgroundImage = "url(" + newFundo + ")"; 
    document.getElementById("foto").src = newFoto;
    document.getElementById("titulo").style.color = cor;
    document.body.style.color = cor;

    document.getElementById("foto").style.height = altura
    document.getElementById("foto").style.right = right
    document.getElementById("foto").style.bottom = bottom
}

