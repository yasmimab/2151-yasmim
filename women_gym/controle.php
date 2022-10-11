<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ETEOT</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
  
    <div class="container-fluid bg-dark text-white">
        <div class="row p-2">
            <div class="col text-start">
                LOGO
            </div>
            <div class="col text-center">
                Minha Página
            </div>
            <div class="col text-end">
                <?php
                    if(!isset($_SESSION)){
                        session_start();
                    }
                    if(isset($_SESSION['login'])){
                        $login = $_SESSION['login'];
                        $nome = $_SESSION['nome'];
                        $email = $_SESSION['email'];
                        $nivel = $_SESSION['nivel'];
                        $foto = $_SESSION['foto'];

                        echo "
                            Bem-vindo $nome | 
                            <a href='\php/adm/logout.php'> LOGOUT </a>
                        ";
                    }
                    else{
                        echo "
                            <a href='\php/adm/login.php'> LOGIN </a> |
                            <a href='\php/usuarios/formularioUsuario.php'> Não possuo Cadastro</a>
                        ";
                    }
                    
                ?>
            </div>
        </div>
    </div>