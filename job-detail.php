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

$isSavedJob = isSavedJobs($connection, $customerId, $job['ID']);
$isAppliedJob = isAppliedJobs($connection, $customerId, $job['ID']);
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
                <h1 class="page-title"><?= $job['TITLE'] ?></h1>
            </div>
            <div class="page-sub-heading-info">
                <p class="content-meta">
                    <span class="job-type mr-3"><i class="far fa-bookmark"></i> <?= getJobType($job['TYPE']) ?></span>
                    <span class="job-location mr-3"><i
                                class="fas fa-map-marker-alt"></i><em>&nbsp;<?= $job['LOCATION'] ?></em></span>
                    <span><time class="entry-date" datetime="2018-08-10T09:46:53+00:00"><i class="far fa-clock"></i>&nbsp;
                            <?= date_format(date_create($job['CLOSING']), "Y-m-d") ?></time></span>
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
                                <?= $job['DESCRIPTION'] ?>
                            </p>

                            <?php if ($customerType == 1) { ?>
                                <div class="job-action">
                                    <?php if ($isAppliedJob) { ?>
                                        <button class="btn btn-secondary" data-toggle="tooltip"
                                                data-original-title="Apply Job"><i class="far fa-heart"></i>&nbsp;Already Applied
                                        </button>
                                    <?php } else {?>
                                        <button class="btn btn-primary" id="apply-job" data-toggle="tooltip"
                                                data-original-title="Apply Job"><i class="far fa-heart"></i>&nbsp;Apply for this job
                                        </button>
                                    <?php } ?>
                                    <?php if ($isSavedJob) { ?>
                                        <button class="btn btn-secondary" data-toggle="tooltip"
                                                data-original-title="Saved Job"><i class="far fa-heart"></i>&nbsp;Saved
                                            Job
                                        </button>
                                    <?php } else {?>
                                        <button class="btn btn-primary" id="save-job" data-toggle="tooltip"
                                                data-original-title="Saved Job"><i class="far fa-heart"></i>&nbsp;Save
                                            Job
                                        </button>
                                    <?php } ?>
                                </div>
                            <?php } ?>
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
                            <h3 class="company-title"><?= $job['COMPANY_NAME'] ?></h3>
                        </div>
                        <div class="company-info">
                            <?= $job['COMPANY_DESC'] ?>
                            <div class="job-social clearfix">
                                <span class="noo-social-title">Connect with us</span>
                                <?php if ($job['COMPANY_WEBSITE']) { ?>
                                    <a href="<?= $job['COMPANY_WEBSITE'] ?>" class="company_website" target="_blank">
                                        <span><?= $job['COMPANY_WEBSITE'] ?></span>
                                    </a>
                                <?php } else { ?>
                                    <a href="#" class="company_website"></a>
                                <?php } ?>
                                <?php if ($job['COMPANY_FACEBOOK']) { ?>
                                    <a class="icon fab fa-facebook" href="<?= $job['COMPANY_FACEBOOK'] ?>"
                                       target="_blank"></a>
                                <?php } ?>
                                <?php if ($job['COMPANY_TWITTER']) { ?>
                                    <a class="icon fab fa-twitter" href="<?= $job['COMPANY_TWITTER'] ?>"
                                       target="_blank"></a>
                                <?php } ?>
                                <?php if ($job['COMPANY_GOOGLE_PLUS']) { ?>
                                    <a class="icon fab fa-google-plus" href="<?= $job['COMPANY_GOOGLE_PLUS'] ?>"
                                       target="_blank"></a>
                                <?php } ?>
                                <?php if ($job['COMPANY_LINKEDIN']) { ?>
                                    <a class="icon fab fa-linkedin" href="<?= $job['COMPANY_LINKEDIN'] ?>"
                                       target="_blank"></a>
                                <?php } ?>
                                <?php if ($job['COMPANY_INSTAGRAM']) { ?>
                                    <a class="icon fab fa-instagram" href="<?= $job['COMPANY_INSTAGRAM'] ?>"
                                       target="_blank"></a>
                                <?php } ?>
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
<script>
    $("#save-job").click(function (event) {
        event.preventDefault();
        const post_url = "save-job-process.php";
        const form_data = "jobId=<?=$job['ID']?>";
        $.post(post_url, form_data, function (msg) {
            $("#m-success #messageBody").html(msg);
            $("#m-success").modal("show");
            $(location).attr('href', './job-detail.php?id=<?=$job['ID']?>')
        }).fail(function (error) {
            console.log(error.responseText);
            $("#m-fail #messageBody").html(error.responseText);
            $("#m-fail").modal("show");
        });
    });

    $("#apply-job").click(function (event) {
        event.preventDefault();
        const post_url = "apply-job-process.php";
        const form_data = "jobId=<?=$job['ID']?>";
        $.post(post_url, form_data, function (msg) {
            $("#m-success #messageBody").html(msg);
            $("#m-success").modal("show");
            $(location).attr('href', './job-detail.php?id=<?=$job['ID']?>')
        }).fail(function (error) {
            console.log(error.responseText);
            $("#m-fail #messageBody").html(error.responseText);
            $("#m-fail").modal("show");
        });
    });
</script>
<?php include("_script.php"); ?>
</body>
</html>

