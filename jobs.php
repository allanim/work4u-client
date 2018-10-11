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
            <div class="row pt-0 pb-10">
                <div class="col-md-12 col-sm-12 pl-5 pr-5">
                    <div class="jobs posts-loop jobs-shortcode">
                        <div class="job-title">
                            <h3>Latest Jobs</h3>
                        </div>
                        <div>
                            <?php for ($i = 0; $i < 10; $i++) {
                                include("_job_row.php");
                            } ?>
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
