<?php
/* Smarty version 3.1.33, created on 2018-11-11 13:15:23
  from '/opt/lampp/htdocs/Gerenciador/Views/cadastro_task.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be81d5b884196_74533864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a41116c5ed2e5e1c1b4dd0d98e20406d81004caf' => 
    array (
      0 => '/opt/lampp/htdocs/Gerenciador/Views/cadastro_task.tpl',
      1 => 1541938124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be81d5b884196_74533864 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.tabela {
    border-collapse: collapse;
    width: 100%;
}

.tabela th, td {
    text-align: left;
    padding: 8px;
}

.tabela tr:nth-child(odd){
  background-color: #b2b2b2;
}

.sessao{
  
  padding:20px;
}


.total{
  text-align:right;
}

.frete{
  text-align:right;
}

.totalfrete{
  text-align:right;
  font-size:18px;
  font-style: bold;
  color:#062a46;
}





.textoinicio{
  text-align:center;
}

.minhaconta{
  text-align:center;
}


</style>

<p class="textoinicio"> Olá <?php echo $_smarty_tpl->tpl_vars['NOME_CLIENTE']->value;?>
 , obrigado por cadastrar suas tarefas no <?php echo $_smarty_tpl->tpl_vars['SITE_NOME']->value;?>
 <br>
<a href="<?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
 </a>
</p>

<section class="row ">
   
    <center>
      
     
   <br>
        
    <table class="tabela" style="width: 95%;">
     
        <tr style="
            border: 1px solid #b2dba1; 
            
            background-color: #072339;
            color:#FFF;
            font-size:18px;" >

          <td colspan="5">Sua Tarefa Cadastrada - Data => <?php echo $_smarty_tpl->tpl_vars['TASK']->value['created_at'];?>
</td>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TASK']->value, 'T');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['T']->value) {
?>        
            <tr style="border: 1px solid #b2dba1">

                <td>  <?php echo $_smarty_tpl->tpl_vars['T']->value['tasks'];?>
  </td>
                <td>  <?php echo $_smarty_tpl->tpl_vars['T']->value['description'];?>
 </td>
                <td>  <?php echo $_smarty_tpl->tpl_vars['T']->value['date_expires'];?>
   </td>
                <td>  <?php echo $_smarty_tpl->tpl_vars['T']->value['priority'];?>
 </td>
                <td>  <?php echo $_smarty_tpl->tpl_vars['T']->value['status'];?>
 </td>
                
            </tr>
        
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </table>

    </center>
                   
</section><!-- fim da listagem itens -->

             <?php }
}
