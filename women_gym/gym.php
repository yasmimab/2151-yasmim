<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS DO PROJETO -->
    <link rel="stylesheet" href="css/style.css">

    <!-- CSS DO BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- ÍCONE DO SITE -->
    <link rel="shortcut icon" href="img/logo2.jpg" type="image/x-icon">

    <!-- TÍTULO DO PROJETO -->
    <title>Women Gym</title>
</head>
<body>
    <div class="">
        <div class="container_">
            <header>
                <img src="img/logo.png">
                <div class="">
                    <nav>
                        <ul>
                            <li><a href="#">Início</a></li>
                            <li><a href="#">Planos</a></li>
                            <li><a data-bs-toggle="modal" data-bs-target="#exampleModal1" href="#">Login</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <main>
                <div class="content_">
                    <h2 class="tit-1">Comece Já!</h2>
                    <h1 class="tit-2">Seja mais saudável</h1>
                    <h3 class="tit-3">Conosco</h3>
                    <p class="paragrafo">Uma academia só de mulheres para você se sentir segura!</p>
                    <h2 class="tit-4">Primeiro Dia Gratuito</h2>
                    <p class="paragrafo">Marque online</p>
                    <footer>
                        <div class="foot-content">
                            <button type="button" class="btn_" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Agende Já
                            </button>
        
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Cadastre-se</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
        
                                        <form>
                                            <div class="mb-3">
        
                                                <label for="nome" class="form-label">Nome Completo:</label>
                                                <input type="text" class="form-control" id="nome" aria-describedby="emailHelp" required>
                                                <label for="nasc" class="form-label">Data de Nascimento:</label>
                                                <input type="date" class="form-control" id="nasc" aria-describedby="emailHelp" required>
                                                <label for="cpf" class="form-label">CPF:</label>
                                                <input type="type" class="form-control" id="cpf" maxlength="14" aria-describedby="emailHelp" placeholder="xxx.xxx.xxx-xx" required>
                                                <label for="num" class="form-label">Número:</label>
                                                <input type="tel" class="form-control" id="num" aria-describedby="emailHelp" placeholder="DDD + Celular" maxlength="12" required>
                                                <label for="uni">Unidade de preferência</label>
                                                <select class="form-select" aria-label="Default select example" id="uni" required>
                                                    <option selected>Selecione</option>
                                                    <option value="1">Guadalupe</option>
                                                    <option value="2">Realengo</option>
                                                    <option value="3">Barra da Tijuca</option>
                                                    <option value="4">Recreio</option>
                                                    <option value="5">Campo Grande</option>
                                                    <option value="6">Marechal Hermes</option>
                                                    <option value="7">Vargem Grande</option>
                                                </select>
                                                <label for="email" class="form-label">Email:</label>
                                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                                                <div id="emailHelp" class="form-text">Nunca compartilharemos seu email com mais ninguém.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="senha" class="form-label">Senha:</label>
                                                <input type="password" class="form-control" id="senha" required>
                                            </div>
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" id="check" required>
                                                <label class="form-check-label" for="check">Ao fornecer meus dados eu concordo com os <a href="#">termos de serviço</a>.</label>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="foot-content">
                            <img style="width: 24px;" src="img/icon-tel.png">
                            <p class="paragrafo">40028922</p>
                        </div>
                    </footer>

                    <div>
                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="#">

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email:</label>
                                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="senha" class="form-label">Senha:</label>
                                            <input type="password" class="form-control" id="senha" required>
                                        </div>
                                        <div class="mb-3">
                                            <?php
                                            include "valida.php"
                                            ?>
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Logar</button>
                                        </div>
                                    </form>
                                </div>
                        
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="planos">
                        <h2 class="tit-11">A melhor opção na hora de levar <strong class="str">uma vida + saudável</strong></h2>
                        <p class="p1">Os melhores equipamentos, infraestrutura e muito mais com mensalidades acessíveis.</p>
                    </div>                    
                    
                </div>

                

                <div class="content_">
                    <img src="img/img_main.png">
                </div>
               
            </main>

        </div>
    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>