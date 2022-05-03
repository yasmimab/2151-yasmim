function calc(){
   
    //entrada
    paga = document.form.pagamento.value;

    //processamento
    if(paga == "cartao"){
        
        valor = 7600800;
    }
    else{
        valor = 7200800;
    }

    //saida
    document.getElementById("total").value = valor;
    document.getElementById("banco").checked = false;
    document.getElementById("tv").checked = false;
    document.getElementById("luz").checked = false;
}

function adc(valor,marcado){
    //entrada
    total = document.getElementById("total").value

    //processamento
    if (marcado){
        total = Number(total) + Number(valor);
      }
      else{
        total = Number(total) - Number(valor);
        
      }

      //saida
      document.getElementById("total").value = total
}

function trocaModelo(){
    //entrada
    modelo = document.getElementById("modelo").value

    //processamento
    if(modelo == "ferrari"){
        newFundo = "img/ferrari.jpg"
        titulo = "Ferrari LaFerrari"
        cor = "red"    
    }
    else if(modelo == "pagani"){
        newFundo = "img/pagani.jpg"
        titulo = "Pagani Huayra"
        cor = "blue"
    }
    else if(modelo == "elva"){
        newFundo = "img/elva.jpg"
        titulo = "McLaren Elva"
        cor = "orange"
    }
    else{
        newFundo = ""
        titulo = "TENHA O CARRO DOS SEUS SONHOS"
        cor = "black"
    }

    //saida
    document.body.style.backgroundImage = "url(" + newFundo + ")";
    
    document.getElementById('titulo').value = titulo;
    document.getElementById('titulo').style.color = cor;
    document.body.style.color = cor;

    document.getElementById('foto').style.height = altura;
    document.getElementById('foto').style.right = right;
    document.getElementById('foto').style.bottom = bottom;
}

function alerta(){
    //entrada
    total = document.getElementById("total").value

    //processamento
    if(total < 7200800){
        alert("Selecione a forma de pagamento")
    }
    else{
        alert("Obrigado e continue comprando conosco")
    }

}
