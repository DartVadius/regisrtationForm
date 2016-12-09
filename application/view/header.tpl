<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="/public/js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="/testreg/public/css/bootstrap.css">
        <script src="/public/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="/public/css/style.css">
        <script src="/public/js/myJS.js" type="text/javascript"></script>
    </head>
    <body>
    <div class="container">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-12">
                    {% if session.user_id %}
                        {% include 'logged.tpl' %}
                    {% elseif register is empty %}
                        {% include 'login.tpl' %}
                    {% endif %}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    {% include 'menu.tpl' %}
                </div>
            </div>
        </div>