<?php
include("_session.php");
include("_db-connect.php");
include("_func_jobs.php");


//$jobs = getManageJobs($connection, $customerId, $page, $limit);
$limit = 10;
$page = isset($_GET['p']) ? $_GET['p'] : 1;
$keyword = isset($_GET['k']) ? $_GET['k'] : "";
$location = isset($_GET['loc']) ? $_GET['loc'] : "";
$jobs = getJobs($connection, $page, $limit, $keyword, $location);

?>

<!DOCTYPE html>
<html lang="en">
<?php include("_head.php"); ?>
<body>

<!-- Start PAGE -->
<div class="site">
    <?php include("_header.php"); ?>

    <div class="page-heading">
        <div class="search-content shadow">
            <?php include("_search-box.php") ?>
        </div>
    </div>

    <div class="container-wrap">
        <div class="container-boxed max">
            <div class="row pt-0 pb-10 pl-5 pr-5">

                <div class="col-md-12 col-sm-12">
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

                        <div class="pagination">
<!--                            <a href="./jobs.php" class="btn btn-default btn-block btn-loadmore">Load More</a>-->
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

