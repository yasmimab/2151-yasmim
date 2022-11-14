<?php
    include "../adm/conexao.php";

    if(isset($_POST['nome'])){
        //coletar dados do formulário
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $nome = $_POST['nome'];
        $nivel = 'usu';
        $foto = '../fotos/semfoto.png';

        //comunicação com o banco de dados - insere no banco
        $sql = "insert into usuarios(email,senha,nome,nivel,foto) values('$email','$senha','$nome','$nivel','$foto')";
        $incluir = mysqli_query($conexao,$sql);

        //saída - feedback com o usuário
        if($incluir){
            echo "
                <script>
                    alert('Usuário cadastrado com sucesso');
                    window.location = 'listarUsuario.php';
                </script>
            ";
        }
        else{
            echo "
            <p> Sistema Temporariamente fora do ar. </p>
            <p> Entre em contato com o administrador do Sistema. </p>

        ";
        mysqli_error($conexao,$sql);
        }
    }
    else{
        echo "
            <p> Está é uma página de tratamento de dados. </p>
            <p> Clique <a href='formularioUsuario.php'> aqui </a> para incluir um usuário. </p>
        ";
    }

?>