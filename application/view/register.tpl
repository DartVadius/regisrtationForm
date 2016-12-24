<div class="page-header">
    <div class="row">
        <div class="col-md-6">
            <form name = "reg" class="login text-right">
                <div class="form-group field">
                    <label for="login">Login </label>
                    <input id="login" type="text" name="login" size="20" value="{{session.reg_log}}" required/><br>
                    <label for="pass">Password </label>
                    <input id="pass" type="password" name="pass" size="20" required/><br>
                    <label for="conf">Confirm password </label>
                    <input id="conf" type="password" name="conf" size="20" required/><br>
                    <label for="email">Email </label>
                    <input id="email" type="text" name="email" size="20" value="" required/><br>
                    <a href="/index" class="">Back</a>
                    <input type="button" id="register" value="Register" class="btn btn-primary"/>
                </div>
                    <div id="response"></div>
            </form>
        </div>
    </div>
</div>