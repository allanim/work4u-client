<?php
include("_session.php");
include("_db-connect.php");
include("_func_jobs.php");

if (!$isLogin) {
    header("Location: ./");
} else if ($customerType != 2) {
    header("Location: ./");
}
$employee = getEmployee($connection, $customerId);

?>

<!DOCTYPE html>
<html lang="en">
<?php include("_head.php"); ?>
<body>

<!-- Start PAGE -->
<div class="site">
    <?php include("_header.php"); ?>

    <div class="container-wrap heading-content shadow">
        <div class="container-boxed max page-heading pl-10 pr-10">
            <div class="page-heading-info">
                <h1 class="page-title">Select a package</h1>
            </div>
            <div class="page-sub-heading-info">
                <p>Choose a Package That Fits Your Need</p>
            </div>
        </div>
    </div>


    <div class="container-wrap">
        <div class="container-boxed max">

            <div class="row pt-0 pb-10 pl-5 pr-5">
                <div class="col-md-12">
                    <div class="card mt-3 p-3 form-body">
                        <?php if (hasPermitEmployee($connection, $customerId)) { ?>
                            <div class="form-title mb-3">
                                <h4>Your contract period is until <strong><?= $employee['DUE_DATE'] ?></strong></h4>
                            </div>
                        <?php } ?>
                        <div class="job-form">
                            <div class="job-form-company">
                                <div class="company-profile-form">
                                    <div id="fail-message" class="alert alert-danger collapse" role="alert"></div>

                                    <div class="job-package clearfix">
                                        <div class="pricing-table pricing-4-col package-pricing">
                                            <div class="pricing-column">
                                                <div class="pricing-content">
                                                    <div class="pricing-header">
                                                        <h2 class="pricing-title">7Days</h2>
                                                        <h3 class="pricing-value">
                                                            <span class="price"><span
                                                                        class="amount">$19.99</span></span>
                                                        </h3>
                                                    </div>
                                                    <div class="pricing-info">
                                                        <ul class="ul-icon fa-ul">
                                                            <li class="li-icon"><i class="fa fa-check-circle"></i>
                                                                <?php if (hasPermitEmployee($connection, $customerId)) { ?>
                                                                    Plus 7 Days
                                                                <?php } else { ?>
                                                                    To <?= date_create("+7 day", timezone_open('America/Toronto'))->format('M d, Y') ?>
                                                                <?php } ?>
                                                            </li>
                                                            <li class="li-icon"><i class="fa fa-check-circle"></i>
                                                                Unlimited Posting
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="pricing-footer">
                                                        <form method="post" id="select-package"
                                                              action="select-package-process.php">
                                                            <input type="hidden" name="type" value="7">
                                                            <button type="submit" class="btn btn-lg btn-primary">
                                                                Select
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pricing-column">
                                                <div class="pricing-content">
                                                    <div class="pricing-header">
                                                        <h2 class="pricing-title">30Days</h2>
                                                        <h3 class="pricing-value">
                                                            <span class="price"><span
                                                                        class="amount">$59.99</span></span>
                                                        </h3>
                                                    </div>
                                                    <div class="pricing-info">
                                                        <ul class="ul-icon fa-ul">
                                                            <li class="li-icon"><i class="fa fa-check-circle"></i>
                                                                <?php if (hasPermitEmployee($connection, $customerId)) { ?>
                                                                    Plus 30 Days
                                                                <?php } else { ?>
                                                                    To <?= date_create("+30 day", timezone_open('America/Toronto'))->format('M d, Y') ?>
                                                                <?php } ?>
                                                            </li>
                                                            <li class="li-icon"><i class="fa fa-check-circle"></i>
                                                                Unlimited Posting
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="pricing-footer">
                                                        <form method="post" id="select-package"
                                                              action="select-package-process.php">
                                                            <input type="hidden" name="type" value="30">
                                                            <button type="submit" class="btn btn-lg btn-primary">
                                                                Select
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pricing-column featured">
                                                <div class="pricing-content">
                                                    <div class="pricing-header">
                                                        <h2 class="pricing-title">90Days</h2>
                                                        <h3 class="pricing-value">
                                                            <span class="price"><span
                                                                        class="amount">$149.99</span></span>
                                                        </h3>
                                                    </div>
                                                    <div class="pricing-info">
                                                        <ul class="ul-icon fa-ul">
                                                            <li class="li-icon"><i class="fa fa-check-circle"></i>
                                                                <?php if (hasPermitEmployee($connection, $customerId)) { ?>
                                                                    Plus 90 Days
                                                                <?php } else { ?>
                                                                    To <?= date_create("+90 day", timezone_open('America/Toronto'))->format('M d, Y') ?>
                                                                <?php } ?>
                                                            </li>
                                                            <li class="li-icon"><i class="fa fa-check-circle"></i>
                                                                Unlimited Posting
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="pricing-footer">
                                                        <form method="post" id="select-package"
                                                              action="select-package-process.php">
                                                            <input type="hidden" name="type" value="7">
                                                            <button type="submit" class="btn btn-lg btn-primary">
                                                                Select
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pricing-column">
                                                <div class="pricing-content">
                                                    <div class="pricing-header">
                                                        <h2 class="pricing-title">180Days</h2>
                                                        <h3 class="pricing-value">
                                                            <span class="price"><span
                                                                        class="amount">$249.99</span></span>
                                                        </h3>
                                                    </div>
                                                    <div class="pricing-info">
                                                        <ul class="ul-icon fa-ul">
                                                            <li class="li-icon"><i class="fa fa-check-circle"></i>
                                                                <?php if (hasPermitEmployee($connection, $customerId)) { ?>
                                                                    Plus 180 Days
                                                                <?php } else { ?>
                                                                    To <?= date_create("+180 day", timezone_open('America/Toronto'))->format('M d, Y') ?>
                                                                <?php } ?>
                                                            </li>
                                                            <li class="li-icon"><i class="fa fa-check-circle"></i>
                                                                Unlimited Posting
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="pricing-footer">
                                                        <form method="post" id="select-package"
                                                              action="select-package-process.php">
                                                            <input type="hidden" name="type" value="7">
                                                            <button type="submit" class="btn btn-lg btn-primary">
                                                                Select
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include("_footer.php"); ?>
    <!-- End contents -->

</div>
<!-- End PAGE -->

<script>
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

</script>
<?php include("_script.php"); ?>
</body>
</html>

