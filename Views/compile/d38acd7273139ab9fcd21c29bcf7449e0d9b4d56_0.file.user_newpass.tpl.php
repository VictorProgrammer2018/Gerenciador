<?php
/* Smarty version 3.1.33, created on 2018-11-10 19:33:12
  from '/opt/lampp/htdocs/Gerenciador/Views/user_newpass.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be72468173ea9_67967246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd38acd7273139ab9fcd21c29bcf7449e0d9b4d56' => 
    array (
      0 => '/opt/lampp/htdocs/Gerenciador/Views/user_newpass.tpl',
      1 => 1541874049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be72468173ea9_67967246 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div class="container col-md-4">
                
            <div class="p-3 mb-2 bg-light text-dark">
                    <form method="post" >
                        <legend class="text-center">Recuperar Senha</legend>
                        <hr/>
                        <div class="form-group">
                            <label >Senha Atual</label>
                            <input type="password" class="form-control" name="pass_atual"  placeholder="Entre com o e-mail">
                        </div>
                        <div class="form-group">
                            <label >Nova Senha</label>
                            <input type="password" class="form-control" name="pass_new"  placeholder="Entre com o e-mail">
                        </div>
                        <center>
                        <button type="submit" class="btn btn-warning col-md-6">Alterar</button>
                        </center>
                    </form>
            </div>
</div><?php }
}
