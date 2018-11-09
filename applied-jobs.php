<?php
include("_session.php");
include("_db-connect.php");
include("_func_jobs.php");

if (!$isLogin) {
    header("Location: ./");
} else if ($customerType != 1) {
    header("Location: ./");
}
$jobs = getAppliedJobs($connection, $customerId, $page, $limit);

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
                <h1 class="page-title">Applied jobs</h1>
            </div>
            <div class="page-sub-heading-info">
                <p>You've applied 5 job</p>
            </div>
        </div>
    </div>

    <div class="container-wrap">
        <div class="container-boxed max">
            <div class="row pt-0 pb-10 pl-5 pr-5">
                <div class="col-md-12 col-sm-12">

                    <div class="member-manage-table mt-3">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Company</th>
                                <th>Applied Job</th>
                                <th>Applied Date</th>
                                <th>Job location</th>
                                <th class="text-center">Resume</th>
<!--                                <th class="text-center">Action</th>-->
                            </tr>
                            </thead>
                            <tbody>
                            <?php for ($i = 0; $i < count($jobs); $i++) {
                                $job = $jobs[$i];
                                ?>
                                <tr>
                                    <td>
                                        <a href="./job-detail.php"><strong><?=$job['COMPANY_NAME']?></strong></a>
                                    </td>
                                    <td>
                                        <a href="./job-detail.php"><strong><?= getJobType($job['TYPE']) ?></strong></a>
                                    </td>
                                    <td>
                                        <i class="far fa-clock"></i>&nbsp;<em><?= date_format(date_create($job['APPLIED_DATE']), "Y-m-d") ?></em>
                                    </td>
                                    <td>
                                        <i class="fas fa-map-marker-alt"></i>&nbsp;<em><?= $job['LOCATION'] ?></em>
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
<!--                        <div class="pagination">-->
<!--                            <a href="./manage-jobs.php" class="btn btn-default btn-block btn-loadmore">Load More</a>-->
<!--                        </div>-->
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

