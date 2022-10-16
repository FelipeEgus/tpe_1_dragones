
<div>
<h1>LogIn</h1>
    <form method="POST" action="validar">
        <div class="form-group">
            <label for="mail">mail</label>
            <input type="mail" required name="mail" aria-describedby="mailHelp">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required name="password">
        </div>

        {if $error} 
            <div>
                {$error}
            </div>
        {/if}
        <button type="submit">Entrar</button>
    </form>
    
    <h1>Register</h1>
    <form method="POST" action="registrar">
        <div class="form-group">
            <label for="mail">mail</label>
            <input type="mail" required name="mail" aria-describedby="mailHelp">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required name="password">
        </div>
        <button type="submit">Registrar</button>
    </form>


    <a href="{BASE_URL}">volver</a>
</div>


