<!DOCTYPE html>
<html>
    <head>
        <meta charset"utf-8">
        <link rel="stylesheet" href="{$TEMA}/css/bootstrap.css"/>
        <link rel="stylesheet" href="{$TEMA}/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="{$TEMA}/css/style.css"/>
        <link rel="shortcut icon" href="midia/image/icon2.png" type="imagem/x-icon">
        
    </head>
<body class="bg-info">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Gerenciador de Tarefas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{$HOME}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    {if $ONLINE == true}
                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Opções Tarefas
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{$NEW_TASK}">Nova Tarefa</a>
                            <a class="dropdown-item" href="{$TASKS}">Lista de Tarefas</a>
                        </div>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link disabled text-danger" href="{$NEW_PASS}">Trocar Senha</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link disabled text-warning" href="{$LOGOUT}">Sair</a>
                    </li>
                    
                    {/if}
                    {if $ONLINE == true}

                    {else}
                    <li class="nav-item">
                        <a class="nav-link" href="{$LOGIN}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{$REGISTER}">Register</a>
                    </li>
                    {/if}
                    
                    </ul>
                </div>
        </nav>
    </header>
    <br/>
        <h1 class="text-center text-white">Bem Vindo ao Gerenciador de Tarefas</h1>
    <br/>
        <section>
            {php}
                Rotas::GetPagina();
            {/php}
        </section>
            
        <div class="navbar footer fixed-bottom footer-light footer-shadow content container-fluid bg-light ">
            <div class="text-center">
                <p class="lead">Gerenciador de Tarefas</p>
            </div>
        </div>
        <script src="{$TEMA}/js/jquery.min.js"></script>
        <script src="{$TEMA}/js/bootstrap.js"></script>
        <script src="{$TEMA}/js/bootstrap.min.js"></script>
</body>
</html>