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
                <h1 class="page-title">Saved jobs</h1>
            </div>
            <div class="page-sub-heading-info">
                <p>You've saved 5 jobs</p>
            </div>
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
                            <?php for ($i = 0; $i < 5; $i++) {
                                include("_job_row.php");
                            } ?>
                        </div>

                        <div class="pagination">
                            <a href="./jobs.php" class="btn btn-default btn-block btn-loadmore">Remove</a>
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

