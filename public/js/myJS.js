$(document).ready(
        function () {
            $('#register').click(function () {
                var data = {
                    login: $('#login').val(),
                    pass: $('#pass').val(),
                    conf: $('#conf').val(),
                    email: $('#email').val()
                };
                $.post("/user/save", JSON.stringify(data)).done(function (data) {
                    if (data.length > 0) {
                        var newData = JSON.parse(data);
                        if (newData.msg !== '') {
                            $('#response >').remove();
                            $('#response').append($('<p>').text(newData.msg));
                        }
                    } else {
                        window.location.href = 'http://testreg';
                    }
                });
            });
        }
);
