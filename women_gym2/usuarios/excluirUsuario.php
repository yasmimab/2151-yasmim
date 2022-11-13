<?php

    include "adm/conexao.php";

    if(isset($_GET['login'])){
        $login = $_GET['login'];

        $sql = "delete from usuarios where login = '$login'";
        $excluir = mysqli_query($conexao,$sql);

        //feedback ao usuario
        if($excluir){
            echo "
                <script>
                    alert('Usuário Excluido com Sucesso!');
                    window.location = 'listarUsuario.php';
                </script>
            "; 
        }
        else{
           echo "
            <p> Banco de Dados temporariamente fora do ar. Tente novamente mais tarde. </p>
            <p> Entre em contato com o administrador do site. </p>
           "; 
           echo mysqli_error($conexao);
        }
    }

?>