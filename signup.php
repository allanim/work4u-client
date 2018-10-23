<?php
include("_session.php");

if ($isLogin) {
    header("Location: ./");
}
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
                <form id="signup" class="needs-validation" method="post" action="signup-process.php">
                    <input type="email" name="email" id="email" class="form-control mb-3" placeholder="E-Mail"
                           required maxlength="255">
                    <input type="text" name="name" id="name" class="form-control mb-3" placeholder="Name"
                           required maxlength="255">
                    <input type="password" name="password" id="password" class="form-control mb-3"
                           placeholder="Password" required maxlength="255">
                    <input type="password" name="re-password" id="re-password" class="form-control mb-3"
                           placeholder="Repeat Password" required maxlength="255">
                    <select class="custom-select form-control mb-3" name="type" id="type" required>
                        <option value="">-Select-</option>
                        <option value="1">I&#039;m a candidate looking for a job</option>
                        <option value="2">I&#039;m an employer looking to hire</option>
                    </select>

                    <button type="submit" class="btn btn-lg btn-primary btn-block">Sign up</button>
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

