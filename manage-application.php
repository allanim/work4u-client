<!DOCTYPE html>
<html lang="en">
<?php include("_head.php"); ?>
<body>

<!-- Start PAGE -->
<div class="site">
    <?php include("_header.php"); ?>

    <div class="page-heading">
        <div class="container-fluid max heading-content shadow pl-10 pr-10">
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
                        <select class="custom-select" id="job" style="max-width: 200px;">
                            <option value="">-All jobs-</option>
                            <option value="">Senior Designer</option>
                            <option value="">Developer</option>
                            <option value="">QA Tester</option>
                            <option value="">Marketing Online</option>
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
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php for ($i = 0; $i < 10; $i++) { ?>
                                <tr>
                                    <td>
                                        <a href="./job-detail.php"><strong>Allan Im</strong></a>
                                    </td>
                                    <td>
                                        <a href="./job-detail.php"><strong>Developer</strong></a>
                                    </td>
                                    <td>
                                        <i class="fas fa-map-marker-alt"></i>&nbsp;<em>Nov 11, 2018</em>
                                    </td>
                                    <td class="text-center">
                                        <a class="view_applications" href="#" data-toggle="tooltip" title="CV">
                                            <i class="fas fa-file-download"> allan-resume.pdf</i>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a href="./post-job.php" class="member-manage-action" data-toggle="tooltip"
                                           title="Edit Job">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="./manage-jobs.php" class="member-manage-action action-delete"
                                           data-toggle="tooltip"
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

