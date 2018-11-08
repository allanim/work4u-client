<?php
include("_session.php");
include("_db-connect.php");
include("_func_jobs.php");

if (!$isLogin) {
    header("Location: ./");
} else if ($customerType != 2) {
    header("Location: ./");
} else if (!hasPermitEmployee($connection, $customerId)) {
    header("Location: ./select-package.php?r=post-job");
}
$employee = getEmployee($connection, $customerId);

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
                <h1 class="page-title">Post a job</h1>
            </div>
            <div class="page-sub-heading-info">
                <p>Describe your company and vacancy</p>
            </div>
        </div>
    </div>

    <div class="container-wrap">
        <div class="container-boxed max">

            <div class="row pt-0 pb-10 pl-5 pr-5">
                <div class="col-md-12">
                    <div class="card mt-3 p-3 form-body">

                        <form enctype="multipart/form-data" class="needs-validation" method="post" id="post-job"
                              action="post-job-process.php">
                            <div class="form-title">
                                <h4>Job Details</h4>
                            </div>
                            <div class="job-form">
                                <div class="job-form-detail bottom-line">
                                    <div class="form-group row">
                                        <label for="position" class="col-sm-3 control-label">Job Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="" class="form-control" id="title"
                                                   name="title" autofocus required
                                                   placeholder="Enter a short title for your job">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="desc" class="col-sm-3 control-label">Job Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="description" name="description" rows="15"
                                                      placeholder="Describe your job in a few paragraphs"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="location" class="col-sm-3 control-label">Job Location</label>
                                        <div class="col-sm-9">
                                            <select id="location" name="location"
                                                    data-placeholder="Enter a city and country or leave it blank"
                                                    class="form-control form-control-chosen" required>
                                                <option value="">&nbsp;</option>
                                                <option value="Toronto, ON">Toronto, ON</option>
                                                <option value="Ottawa, ON">Ottawa, ON</option>
                                                <option value="Mississauga, ON">Mississauga, ON</option>
                                                <option value="Brampton, ON">Brampton, ON</option>
                                                <option value="Hamilton, ON">Hamilton, ON</option>
                                                <option value="London, ON">London, ON</option>
                                                <option value="Markham, ON">Markham, ON</option>
                                                <option value="Vaughan, ON">Vaughan, ON</option>
                                                <option value="Kitchener, ON">Kitchener, ON</option>
                                                <option value="Windsor, ON">Windsor, ON</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="type" class="col-sm-3 control-label">Job Type</label>
                                        <div class="col-sm-9">
                                            <select class="form-control form-control-chosen" name="type" id="type"
                                                    data-placeholder="Select job type for your job" required>
                                                <option value="">&nbsp;</option>
                                                <option value="1">Contract</option>
                                                <option value="2">Co-op</option>
                                                <option value="3">Full Time</option>
                                                <option value="4">Part Time</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="closing" class="col-sm-3 control-label">Closing Date</label>
                                        <div class="col-sm-9">
                                            <input type="date" value="" class="form-control jform-datepicker"
                                                   id="closing" name="closing" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="application_email" class="col-sm-3 control-label">Application Notify
                                            Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" value="" class="form-control" id="email"
                                                   name="email">
                                        </div>
                                    </div>

                                </div>

                                <!--
                                <div class="job-form-company bottom-line">
                                    <h4>Company Profile</h4>
                                    <div class="company-profile-form">
                                        <div class="form-group row">
                                            <label for="company_name" class="col-sm-3 control-label">Company
                                                Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="company_name"
                                                       value="<?/*= $employee['COMPANY_NAME'] */?>"
                                                       name="company_name" placeholder="Enter your company name"
                                                       required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="company_website" class="col-sm-3 control-label">Company
                                                Website</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="company_website"
                                                       value="<?/*= $employee['COMPANY_WEBSITE'] */?>"
                                                       name="company_website" placeholder="Enter your company website">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="company_desc" class="col-sm-3 control-label">Company
                                                Description</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="company_desc" name="company_desc"
                                                          rows="8"
                                                          placeholder="Enter your company description">
                                                    <?/*= $employee['COMPANY_DESC'] */?>
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label">Company Logo</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="company_logo" id="company_logo"
                                                       accept=".jpg,.png,.gif">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="company_googleplus"
                                                   class="col-sm-3 control-label">Google+</label>
                                            <div class="col-sm-9">
                                                <input type="url" class="form-control" id="company_googleplus"
                                                       value="<?/*= $employee['COMPANY_GOOGLE_PLUS'] */?>"
                                                       name="company_googleplus" placeholder="http://">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="company_facebook"
                                                   class="col-sm-3 control-label">Facebook</label>
                                            <div class="col-sm-9">
                                                <input type="url" class="form-control" id="company_facebook"
                                                       value="<?/*= $employee['COMPANY_FACEBOOK'] */?>"
                                                       name="company_facebook" placeholder="http://">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="company_linkedin"
                                                   class="col-sm-3 control-label">LinkedIn</label>
                                            <div class="col-sm-9">
                                                <input type="url" class="form-control" id="company_linkedin"
                                                       value="<?/*= $employee['COMPANY_LINKEDIN'] */?>"
                                                       name="company_linkedin" placeholder="http://">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="company_twitter" class="col-sm-3 control-label">Twitter</label>
                                            <div class="col-sm-9">
                                                <input type="url" class="form-control" id="company_twitter"
                                                       value="<?/*= $employee['COMPANY_TWITTER'] */?>"
                                                       name="company_twitter" placeholder="http://">
                                            </div>
                                        </div>
                                        <div class="form-group  row">
                                            <label for="company_instagram"
                                                   class="col-sm-3 control-label">Instagram</label>
                                            <div class="col-sm-9">
                                                <input type="url" class="form-control" id="company_instagram"
                                                       value="<?/*= $employee['COMPANY_INSTAGRAM'] */?>"
                                                       name="company_instagram" placeholder="http://">
                                            </div>
                                        </div>
                                    </div>
                                </div>
-->
                                <div class="form-actions form-group text-center clearfix">
                                    <div id="fail-message" class="alert alert-danger collapse" role="alert"></div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                            </div>
                        </form>
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
    $("#post-job").submit(function (event) {
        event.preventDefault();
        const post_url = $(this).attr("action");
        const form_data = $(this).serialize();

        $.post(post_url, form_data, function () {
            $(location).attr('href', './manage-jobs.php')
        }).fail(function (error) {
            console.log(error.responseText);
            $("#fail-message").html(error.responseText).show();
        });
    });
</script>
<?php include("_script.php"); ?>
</body>
</html>

