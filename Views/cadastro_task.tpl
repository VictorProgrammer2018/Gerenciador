<style>
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

<p class="textoinicio"> Olá {$NOME_CLIENTE} , obrigado por cadastrar suas tarefas no {$SITE_NOME} <br>
<a href="{$SITE_HOME}"> {$SITE_HOME} </a>
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

          <td colspan="5">Sua Tarefa Cadastrada - Data => {$TASK.created_at}</td>
        </tr>
        {foreach from=$TASK item=T}        
            <tr style="border: 1px solid #b2dba1">

                <td>  {$T.tasks}  </td>
                <td>  {$T.description} </td>
                <td>  {$T.date_expires}   </td>
                <td>  {$T.priority} </td>
                <td>  {$T.status} </td>
                
            </tr>
        
        {/foreach}
        
    </table>

    </center>
                   
</section><!-- fim da listagem itens -->

             