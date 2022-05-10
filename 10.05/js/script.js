function CalcularPedido(){
    //entrada
    burguer = document.getElementById("burguer").value
    refri = document.getElementById("refri").value
    batata = document.getElementById("batata").value
    quantBurguer = document.getElementById("quantBurguer").value
    quantRefri = document.getElementById("quantRefri").value
    quantBatata = document.getElementById("quantBatata").value
    
   

    //processo
    /*burguer*/
    if(burguer == "bigmac"){
        precoH = "14.90"
    } else if(burguer == "quarteirao"){
        precoH = "13.90"
    } else{
        precoH = "12.90"
    }

    /*refri*/
    if(refri == "pequenoR"){
        precoR = "5.90"
    } else if(refri == "medioR"){
        precoR = "6.90"
    } else{
        precoR = "7.90"
    }

    /*batata*/
    if(batata == "pequenoB"){
        precoB = "5.90"
    } else if(batata == "medioB"){
        precoB = "6.90"
    } else{
        precoB = "7.90"
    }

    total = (precoH * quantBurguer) + (precoR * quantRefri) + (precoB * quantBatata)
    
    

    //saida
    document.getElementById("total").value = total
    
    
    
    

    
    
}