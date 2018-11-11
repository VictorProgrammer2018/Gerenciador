<?php
/* Smarty version 3.1.33, created on 2018-11-10 18:49:44
  from '/opt/lampp/htdocs/Gerenciador/Views/user_recovery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be71a38e84f86_37066100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7a4407725fb3a413ab882ac5f4abdfcacd9bfef' => 
    array (
      0 => '/opt/lampp/htdocs/Gerenciador/Views/user_recovery.tpl',
      1 => 1541872183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be71a38e84f86_37066100 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div class="container col-md-4">
                
            <div class="p-3 mb-2 bg-light text-dark">
                    <form method="post" >
                        <legend class="text-center">Recuperar Senha</legend>
                        <hr/>
                        <div class="form-group">
                            <label >E-mail</label>
                            <input type="email" class="form-control" name="email_reco"  placeholder="Entre com o e-mail">
                            
                        </div>
                        <center>
                        <button type="submit" class="btn btn-danger col-md-6">Recuperar</button>
                        </center>
                    </form>
            </div>
</div><?php }
}
