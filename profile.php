<?php
include("_session.php");
include("_db-connect.php");
include("_func_jobs.php");

if (!$isLogin) {
    header("Location: ./");
} else if ($customerType != 1) {
    header("Location: ./");
}
//$jobs = getManageJobs($connection, $customerId, $page, $limit);

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
                <h1 class="page-title">Profile</h1>
            </div>
            <div class="page-sub-heading-info">
                <p>Describe you</p>
            </div>
        </div>
    </div>


    <div class="container-wrap">
        <div class="container-boxed max">

            <div class="row pt-0 pb-10 pl-5 pr-5">
                <div class="col-md-12">
                    <div class="card mt-3 p-3 form-body">

                        <form enctype="multipart/form-data">
                            <div class="job-form">
                                <div class="job-form-company bottom-line">
                                    <div class="company-profile-form">
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-3 control-label">Full Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="name" value="" name="name"
                                                       placeholder="Enter your name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-sm-3 control-label">E-mail</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" id="email" value=""
                                                       name="email" placeholder="email@domain.com">
                                            </div>
                                        </div>

                                        <div class="company-profile-form">
                                            <div class="form-group row">
                                                <label for="currentPassword" class="col-sm-3 control-label">Current
                                                    password</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" id="currentPassword"
                                                           value=""
                                                           name="currentPassword">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="company-profile-form">
                                            <div class="form-group row">
                                                <label for="newPassword" class="col-sm-3 control-label">New
                                                    password</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" id="newPassword"
                                                           value=""
                                                           name="newPassword">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="company-profile-form">
                                            <div class="form-group row">
                                                <label for="cNewPassword" class="col-sm-3 control-label">Confirm new
                                                    password</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" id="cNewPassword"
                                                           value=""
                                                           name="cNewPassword">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-actions form-group text-center clearfix">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                        </form>
                    </div>
                </div>
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

