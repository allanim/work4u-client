<?php
include("_session.php");
include("_db-connect.php");
include("_func_jobs.php");

$limit = 10;
$page = isset($_GET['p']) ? $_GET['p'] : 1;
$jobs = getLatestJobs($connection, 3);
?>

<!DOCTYPE html>
<html lang="en">
<?php include("_head.php"); ?>
<body>

<!-- Start PAGE -->
<div class="site">
    <?php include("_header.php"); ?>
    <div class="container-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="main-content">
                    <?php include("_search-box.php") ?>
                </div>
            </div>
        </div>

        <div class="container-boxed max">
            <div class="row pt-0 pb-10">
                <div class="col-md-12 col-sm-12 pl-5 pr-5">
                    <div class="jobs posts-loop jobs-shortcode">
                        <div class="job-title">
                            <h3>Latest Jobs</h3>
                        </div>
                        <div>
                            <?php
                            for ($i = 0; $i < count($jobs); $i++) {
                                $job = $jobs[$i];
                                include("_job_row.php");
                            }
                            ?>
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

