<?php
include("_session.php");

if ($isLogin) {
    header("Location: ./");
}

$cookieEmail = $_COOKIE['customerEmail'];
$cookiePassword = $_COOKIE['customerPassword'];

?>

<!DOCTYPE html>
<html lang="en">
<?php include("_head.php"); ?>
<body>

<!-- Start PAGE -->
<div class="site">
    <?php include("_header.php"); ?>

    <div class="container mt-5 mb-10 justify-content-center" style="max-width: 30rem;">
        <div class="card bg-light shadow-lg">
            <div class="align-self-center mt-5 mb-5 w-75">
                <div class="alert alert-danger" id="isEmpty" style="display: none;">Invalid your email or password</div>
                <div id="fail-message" class="alert alert-danger collapse" role="alert"></div>
                <form id="login" class="needs-validation" method="post" action="login-process.php">
                    <input type="email" name="email" id="email" class="form-control mb-3" placeholder="E-Mail"
                           value="<?= $cookieEmail ?>" required>
                    <input type="password" name="password" id="password" class="form-control mb-3"
                           placeholder="Password" value="<?= $cookiePassword ?>" required>
                    <div class="form-control-flat">
                        <label class="checkbox">
                            <input type="checkbox" class="rememberMe" name="rememberMe" value="forever"
                                <?= ($cookieEmail) ? "checked" : "" ?>>
                            <i></i> Remember Me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>

    <?php include("_footer.php"); ?>
    <!-- End contents -->

</div>
<!-- End PAGE -->

<script>

    $("#login").submit(function (event) {
        event.preventDefault();
        const post_url = $(this).attr("action");
        const form_data = $(this).serialize();
        const params = new URLSearchParams(location.search);

        $.post(post_url, form_data, function () {
            if (params.get('p')) {
                $(location).attr('href', './' + params.get('p') + '.php');
            } else {
                $(location).attr('href', './')
            }
        }).fail(function (error) {
            console.log(error.responseText);
            $("#fail-message").html(error.responseText).show();
        });
    });
</script>
<?php include("_script.php"); ?>
</body>
</html>

