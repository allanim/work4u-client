<?php
include("_session.php");
include("_db-connect.php");
include("_func_jobs.php");

if (!isset($_GET['id'])) {
    header("Location: ./");
}
$job = getJob($connection, $_GET['id']);
if (!$job) {
    header("Location: ./");
}

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
                <h1 class="page-title"><?=$job['TITLE']?></h1>
            </div>
            <div class="page-sub-heading-info">
                <p class="content-meta">
                    <span class="job-type mr-3"><i class="far fa-bookmark"></i> <?=$job['TYPE']?></span>
                    <span class="job-location mr-3"><i
                                class="fas fa-map-marker-alt"></i><em>&nbsp;<?=$job['LOCATION']?></em></span>
                    <span><time class="entry-date" datetime="2018-08-10T09:46:53+00:00"><i class="far fa-clock"></i>&nbsp;<?=$job['CLOSING']?></time></span>
                </p>
            </div>
        </div>
    </div>


    <div class="container-wrap">
        <div class="container-boxed max">
            <div class="row pt-0 pb-10 pl-5 pr-5">

                <div class="col-md-8">
                    <div class="card mt-3 p-3 job-card">
                        <div class="card-body">
                            <p class="card-text job-desc">
                                <?=$job['DESCRIPTION']?>
                            </p>

                            <div class="job-action">
                                <a class="btn btn-primary" data-target="#applyJobModal" href="javascript:void(0);"
                                   data-toggle="modal">
                                    <i class="fas fa-sign-in-alt"></i>&nbsp;Apply for this job
                                </a>
                                <a class="btn btn-primary" href="javascript:void(0);" data-toggle="tooltip"
                                   data-original-title="Saved Job"><i class="far fa-heart"></i>&nbsp;Saved Job</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="company-desc mt-3">
                        <div class="company-header">
                            <div class="company-featured">
                                <a href="#">
                                    <img width="300" height="300" src="images/company/rbc.png" alt="RBC"/>
                                </a>
                            </div>
                            <h3 class="company-title"><?=$job['COMPANY_NAME']?></h3>
                        </div>
                        <div class="company-info">
                            <?=$job['COMPANY_DESC']?>
                            <div class="job-social clearfix">
                                <span class="noo-social-title">Connect with us</span>
                                <a href="#" class="company_website" target="_blank">
                                    <span>http://www.rbc.com</span>
                                </a>
                                <a class="icon fab fa-facebook" href="#" target="_blank"></a>
                                <a class="icon fab fa-twitter" href="#" target="_blank"></a>
                                <a class="icon fab fa-google-plus" href="#" target="_blank"></a>
                                <a class="icon fab fa-linkedin" href="#" target="_blank"></a>
                                <a class="icon fab fa-instagram" href="#" target="_blank"></a>
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

<?php include("_script.php"); ?>
</body>
</html>

