function calculos(form){
    form.login.value= form.login.value.toUpperCase();

    //entrada de dados
    pagamento = form.pagamento.value

    quant1 = form.quant1.value;
    quant2 = form.quant2.value;
    quant3 = form.quant3.value;
    quant4 = form.quant4.value;

    //processamento
    tot1 = quant1 * 300;
    tot2 = quant2 * 700;
    tot3 = quant3 * 650;
    tot4 = quant4 * 299;

    if(pagamento == "Dinheiro"){
        perc= 0.15;
    } else {
        perc = 0;
    }

    total= tot1 + tot2 + tot3 + tot4;
    desconto = total * perc;
    apagar = total - desconto;

    //saída
    form.tot1.value = "R$ " + tot1.toFixed(2);
    form.tot2.value = "R$ " + tot2.toFixed(2);
    form.tot3.value = "R$ " + tot3.toFixed(2);
    form.tot4.value = "R$ " + tot4.toFixed(2);

    document.getElementById("total").value = total.toFixed(2);
    document.getElementById("desconto").value = desconto.toFixed(2);
    document.getElementById("apagar").value = apagar.toFixed(2);
}

function confirma(form){
    apagar = form.apagar.value;

    if(form.login.value == ""){
        alert("o campo Nome é obrigatório");
        form.login.focus();
        return false;
    } 
    
    else if(form.senha1.value == ""){
        alert("o campo Senha é obrigatório");
        form.senha1.focus();
        return false;
    }

    else if(form.senha1.value != form.senha2.value){
        alert("o campo Senha está diferente da Confirmação de Senha");
        form.senha1.focus();
        return false;
    }

    else if ((quant1 == 0) && (quant2 == 0) && (quant3 == 0) && (quant4 == 0)){
        alert("Você precisa selecionar pelo menos 1 produto");
        form.quant1.focus();
        return false
    }

    else{
        if(confirm("Confirma o envio do Orçamento no valor de " + total)){
            alert("Orçamento enviado com sucesso!");
            return true;
        }
        else{
            return false;
        }
    }
}

function senha(){
    senha1 = document.orcamento.senha1.value;
    senha2 = document.orcamento.senha2.value;

    if(senha1 != senha2){
        document.getElementById("msg").style.display = "block";
    }

    else{
        document.getElementById("msg").style.display = "none";
    }
}

function pessoa(obj){
    if(obj == "pf"){
        document.getElementById("cpf").style.display = "block"
        document.getElementById("cnpj").style.display = "none"
    }

    else{
        document.getElementById("cpf").style.display = "none"
        document.getElementById("cnpj").style.display = "block"
    }
}

function mascara_cpf(obj){
   
    if(obj.value.length == 3){
        obj.value += ".";
    }
    if(obj.value.length == 7){
        obj.value += ".";
    }
    if(obj.value.length == 11){
        obj.value += "-";
    }
}
function salto(campo,digito){
    if(campo == "cpf"){
        if(digito.length > 13){
            document.orcamento.telefone.focus();
        }
    }
}
function somente_numero(e){
    tecla = (window.event)?event.keyCode:e.whitch;
    if((tecla >=48 && tecla <= 57)|| (tecla>=96 && tecla<=105) || (tecla = 8) || (tecla = 37) || (tecla == 39) || (tecla == 46)){
        return true;
    }
    else{
        return false;
    }
}