<!DOCTYPE html>
<html lang="en">
<?php include("_head.php"); ?>
<body>

<!-- Start PAGE -->
<div class="site">
    <?php include("_header.php"); ?>
    <div class="container-fullwidth">
        <div class="row">
            <div class="col-md-12">
                <div class="main-content">
                    <div class="main-search">
                        <div class="search-info text-center">
                            <h3 class="mb-3">Your next job is here</h3>
                        </div>

                        <form>
                            <div class="form-row search-form">
                                <div class="col-md-5">
                                    <label class="sr-only" for="search-keyword">Keyword</label>
                                    <input type="text" class="form-control" name="keyword" id="search-keyword"
                                           placeholder="Keyword"
                                           value="" required>
                                </div>
                                <div class="col-md-5">
                                    <label class="sr-only" for="search-location">Location</label>
                                    <select name="location" id="search-location" class="form-control">
                                        <option value="">All Location</option>
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
                                <div class="col-md-2">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pt-0 pb-10">
            <div class="container-boxed max">
                <div class="col-md-12 col-sm-12 pl-5 pr-5">
                    <div class="jobs posts-loop jobs-shortcode">
                        <div class="job-title">
                            <h3>Recommended Jobs</h3>
                        </div>
                        <div>

                            <?php for ($i = 0; $i < 3; $i++) { ?>
                                <article class="job-row">
                                    <div class="loop-item-wrap">
                                        <div class="item-featured">
                                            <a href="#">
                                                <img width="222" height="131" src="images/company/rbc.png"
                                                     alt="RBC"/>
                                            </a>
                                        </div>
                                        <div class="loop-item-content">
                                            <h2 class="loop-item-title">
                                                <a href="#">Developer</a>
                                            </h2>
                                            <p class="content-meta">
                                                <span class="job-company"><a href="#">RBC Amplify</a></span>
                                                <span class="job-type contract">
                                            <a href="#"><i class="far fa-bookmark"></i>Student Job </a>
                                        </span>
                                                <span class="job-location">
                                            <i class="fas fa-map-marker-alt"></i><a
                                                            href="#"><em>Toronto, Ontario</em></a>
                                        </span>
                                                <span>
                                            <time class="entry-date" datetime="2015-08-18T01:40:23+00:00">
                                                <i class="fas fa-calendar-alt"></i>Oct 14, 2018
                                            </time>
                                        </span>
                                            </p>
                                        </div>
                                        <div class="show-view-more">
                                            <a class="btn btn-primary" href="#">View more </a>
                                        </div>
                                    </div>
                                </article>
                            <?php } ?>

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

