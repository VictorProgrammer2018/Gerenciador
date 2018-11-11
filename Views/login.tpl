  <div class="container col-md-4">
                
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
                        <a href="{$USER_RECOVERY}" class="btn text-info">Esqueceu Sua senha?</a>
                        </center>
                    </form>
                </div>
    </div>