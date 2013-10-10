$(document).ready(function() {

    $("#bt_entrar").click(function()
    {

        $(".resposta").fadeOut("normal");

        if($("#st_username").val() === "" || $("#st_passwd").val() === "" )
        {
            $(".resposta").fadeIn("normal");
            $("#msg").empty().html("Preencha todos os campos!");
        }
        else
        {

            $('.div_login').showLoading();

            $.post('login/logar',
            { st_username: $("#st_username").val(),
              st_passwd: $("#st_passwd").val() },

            function(data)
            {
                switch(data)
                {
                    case "pass":
                        $("#login-form").submit();
                        break;

                    case "e_pass":
                        $('.div_login').hideLoading();
                        $(".resposta").fadeIn("normal");
                        $("#msg").empty()
                            .html("Usuário ou senha incorreta!");
                        break;

                    case "e_conn":
                        $('.div_login').hideLoading();
                        $(".resposta").fadeIn("normal");
                        $("#msg").empty()
                            .html("Não foi possível conectar ao servidor!");
                        break;
                }
            });
        }

    });

    $("#bt_limpar").click(function(){
            $("#st_username").val("");
            $("#st_passwd").val("");
            $(".resposta").fadeOut("slow");
    });

    $(".close").click(function(){
            $(".resposta").fadeOut("slow");
    });

});