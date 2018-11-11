<?php
/* Smarty version 3.1.33, created on 2018-11-11 17:31:22
  from '/opt/lampp/htdocs/Gerenciador/Views/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be8595a8c5e59_37459412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2779f204edcc2532a9e1dc1a2ccecd3d3bc1d943' => 
    array (
      0 => '/opt/lampp/htdocs/Gerenciador/Views/index.tpl',
      1 => 1541953881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be8595a8c5e59_37459412 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset"utf-8">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/css/bootstrap.css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/css/style.css"/>
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
                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <?php if ($_smarty_tpl->tpl_vars['ONLINE']->value == true) {?>
                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Opções Tarefas
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['NEW_TASK']->value;?>
">Nova Tarefa</a>
                            <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['TASKS']->value;?>
">Lista de Tarefas</a>
                        </div>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link disabled text-danger" href="<?php echo $_smarty_tpl->tpl_vars['NEW_PASS']->value;?>
">Trocar Senha</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link disabled text-warning" href="<?php echo $_smarty_tpl->tpl_vars['LOGOUT']->value;?>
">Sair</a>
                    </li>
                    
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['ONLINE']->value == true) {?>

                    <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['LOGIN']->value;?>
">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['REGISTER']->value;?>
">Register</a>
                    </li>
                    <?php }?>
                    
                    </ul>
                </div>
        </nav>
    </header>
    <br/>
        <h1 class="text-center text-white">Bem Vindo ao Gerenciador de Tarefas</h1>
    <br/>
        <section>
            <?php 
                Rotas::GetPagina();
            ?>
        </section>
            
        <div class="navbar footer fixed-bottom footer-light footer-shadow content container-fluid bg-light ">
            <div class="text-center">
                <p class="lead">Gerenciador de Tarefas</p>
            </div>
        </div>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/bootstrap.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
