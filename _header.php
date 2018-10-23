<header class="site-header shadow">
    <div class="header-wrapper">
        <div class="navbar pt-0 pb-0">
            <div class="container-boxed max">

                <!-- Image and text -->
                <div class="navbar navbar-expand-md navbar-light">
                    <a href="./" class="navbar-brand">
                        <img class="logo-img d-inline" src="images/logo2.png" alt="">
                        <h2 class="d-inline align-middle font-weight-bold">work4u</h2>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-md navbar-dark pt-0 pb-0">
            <div class="container-boxed max">
                <div class="navbar pt-0 pb-0">
                    <div class="collapse navbar-collapse" id="navbarText">
                        <?php if ($customerType == 2) { ?>
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="./post-job.php">Post a job</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./manage-jobs.php">Manage Jobs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./manage-application.php">Manage Application</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./profile-company.php">Profile</a>
                                </li>
                            </ul>
                        <?php } else if ($customerType == 1) { ?>
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="./jobs.php">Find Jobs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./saved-jobs.php">Saved Jobs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./applied-jobs.php">Applied Jobs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./profile.php">Profile</a>
                                </li>
                            </ul>
                        <?php } else { ?>
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="./jobs.php">Find Jobs</a>
                                </li>
                            </ul>
                        <?php } ?>
                        <span class="navbar-text">
                            <?php if ($isLogin) { ?>
                                <ul class="navbar-nav mr-auto align-center">
                                <li class="nav-item-member-profile login-link align-center">
                                    <a class="nav-link" href="./logout.php">
                                        <i class="fas fa-sign-in-alt"></i>&nbsp;Logout
                                    </a>
                                </li>
                            </ul>
                            <?php } else { ?>
                                <ul class="navbar-nav mr-auto align-center">
                                <li class="nav-item-member-profile login-link align-center">
                                    <a class="nav-link" href="./login.php">
                                        <i class="fas fa-sign-in-alt"></i>&nbsp;Login
                                    </a>
                                </li>
                                <li class="">
                                    <a class="nav-link" href="./signup.php">
                                        <i class="fas fa-key"></i>&nbsp;Register
                                    </a>
                                </li>
                            </ul>
                            <?php } ?>
                        </span>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>