<?php
    include "conexao.php";

    if(isset($_POST['email'])){
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);
        
        //escreve a sql
        $sql = "select * from usuarios where email = '$email' and senha = '$senha'";
        //executa a sql
        $testeLogin = mysqli_query($conexao,$sql);
        $existe = mysqli_num_rows($testeLogin);
       
        
        if($existe){
            //carrega a sql em um vetor(array)
            $dados = mysqli_fetch_array($testeLogin);
            $senha = $dados['senha'];
            $nome = $dados['nome'];
            $nivel = $dados['nivel'];
            $foto = $dados['foto'];

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['nome'] = $nome;
            $_SESSION['email'] = $email;
            $_SESSION['nivel'] = $nivel;
            $_SESSION['foto'] = $foto;


            if($nivel == "adm"){
                header('location: adm.php');
            }
            else{
                header('location: usuarios/perfil.php');
            }
        }
        else{
            echo "Usuário ou senha inválidos.";
            echo "<p>$email . $senha </p>";
            echo "<p> $sql</p>";
            echo "<p> $existe</p>";
        }
    }
    

?>