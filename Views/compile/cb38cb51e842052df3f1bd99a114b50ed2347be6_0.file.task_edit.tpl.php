<?php
/* Smarty version 3.1.33, created on 2018-11-11 16:27:58
  from '/opt/lampp/htdocs/Gerenciador/Views/task_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be84a7e086940_10426747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb38cb51e842052df3f1bd99a114b50ed2347be6' => 
    array (
      0 => '/opt/lampp/htdocs/Gerenciador/Views/task_edit.tpl',
      1 => 1541950063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be84a7e086940_10426747 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div class="container col-md-10">
            <div class="p-3 mb-2 bg-light text-dark">
                    <form method="post" enctype="multipart/form-data">
                    <input type="hidden" id="idtask" name="idtask" value="<?php echo $_smarty_tpl->tpl_vars['TASK']->value[1]['idtask'];?>
">
                        <legend class="text-center">Editar Tarefa</legend>
                        <hr/>
                        <div class="form-group col-md-12">
                            <label >Titulo da Tarefa</label>
                            <input type="text" class="form-control" name="tasks" id="tasks" value="<?php echo $_smarty_tpl->tpl_vars['TASK']->value[1]['tasks'];?>
"  placeholder="Titulo da Tarefa">
                        </div>
                        <div class="form-group col-md-12">
                            <label >Descrição da Tarefa</label>
                            <textarea class="form-control" name="description" rows="4"  placeholder="Descrição da Tarefa"><?php echo $_smarty_tpl->tpl_vars['TASK']->value[1]['description'];?>
</textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label >Prazo</label>
                            <input type="date" class="form-control" name="date_expires" value="<?php echo $_smarty_tpl->tpl_vars['TASK']->value[1]['date_expires'];?>
">
                        </div>
                        <div class="form-group col-md-12">
                            <label >Prioridate da Tarefa</label>
                            <select  class="form-control" name="priority" value="<?php echo $_smarty_tpl->tpl_vars['TASK']->value[1]['priority'];?>
">
                                <option value="Baixa">Baixa</option>
                                <option value="Media">Media</option>
                                <option value="Alta">Alta</option>
                            </select>
                        </div>
                         <div class="form-group col-md-12">
                            <label >Status da Tarefa</label>
                            <select  class="form-control" name="status" value="<?php echo $_smarty_tpl->tpl_vars['TASK']->value[1]['status'];?>
">
                                <option value="Concluido">Concluido</option>
                                <option value="Pendente">Pendente</option>
                            </select>
                        </div>
                        <center>
                        <button type="submit" class="btn btn-primary col-md-6">Atualizar</button>
                        </center>
                    </form>
                </div>
    </div><?php }
}
