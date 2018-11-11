<div class="container col-md-10 p-3 mb-2 bg-light text-dark">
    <legend class="text-center">Lista de Tarefas</legend>
    <hr/>
    {if $QUANTIDADE_TASKS > 0}
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
        {foreach from=$TASKS item=T}
            
                <tr>
                    <td>{$T.tasks}</td>
                    <td>{$T.description}</td>
                    <td>{$T.date_expires}</td>
                    <td>{$T.priority}</td>
                    <td>{$T.status}</td>
                    <td>
                        <form method="post" action="{$TASK_EDIT}">
                            <input type="hidden" name="idtask" id="idtask" value="{$T.idtask}">
                            <button class="btn btn-info">Editar</button>
                        </form>  
                       <form method="post" action="{$TASK_DEL}">
                            <input type="hidden" name="idtask" id="idtask" value="{$T.idtask}">
                            <button class="btn btn-danger">Delete</button>
                        </form> 
                </tr>
            
        {/foreach}
    </tbody>
    </table>
    {else}
        <h3 class="alert alert-danger">Não Há Tarefas no momento</h3>
    {/if}
</div>