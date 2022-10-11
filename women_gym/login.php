<?php
    include "controle.php";
?>
        <div class="container bg-info text-white p-3 mt-5 pag">
            <div class="text-center">
                <h1 class="mt-5"> Login </h1>
            </div>
            <form method="post" action="#">        
                <div class="mb-3">
                    <label for="login" class="form-label">Login</label>
                    <input type="text" class="form-control" id="login" name="login" required>
                </div>
                <div class="mb-3">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" required>
                </div>
                <div class="mb-3 mt-4">
                    <button type="submit" class="btn btn-primary form-control"> OK</button>
                </div>
                <p class="text-center"> 
                    <a href="../usuarios/formularioUsuario.php"> Não possuo Cadastro </a> 
                </p>
                <p class="text-center text-danger "> 
                    <?php
                        include "valida.php";
                    ?>
                </p>
            </form>
        </div>

<?php
    include "footer.php";
?>