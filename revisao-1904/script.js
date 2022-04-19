function radio(){
    
    //entrada
    horario= document.form.horario.value;

    //processamento
    if(horario== "manha"){
        valor = 1500;
    } 
    else if(horario== "tarde"){
    valor = 1800;
    } 
    else{
        valor = 2300;
    }
    
    //saída
    document.getElementById('total').value=valor;
}