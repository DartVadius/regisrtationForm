<div class="page-header">
    <div class="row">
        <div class="col-md-12">
            <p><h2>Профиль пользователя: {{session.user_login}}</h2></p>
        <p>{{session.msg_pass}}{{session.msg_email}}{{session.msg_log}}</p>
            <form action="/user/saveupdate" method="post" class="login">                
                <div class="form-group field">
                    <table class="table-condensed">
                    <tr>
                        <th><label for="pass">New password  </label></th>
                        <th><input type="password" name="pass" size="20" required/></th>
                    </tr>
                    <tr>
                        <th><label for="conf">Confirm password  </label></th>
                        <th><input type="password" name="conf" size="20" required/></th>
                    </tr>
                    <tr>
                        <th><label for="email">New Email  </label></th>
                        <th><input id="email" type="text" name="email" size="20" value="" required/></th>
                    </tr>
                    <tr>
                        <th></th>
                        <th><a href="/index" class="text-right">Back </a><input type="submit" value="Save Changes" class="btn btn-primary"/></th>
                    </tr>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>
