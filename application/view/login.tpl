<div class="">    
    <form method="POST" action="/user/login" class="login text-right">                
        <div class="form-group field">
            <p class="small">{{session.msg_log}}</p>
            <label for="login">Login </label>
            <input type="text" name="login" size="20" value="{{session.log}}" required/><br>
            <label for="pass">Password </label>
            <input type="password" name="pass" size="20"/><br>
            <a href="/user/register" class="">Register</a>
            <input type="submit" value="Login" class="btn btn-primary"/>                    
        </div>
    </form>        
</div>          
