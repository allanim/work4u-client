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