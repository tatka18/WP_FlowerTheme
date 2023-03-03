(function ($) {
    $(document).on('submit', '#login-form', function (e) {
        e.preventDefault();

        $("#login-status").html(
            '<div class="alert alert alert-info">Please wait little bit! We are logging you in</div>'
        );
        $(this).hide();

        var form = {
            _wpnonce: $("#_wpnonce").val(),
            action: "flower_user_login",
            username: $("#login-form-username").val(),
            pass: $("#login-form-password").val()
        };

        $.post(flowers_obj.ajax_url, form).always(function (data) {
            if (data.status === 2) {
                $("#login-status").html(
                    '<div class="alert alert-success">Success</div>'
                );
                location.href = flowers_obj.home_url;
            } else {
                $("#login-status").html(
                    '<div class="alert alert-danger">Unable to login.</div>'
                );
                $("#login-form").show();
            }
        });
    })

    $(document).on('submit', '#register-form', function (e) {
        e.preventDefault();

        $("#register-status").html(
            '<div class="alert alert alert-info">Please wait little bit!</div>'
        );
        $(this).hide();

        var form = {
            _wpnonce: $("#_wpnonce").val(),
            action: "flower_create_account",
            name: $("#register-form-name").val(),
            username: $("#register-form-username").val(),
            email: $("#register-form-email").val(),
            pass: $("#register-form-password").val(),
            confirm_pass: $("#register-form-repassword").val()
        };

        $.post(flowers_obj.ajax_url, form).always(function (data) {
            if (data.status === 2) {
                $("#register-status").html(
                    '<div class="alert alert-success">Account created!</div>'
                );
                location.href = flowers_obj.home_url;
            } else {
                $("#register-status").html(
                    '<div class="alert alert-danger">Unable to create an account.</div>'
                );
                $("#register-form").show();
            }
        });
    })

    $("#recipe_rating").bind('rated', function () {
        $(this).rateit('readonly', true);

        var form = {
            action: 'r_rate_recipe',
            rid: $(this).data('rid'),
            rating: $(this).rateit('value')
        };

        $.post(flowers_obj.ajax_url, form, function (data) {

        });
    });

})(jQuery);