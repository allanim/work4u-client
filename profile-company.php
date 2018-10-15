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
                <h1 class="page-title">Profile of company</h1>
            </div>
            <div class="page-sub-heading-info">
                <p>Describe your company</p>
            </div>
        </div>
    </div>


    <div class="container-wrap">
        <div class="container-boxed max">

            <div class="row pt-0 pb-10 pl-5 pr-5">
                <div class="col-md-12">
                    <div class="card mt-3 p-3 form-body">

                        <form enctype="multipart/form-data">
                            <div class="job-form">
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
                                                       class="form-control-file" accept=".jpg,.png,.gif">
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

                                    <div class="form-actions form-group text-center clearfix">
                                        <button type="submit" class="btn btn-primary">Save profile</button>
                                    </div>
                                </div>


                                <div class="job-form-company bottom-line">
                                    <h4>Change Password</h4>
                                    <div class="company-profile-form">
                                        <div class="form-group row">
                                            <label for="currentPassword" class="col-sm-3 control-label">Current
                                                password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="currentPassword"
                                                       value=""
                                                       name="currentPassword">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="company-profile-form">
                                        <div class="form-group row">
                                            <label for="newPassword" class="col-sm-3 control-label">New
                                                password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="newPassword"
                                                       value=""
                                                       name="newPassword">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="company-profile-form">
                                        <div class="form-group row">
                                            <label for="cNewPassword" class="col-sm-3 control-label">Confirm new
                                                password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="cNewPassword"
                                                       value=""
                                                       name="cNewPassword">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-actions form-group text-center clearfix">
                                        <button type="submit" class="btn btn-primary">Save new password</button>
                                    </div>
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

