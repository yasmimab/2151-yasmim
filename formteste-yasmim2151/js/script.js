function calc(){
    //entrada
    pagamento = document.form.pagamento.value;

    //processamento
    if(pagamento == "cartao"){
        valor = 7600800;
    }
    
    else{
        valor = 7200800;
    }
    
    //saída
    document.getElementById('total').value = valor;

    document.getElementById('banco').checked = false;
    document.getElementById('tv').checked = false;
    document.getElementById('led').checked = false;
        
}

function opcionais(valor,marcado){
    //entrada
    total = document.getElementById('total').value;
    
    //processamento
    if (marcado){
      total = Number(total) + Number(valor);
    }
    else{
      total = Number(total) - Number(valor);
      
    }
    
    //saída
    document.getElementById('total').value = total;
}

function trocaModelo(){

    //entrada
    modelo = document.getElementById('modelo').value;
    

    //processamento
    if (modelo == "ferrari") {
        newFundo = "img/ferrari.jpg";
        newFoto = "img/mario.png"
        titulo = "Ferrari LaFerrari";
        cor = "red";

        altura = "85%";
        right = "0%";
        bottom = "-5%";
      }
    else if (modelo == "pagani"){
        newFundo = "img/pagani.jpg";
        newFoto = "img/sofia.png";    
        titulo = "Pagani Huayra";
        cor = "blue";

        altura = "90%";
        right = "5%";
        bottom = "-5%";
    }
    else if(modelo == "elva"){
        newFundo = "img/elva.jpg";
        newFoto = "img/pjmasks.png";    
        titulo = "McLaren Elva";
        cor = "orange";

        altura = "85%";
        right = "-2%";
        bottom = "0%";
    }
    else{
        newFundo = "";
        newFoto = "";    
        titulo = "modelo";
        cor = "black";

        altura = "100%";
        right = "0%";
        bottom = "0%";
    }
 

    //saída
    document.body.style.backgroundImage = "url(" + newFundo + ")";
    document.getElementById('foto').src = newFoto;
    document.getElementById('titulo').value = titulo;
    document.getElementById('titulo').style.color = cor;
    document.body.style.color = cor;

    document.getElementById('foto').style.height = altura;
    document.getElementById('foto').style.right = right;
    document.getElementById('foto').style.bottom = bottom;

}

function alerta(){
    //entrada
    total = document.getElementById('total').value;

    //processamento
    if (total < 7200800){
        msg = "Selecione a forma de Pagamento."
    }
    else{
        msg = "Obrigada pela Preferêcia. ";
    
        if (total >= 7208800) {
            total = total * 0.9;
            msg += "Você recebeu um desconto de 10%. ";
        }
  
        msg += "Valor a Pagar R$ " + total;
  
    }
    
   //saída
   //alert(msg);
    
    document.getElementById('mensagem').value = msg;
    $('#alerta').modal('show');
    
}