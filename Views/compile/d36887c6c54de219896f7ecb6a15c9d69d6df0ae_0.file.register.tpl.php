<?php
/* Smarty version 3.1.33, created on 2018-11-10 17:42:45
  from '/opt/lampp/htdocs/Gerenciador/Views/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be70a85577f24_26162576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd36887c6c54de219896f7ecb6a15c9d69d6df0ae' => 
    array (
      0 => '/opt/lampp/htdocs/Gerenciador/Views/register.tpl',
      1 => 1541867491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be70a85577f24_26162576 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div class="container col-md-10">
            <div class="p-3 mb-2 bg-light text-dark">
                    <form method="post">
                        <legend class="text-center">Formulario de Registro</legend>
                        <hr/>
                        <div class="form-group">
                            <label >User</label>
                            <input type="text" class="form-control" name="user_reg"  placeholder="Entre com o Username">
                            
                        </div>
                        <div class="form-group">
                            <label >E-mail</label>
                            <input type="email" class="form-control" name="email_reg"  placeholder="Entre com o e-mail">
                            
                        </div>
                        <div class="form-group">
                            <label >Senha</label>
                            <input type="password" class="form-control" name="pass_reg" placeholder="Entre com a Senha">
                        </div>
                        <div class="form-group">
                            <label >Confirmar Senha</label>
                            <input type="password" class="form-control" name="pass_reg_dos" placeholder="Confirmar Senha">
                        </div>
                        <center>
                        <button type="submit" class="btn btn-success col-md-6">Registrar</button>
                        </center>
                    </form>
                </div>
    </div><?php }
}
