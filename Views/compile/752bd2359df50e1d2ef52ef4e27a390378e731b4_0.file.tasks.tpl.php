<?php
/* Smarty version 3.1.33, created on 2018-11-11 17:18:40
  from '/opt/lampp/htdocs/Gerenciador/Views/tasks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be85660c26cd9_42634777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '752bd2359df50e1d2ef52ef4e27a390378e731b4' => 
    array (
      0 => '/opt/lampp/htdocs/Gerenciador/Views/tasks.tpl',
      1 => 1541953093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be85660c26cd9_42634777 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container col-md-10 p-3 mb-2 bg-light text-dark">
    <legend class="text-center">Lista de Tarefas</legend>
    <hr/>
    <?php if ($_smarty_tpl->tpl_vars['QUANTIDADE_TASKS']->value > 0) {?>
    <table class="table table-striped ">
        <thead>
            <tr>
                <th>Tarefa</th>
                <th>Descrição</th>
                <th>Prazo</th>
                <th>Prioridade</th>
                <th>Status</th>
                <th colspan="2">Opção</th>
            </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TASKS']->value, 'T');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['T']->value) {
?>
            
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['T']->value['tasks'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['T']->value['description'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['T']->value['date_expires'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['T']->value['priority'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['T']->value['status'];?>
</td>
                    <td>
                        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['TASK_EDIT']->value;?>
">
                            <input type="hidden" name="idtask" id="idtask" value="<?php echo $_smarty_tpl->tpl_vars['T']->value['idtask'];?>
">
                            <button class="btn btn-info">Editar</button>
                        </form>  
                       <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['TASK_DEL']->value;?>
">
                            <input type="hidden" name="idtask" id="idtask" value="<?php echo $_smarty_tpl->tpl_vars['T']->value['idtask'];?>
">
                            <button class="btn btn-danger">Delete</button>
                        </form> 
                </tr>
            
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    </table>
    <?php } else { ?>
        <h3 class="alert alert-danger">Não Há Tarefas no momento</h3>
    <?php }?>
</div><?php }
}
