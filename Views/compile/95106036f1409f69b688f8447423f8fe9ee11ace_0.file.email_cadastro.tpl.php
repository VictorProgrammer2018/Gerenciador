<?php
/* Smarty version 3.1.33, created on 2018-11-10 18:05:49
  from '/opt/lampp/htdocs/Gerenciador/Views/email_cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be70fedaa9d87_39154849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95106036f1409f69b688f8447423f8fe9ee11ace' => 
    array (
      0 => '/opt/lampp/htdocs/Gerenciador/Views/email_cadastro.tpl',
      1 => 1541869536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be70fedaa9d87_39154849 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Olá <?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
 , obrigado por se cadastrar em <?php echo $_smarty_tpl->tpl_vars['SITE']->value;?>
</h3>

<p> Cadastro efetuado com sucesso,  para fazer  o login use seu email cadastrado ( <?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
 )
<br>

</h3><?php }
}
