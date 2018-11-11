<?php
/* Smarty version 3.1.33, created on 2018-11-11 12:51:17
  from '/opt/lampp/htdocs/Gerenciador/Views/task_new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be817b5f3f319_10361220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '333dbbb9e5eac4dd06ab06596b0089acfcae1596' => 
    array (
      0 => '/opt/lampp/htdocs/Gerenciador/Views/task_new.tpl',
      1 => 1541936930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be817b5f3f319_10361220 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div class="container col-md-10">
            <div class="p-3 mb-2 bg-light text-dark">
                    <form method="post">
                    <input type="hidden" id="idtask" name="idtask" >
                        <legend class="text-center">Nova Tarefa</legend>
                        <hr/>
                        <div class="form-group col-md-12">
                            <label >Titulo da Tarefa</label>
                            <input type="text" class="form-control" name="tasks"  placeholder="Titulo da Tarefa">
                        </div>
                        <div class="form-group col-md-12">
                            <label >Descrição da Tarefa</label>
                            <textarea class="form-control" name="description" rows="4"  placeholder="Descrição da Tarefa"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label >Prazo</label>
                            <input type="date" class="form-control" name="date_expires" >
                        </div>
                        <div class="form-group col-md-12">
                            <label >Prioridate da Tarefa</label>
                            <select  class="form-control" name="priority">
                                <option value="Baixa">Baixa</option>
                                <option value="Media">Media</option>
                                <option value="Alta">Alta</option>
                            </select>
                        </div>
                         <div class="form-group col-md-12">
                            <label >Status da Tarefa</label>
                            <select  class="form-control" name="status">
                                <option value="Concluido">Concluido</option>
                                <option value="Pendente">Pendente</option>
                            </select>
                        </div>
                        <center>
                        <button type="submit" class="btn btn-success col-md-6">Cadastrar</button>
                        </center>
                    </form>
                </div>
    </div><?php }
}
