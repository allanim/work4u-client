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
                <form id="login" class="needs-validation" method="post">
                    <input type="email" name="email" id="email" class="form-control mb-3" placeholder="E-Mail"
                           required>
                    <input type="password" name="password" id="password" class="form-control mb-3"
                           placeholder="Password" required>
                    <div class="form-control-flat">
                        <label class="checkbox">
                            <input type="checkbox" class="rememberme" name="rememberme" value="forever">
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

<?php include("_script.php"); ?>
</body>
</html>

