<?php

    echo "<h1> Minha primeira linha PHP </h1>";
    print "<hr>";

    //echo e print fazem a mesma ação
    //porém o echo é mais usado pra imprimir
    //uma mensagem na tela

    //entrada de dados
    $a = 10;
    $b = 5;

    //processamento
    $soma = $a + $b;
    $subtracao = $a - $b;
    $divisao = $a / $b;
    $multiplicacao = $a * $b;
    $modulo = $a % $b;

    //saida
    echo "A soma é $soma <hr>";
    echo "$a + $b = $soma <br> <hr>";

    echo "A subtração é $subtracao <hr>";
    echo "$a - $b = $subtracao <br> <hr>";

    echo "A divisão é $divisao <hr>";
    echo "$a / $b = $divisao <br> <hr>";

    echo "A multiplicação é $multiplicacao <hr>";
    echo "$a * $b = $multiplicacao <br> <hr>";

    echo "O módulo é $modulo <hr>";
    echo "$a % $b = $modulo <br>";



?>