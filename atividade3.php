<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Formulário de Contato</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style> 
        .imagemPequena{
            width: 85px;
            height: 60px;
            border: 2px solid gray;
        }
    </style>
</head>
<body>
    <div class="container mx-auto bg-light mt-1 w-90">
        <header class="row" id="home">
            <!-- oculte a barra de acessibilidade -->
            <div id="barra_acessibilidade" class="col-12 d-none">
                <ul id="atalhos">
                    <li><a href="#menu" accesskey="1">Ir para menu [1]</a></li>
                    <li><a href="#formulario" accesskey="2">Ir para formulário [2]</a></li>
                </ul>   
            </div>
<!-- faça com que as duas divs a seguir sejam exibidas lado a lado quando o viewport for maior ou igual a 576px sendo que a primeira deve ocupar 3/12 e a segunda 9/12 consulte: https://getbootstrap.com.br/docs/4.1/layout/grid/ -->
            <div class="col-sm-3">   
                <img class="imagemPequena" src="amazon.png" alt="Logotipo da empresa com dois triângulos sobrepostos.">
            </div>
            <div class="col-sm-9">
                <h1>Empresa XPTO</h1>
            </div>
        </header>
        <section class="row">
            <div class="d-none col-12">
            <!-- oculte o header abaixo 
            consulte https://getbootstrap.com.br/docs/4.1/utilities/display/ -->
                <h2 id="menu">Menu</h2>
            </div>
            <div class="col-12">
                    <!-- torne o menu responsivo, conforme o exemplo
                    consulte https://getbootstrap.com.br/docs/4.1/components/navbar/ -->
                <nav class="navbar navbar-expand-sm navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Alterna navegação">
                        <span class="navbar-toggler-icon"></span>
                    </button> 
                    <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo01">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contato">Contato</a>
                            </li>
                        </ul>
                    </div>               
                </nav>
            </div>
            <article id="contato" class="col-12">  
                <h2 id="formulario">Formulário de Contato</h2>
                <!-- torne o formulário responsivo, conforme o exemplo consulte https://getbootstrap.com.br/docs/4.1/components/forms/ -->  
                <form class="needs-validation" novalidate>
                    <fieldset>
                        <legend class="d-none">Informe seus dados</legend>
                        <div class="form-group row">
                            <label for="validationCustom01" class="col-sm-2 col-form-label">Nome*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Digite seu nome" required>
                                <div class="invalid-feedback">
                                    Campo nome obrigatório.
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom02" class="col-sm-2 col-form-label">E-mail*</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="validationCustom02" placeholder="Digite seu email" required>
                                <div class="invalid-feedback">
                                    Campo e-mail obrigatório.
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom03" class="col-sm-2 col-form-label">Mensagem*</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="validationCustom03" required></textarea>
                                <div class="invalid-feedback">
                                    Campo mensagem obrigatório.
                                </div> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <button type="submit" class="col-form-label btn btn-primary my-1">Enviar</button> 
                                <p>
                                    * Campos obrigatórios.    
                                </p>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </article>
        </section>
        <footer class="row">
            <div class="col-2">
                <p>Copyright © 2021</p>
            </div>
        </footer>
    </div>

    <script>
            // Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
            (function() {
              'use strict';
              window.addEventListener('load', function() {
                // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
                var forms = document.getElementsByClassName('needs-validation');
                // Faz um loop neles e evita o envio
                var validation = Array.prototype.filter.call(forms, function(form) {
                  form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                  }, false);
                });
              }, false);
            })();
            </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <noscript>Atualize seu navegador</noscript>
</body>
</html>