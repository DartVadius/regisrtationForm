<div class="page-header">
    <div class="row">
        <div class="col-md-6">
            <form action="/user/save" method="post" class="login text-right">
                <p class="small">{{session.msg_log}} {{session.msg_user}} {{session.msg_pass}} {{session.msg_email}}</p>
                <div class="form-group field">                    
                    <label for="login">Login </label>
                    <input type="text" name="login" size="20" value="{{session.reg_log}}" required/><br>                   
                    <label for="pass">Password </label>
                    <input type="password" name="pass" size="20" required/><br>                    
                    <label for="conf">Confirm password </label>
                    <input type="password" name="conf" size="20" required/><br>                    
                    <label for="email">Email </label>
                    <input id="email" type="text" name="email" size="20" value="" required/><br>                   
                    <a href="/index" class="">Back</a>
                    <input type="submit" value="Register" class="btn btn-primary"/>
                </div>
            </form>
        </div>
    </div>
</div>