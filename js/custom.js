$("#signup").submit(function (event) {
    event.preventDefault();
    const post_url = $(this).attr("action");
    const form_data = $(this).serialize();

    if ($("#password").val() !== $("#re-password").val()) {
        const msg = "You are wrong repeat password";
        console.log(msg);
        $("#fail-message").html(msg).show();
        return false;
    }
    $.post(post_url, form_data, function () {
        $(location).attr('href', './')
    }).fail(function (error) {
        console.log(error.responseText);
        $("#fail-message").html(error.responseText).show();
    });
});

$("#login").submit(function (event) {
    event.preventDefault();
    const post_url = $(this).attr("action");
    const form_data = $(this).serialize();
    const params = new URLSearchParams(location.search);

    $.post(post_url, form_data, function () {
        if (params.get('r')) {
            $(location).attr('href', './' + params.get('r') + '.php');
        } else {
            $(location).attr('href', './')
        }
    }).fail(function (error) {
        console.log(error.responseText);
        $("#fail-message").html(error.responseText).show();
    });
});

$("[id^=select-package]").submit(function (event) {
    event.preventDefault();
    const post_url = $(this).attr("action");
    const form_data = $(this).serialize();
    const params = new URLSearchParams(location.search);

    $.post(post_url, form_data, function () {
        if (params.get('r')) {
            $(location).attr('href', './' + params.get('r') + '.php');
        } else {
            $(location).attr('href', './')
        }
    }).fail(function (error) {
        console.log(error.responseText);
        $("#fail-message").html(error.responseText).show();
    });
});