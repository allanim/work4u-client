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

                        <form enctype="multipart/form-data">
                            <div class="form-title">
                                <h4>Job Details</h4>
                            </div>
                            <div class="job-form">
                                <div class="job-form-detail bottom-line">
                                    <div class="form-group row">
                                        <label for="position" class="col-sm-3 control-label">Job Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="" class="form-control" id="position"
                                                   name="position" autofocus required
                                                   placeholder="Enter a short title for your job">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="desc" class="col-sm-3 control-label">Job Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="desc" name="desc" rows="15"
                                                      placeholder="Describe your job in a few paragraphs"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="location" class="col-sm-3 control-label">Job Location</label>
                                        <div class="col-sm-9">
                                            <select id="location" name="location[]"
                                                    data-placeholder="Enter a city and country or leave it blank"
                                                    class="form-control form-control-chosen">
                                                <option value="">&nbsp;</option>
                                                <option value="">Toronto, ON</option>
                                                <option value="">Ottawa, ON</option>
                                                <option value="">Mississauga, ON</option>
                                                <option value="">Brampton, ON</option>
                                                <option value="">Hamilton, ON</option>
                                                <option value="">London, ON</option>
                                                <option value="">Markham, ON</option>
                                                <option value="">Vaughan, ON</option>
                                                <option value="">Kitchener, ON</option>
                                                <option value="">Windsor, ON</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="type" class="col-sm-3 control-label">Job Type</label>
                                        <div class="col-sm-9">
                                            <select class="form-control form-control-chosen" name="type" id="type"
                                                    data-placeholder="Select job type for your job">
                                                <option value="">&nbsp;</option>
                                                <option value="">Contract</option>
                                                <option value="">Co-op</option>
                                                <option value="">Full Time</option>
                                                <option value="">Part Time</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="closing" class="col-sm-3 control-label">Closing Date</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="" class="form-control jform-datepicker"
                                                   id="closing" name="closing" placeholder="YYYY-MM-DD">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="application_email" class="col-sm-3 control-label">Application Notify
                                            Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="" class="form-control" id="application_email"
                                                   name="application_email">
                                        </div>
                                    </div>

                                </div>


                                <div class="job-form-company bottom-line">
                                    <h4>Company Profile</h4>
                                    <div class="company-profile-form">
                                        <div class="form-group row">
                                            <label for="company_name" class="col-sm-3 control-label">Company
                                                Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="company_name" value=""
                                                       name="company_name" placeholder="Enter your company name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="company_website" class="col-sm-3 control-label">Company
                                                Website</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="company_website" value=""
                                                       name="company_website" placeholder="Enter your company website">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="company_desc" class="col-sm-3 control-label">Company
                                                Description</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="company_desc" name="company_desc"
                                                          rows="8"
                                                          placeholder="Enter your company description"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label">Company Logo</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="application_attachment"
                                                       accept=".jpg,.png,.gif">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="company_googleplus"
                                                   class="col-sm-3 control-label">Google+</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="company_googleplus" value=""
                                                       name="company_googleplus" placeholder="http://">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="company_facebook"
                                                   class="col-sm-3 control-label">Facebook</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="company_facebook" value=""
                                                       name="company_facebook" placeholder="http://">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="company_linkedin"
                                                   class="col-sm-3 control-label">LinkedIn</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="company_linkedin" value=""
                                                       name="company_linkedin" placeholder="http://">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="company_twitter" class="col-sm-3 control-label">Twitter</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="company_twitter" value=""
                                                       name="company_twitter" placeholder="http://">
                                            </div>
                                        </div>
                                        <div class="form-group  row">
                                            <label for="company_instagram"
                                                   class="col-sm-3 control-label">Instagram</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="company_instagram" value=""
                                                       name="company_instagram" placeholder="http://">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions form-group text-center clearfix">
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

<?php include("_script.php"); ?>
</body>
</html>

