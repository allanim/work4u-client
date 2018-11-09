<?php
include("_session.php");
include("_db-connect.php");
include("_func_jobs.php");

if (!$isLogin) {
    header("Location: ./");
} else if ($customerType != 2) {
    header("Location: ./");
}
$limit = 10;
$page = isset($_GET['p']) ? $_GET['p'] : 1;
$jobId = isset($_GET['job']) ? $_GET['job'] : "";
$jobs = getManageAppliedJobs($connection, $customerId, $jobId, $page, $limit);

$jobList = getJobTitleList($connection, $customerId);
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
                <h1 class="page-title">Manage Application</h1>
            </div>
            <div class="page-sub-heading-info">
                <p>You've received 5 applications</p>
            </div>
        </div>
    </div>

    <div class="container-wrap">
        <div class="container-boxed max">
            <div class="row pt-0 pb-10 pl-5 pr-5">
                <div class="col-md-12 col-sm-12">

                    <div class="input-group mb-3 mt-5">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="job">Filter</label>
                        </div>
                        <select class="custom-select" id="jobSelect" style="max-width: 200px;">
                            <option value="">-All jobs-</option>
                            <?php for ($i = 0; $i < count($jobList); $i++) { ?>
                                <option value="<?= $jobList[$i]['ID'] ?>"><?= $jobList[$i]['TITLE'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="member-manage-table mt-1">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Candidate</th>
                                <th>Applied Job</th>
                                <th>Applied Date</th>
                                <th class="text-center">Resume</th>
                                <!--                                <th class="text-center">Action</th>-->
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            for ($i = 0; $i < count($jobs); $i++) {
                                $job = $jobs[$i]; ?>
                                <tr>
                                    <td>
                                        <a href="./job-detail.php"><strong><?= $job['NAME'] ?></strong></a>
                                    </td>
                                    <td>
                                        <a href="./job-detail.php"><strong><?= getJobType($job['TYPE']) ?></strong></a>
                                    </td>
                                    <td>
                                        <i class="fas fa-map-marker-alt"></i>&nbsp;<em><?= date_format(date_create($job['APPLIED_DATE']), "Y-m-d") ?></em>
                                    </td>
                                    <td class="text-center">
                                        <a class="view_applications" href="#" data-toggle="tooltip" title="CV">
                                            <i class="fas fa-file-download"> <?= $job['RESUME'] ?></i>
                                        </a>
                                    </td>
                                    <!--                                    <td class="text-center">-->
                                    <!--                                        <a href="./post-job.php" class="member-manage-action" data-toggle="tooltip"-->
                                    <!--                                           title="Edit Job">-->
                                    <!--                                            <i class="fas fa-edit"></i>-->
                                    <!--                                        </a>-->
                                    <!--                                        <a href="./manage-jobs.php" class="member-manage-action action-delete"-->
                                    <!--                                           data-toggle="tooltip"-->
                                    <!--                                           title="Delete Job">-->
                                    <!--                                            <i class="fas fa-trash-alt"></i>-->
                                    <!--                                        </a>-->
                                    <!--                                    </td>-->
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        <div class="pagination">
                            <!--                            <a href="./manage-jobs.php" class="btn btn-default btn-block btn-loadmore">Load More</a>-->
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
    $("#jobSelect").change(function (event) {
        const jobId = $(this). children("option:selected"). val();
        $(location).attr('href', './manage-application.php?job=' + jobId);
    });
</script>
<?php include("_script.php"); ?>
</body>
</html>

