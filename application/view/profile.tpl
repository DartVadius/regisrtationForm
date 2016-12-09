<div class="page-header">
    <div class="row">
        <div class="col-md-12">
            <p>Логин: {{session.user_login}}</p>
            <p>E-mail: {{session.user_email}}</p>
            <form action="/user/update" method="post" class="">                
                <input type="submit" value="Update" class="btn btn-primary"/>                
            </form>            
        </div>
    </div>
</div>
