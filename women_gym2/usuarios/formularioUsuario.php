<?php
    include "adm/controle.php";
?>

<div class="container bg-info text-white p-3 mt-5 pag">
    <h1 class="text-center mt-5"> Cadastro de Usuários </h1>
    <form method="post" action="incluirUsuario.php">        
        <div class="mb-3">
            <label for="login" class="form-label">Login</label>
            <input type="email" class="form-control" id="login" name="login" required>
        </div>
        <div class="mb-3">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" required></input>
        </div>
        <div class="mb-3">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required></input>
        </div>
        <div class="mb-3 mt-4">
            <div class="row">
                <div class="col text-start">
                    <button type="button" class="btn btn-warning" onclick="history.go(-1)"> Voltar</button>
                </div>
                <div class="col text-end">
                    <button type="submit" class="btn btn-primary"> Cadastrar</button>
                </div>
            </div>
        </div>
        
    </form>


</div>

<?php
    include "adm/footer.php";
?>