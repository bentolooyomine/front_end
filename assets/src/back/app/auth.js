$(document).ready(function() {
    $("#btn_auth").click(function() {
        var $this = $(this);
        var loadingText = '<i class="fas fa-circle-notch fa-spin"></i> Validasi...';
        if ($(this).html() !== loadingText) {
            $this.data('original-text', $(this).html());
            $this.html(loadingText);
        }
        var username = $("#username").val();
        var password = $("#password").val();
        var captcha  = $("#captcha").val();
        $.ajax({
            url: "auth/validasi_login",
            method: "POST",
            data: {
                username: username,
                password: password,
                captcha: captcha,
            },
            dataType: "JSON",
            beforeSend: function() {
                $this.html(loadingText);
            },
            success: function(response) {
                if(response.success === true) {
                    $("#form-login")[0].reset();
                    $('#success').trigger("play");   
                    alert_success(response.message);
                    setTimeout(function () {
                        if(response.gid == 'DESA'){
                            window.location = "dashboard/desa";
                        }else{
                            window.location = "dashboard";
                        }
                    }, 2000);
                } else {
                    $('#error').trigger("play");
                    alert_error(response.message);
                    $this.html($this.data('original-text'));
                }
                $this.html($this.data('original-text'));
            },
            error: function(response) {
                alert_error('Aplikasi sedang gangguan.');
                $this.html($this.data('original-text'));
            }
        });
    });
});