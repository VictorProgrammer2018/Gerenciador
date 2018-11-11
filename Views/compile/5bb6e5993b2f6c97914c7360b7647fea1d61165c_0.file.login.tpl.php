<?php
/* Smarty version 3.1.33, created on 2018-11-11 13:09:40
  from '/opt/lampp/htdocs/Gerenciador/Views/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be81c0491c160_59439225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bb6e5993b2f6c97914c7360b7647fea1d61165c' => 
    array (
      0 => '/opt/lampp/htdocs/Gerenciador/Views/login.tpl',
      1 => 1541937270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be81c0491c160_59439225 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div class="container col-md-4">
                
            <div class="p-3 mb-2 bg-light text-dark">
                    <form method="post" >
                    <input type="hidden" name="iduser" />
                        <legend class="text-center">Login</legend>
                        <hr/>
                        <div class="form-group">
                            <label >E-mail</label>
                            <input type="email" class="form-control" name="user_login"  placeholder="Entre com o e-mail">
                            
                        </div>
                        <div class="form-group">
                            <label >Senha</label>
                            <input type="password" class="form-control" name="pass_login" placeholder="Senha">
                        </div>
                        <center>
                        <button type="submit" class="btn btn-info col-md-6">Logar</button>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['USER_RECOVERY']->value;?>
" class="btn text-info">Esqueceu Sua senha?</a>
                        </center>
                    </form>
                </div>
    </div><?php }
}
