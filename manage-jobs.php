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
                <h1 class="page-title">Manage Jobs</h1>
            </div>
            <div class="page-sub-heading-info">
                <p>You've posted 5 jobs</p>
            </div>
        </div>
    </div>

    <div class="container-wrap">
        <div class="container-boxed max">
            <div class="row pt-0 pb-10 pl-5 pr-5">
                <div class="col-md-12 col-sm-12">

                    <div class="mt-5 text-right clearfix">
                        <a class="btn btn-primary" href="post-job.php">Post a job</a>
                    </div>

                    <div class="member-manage-table mt-1">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th class="hidden-xs hidden-sm">Location</th>
                                <th class="hidden-xs">Closing</th>
                                <th class="text-center">Apps</th>
                                <th class="text-center hidden-xs">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php for ($i = 0; $i < 10; $i++) { ?>
                                <tr>
                                    <td>
                                        <a href="./job-detail.php"><strong>Senior Designer</strong></a>
                                    </td>
                                    <td class="hidden-xs hidden-sm">
                                        <i class="fas fa-map-marker-alt"></i>&nbsp;<em>Toronto, ON</em>
                                    </td>
                                    <td class="job-manage-expires hidden-xs">
                                        <span><i class="far fa-clock"></i>&nbsp;<em>Nov 19, 2018</em></span>
                                    </td>
                                    <td class="text-center">
                                        <a href="manage-jobs.php" class="job-application-status job-application-status-publish">132</a>
                                    </td>
                                    <td class="member-manage-actions hidden-xs text-center">
                                        <a href="./post-job.php" class="member-manage-action" data-toggle="tooltip" title="Edit Job">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="./manage-jobs.php" class="member-manage-action action-delete" data-toggle="tooltip"
                                           title="Delete Job">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        <div class="pagination">
                            <a href="./manage-jobs.php" class="btn btn-default btn-block btn-loadmore">Load More</a>
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

<?php include("_script.php"); ?>
</body>
</html>

