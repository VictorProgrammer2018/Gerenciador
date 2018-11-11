  <div class="container col-md-10">
            <div class="p-3 mb-2 bg-light text-dark">
                    <form method="post" enctype="multipart/form-data">
                    <input type="hidden" id="idtask" name="idtask" value="{$TASK.1.idtask}">
                        <legend class="text-center">Editar Tarefa</legend>
                        <hr/>
                        <div class="form-group col-md-12">
                            <label >Titulo da Tarefa</label>
                            <input type="text" class="form-control" name="tasks" id="tasks" value="{$TASK.1.tasks}"  placeholder="Titulo da Tarefa">
                        </div>
                        <div class="form-group col-md-12">
                            <label >Descrição da Tarefa</label>
                            <textarea class="form-control" name="description" rows="4"  placeholder="Descrição da Tarefa">{$TASK.1.description}</textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label >Prazo</label>
                            <input type="date" class="form-control" name="date_expires" value="{$TASK.1.date_expires}">
                        </div>
                        <div class="form-group col-md-12">
                            <label >Prioridate da Tarefa</label>
                            <select  class="form-control" name="priority" value="{$TASK.1.priority}">
                                <option value="Baixa">Baixa</option>
                                <option value="Media">Media</option>
                                <option value="Alta">Alta</option>
                            </select>
                        </div>
                         <div class="form-group col-md-12">
                            <label >Status da Tarefa</label>
                            <select  class="form-control" name="status" value="{$TASK.1.status}">
                                <option value="Concluido">Concluido</option>
                                <option value="Pendente">Pendente</option>
                            </select>
                        </div>
                        <center>
                        <button type="submit" class="btn btn-primary col-md-6">Atualizar</button>
                        </center>
                    </form>
                </div>
    </div>